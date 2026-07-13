<?php
namespace Opencart\Admin\Controller\Extension\Blueberry\Other;

/**
 * Class AttributeSort
 *
 * Per-product attribute sort order (Extensions > Other). Adds, to the
 * product Attribute tab:
 *   - a group separator/header for each attribute group (with spacing between groups),
 *   - a "Sort Order" number per attribute that restarts at 1 inside each group,
 *   - up/down arrows to reorder the groups,
 *   - up/down arrows to reorder attributes WITHIN their own group.
 *
 * Everything is injected via events; no core file is modified.
 *
 * @package Opencart\Admin\Controller\Extension\Blueberry\Other
 */
class AttributeSort extends \Opencart\System\Engine\Controller {
	/**
	 * Info page (Extensions > Other > Attribute Sort Order).
	 */
	public function index(): void {
		$this->load->language('extension/blueberry/other/attribute_sort');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/blueberry/other/attribute_sort', 'user_token=' . $this->session->data['user_token'])
		];

		$data['back'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=other');

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/blueberry/other/attribute_sort', $data));
	}

	public function install(): void {
		$this->load->model('extension/blueberry/other/attribute_sort');

		$this->model_extension_blueberry_other_attribute_sort->install();
	}

	public function uninstall(): void {
		$this->load->model('extension/blueberry/other/attribute_sort');

		$this->model_extension_blueberry_other_attribute_sort->uninstall();
	}

	/**
	 * Event: admin/view/catalog/product_form/after
	 */
	public function injectForm(string &$route, array &$data, mixed &$output): void {
		if (!is_string($output)) {
			return;
		}

		$product_id = isset($this->request->get['product_id']) ? (int)$this->request->get['product_id'] : 0;

		$meta = [];
		$gsort = [];

		if ($product_id) {
			$this->load->model('extension/blueberry/other/attribute_sort');

			$meta = $this->model_extension_blueberry_other_attribute_sort->getAttributeMeta($product_id);
			$gsort = $this->model_extension_blueberry_other_attribute_sort->getGroupSort($product_id);
		}

		$js = <<<'BBJS'
<script>
(function () {
	function ready(fn) {
		if (document.readyState !== 'loading') { fn(); } else { document.addEventListener('DOMContentLoaded', fn); }
	}

	ready(function () {
		var table = document.getElementById('product-attribute');

		if (!table) { return; }

		var tbody = table.querySelector('tbody');

		if (!tbody) { return; }

		var meta = __BB_META__;    // { attribute_id: { gid, gname, so } }
		var gsort = __BB_GSORT__;  // { gid: sort_order }
		var LARGE = 999999;

		function escapeHtml(s) {
			return String(s).replace(/[&<>"]/g, function (c) {
				return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;' }[c];
			});
		}

		// Header: add a "Sort Order" column before the last header cell.
		var headRow = table.querySelector('thead tr');

		if (headRow && !headRow.querySelector('.bb-sort-th')) {
			var th = document.createElement('th');
			th.className = 'bb-sort-th text-center';
			th.style.whiteSpace = 'nowrap';
			th.textContent = 'Sort Order';
			headRow.insertBefore(th, headRow.lastElementChild);
		}

		if (headRow && !headRow.querySelector('.bb-sdso-th')) {
			var th2 = document.createElement('th');
			th2.className = 'bb-sdso-th text-center';
			th2.style.whiteSpace = 'nowrap';
			th2.textContent = 'Sort Description Sort Order';
			headRow.insertBefore(th2, headRow.lastElementChild);
		}

		var colCount = headRow ? headRow.children.length : 5;

		// Footer colspan
		var footTd = table.querySelector('tfoot tr td[colspan]');

		if (footTd) { footTd.setAttribute('colspan', parseInt(footTd.getAttribute('colspan'), 10) + 2); }

		function attrId(row) {
			var h = row.querySelector('input[name*="[attribute_id]"]');

			return h ? h.value : '';
		}

		function rowIndex(row) {
			var el = row.querySelector('input[name*="[name]"], textarea[name*="[text]"], input[name*="[attribute_id]"]');

			if (el) {
				var m = el.getAttribute('name').match(/product_attribute\[(\d+)\]/);

				if (m) { return m[1]; }
			}

			return '';
		}

		// Sort Order cell = up/down arrows (move within group) + number input.
		// Sort Description Sort Order cell = independent manual number (blank = hidden).
		function ensureSortCell(row) {
			var existingCell = row.querySelector('.bb-sort-cell');

			if (existingCell) {
				return {
					sort: existingCell.querySelector('.bb-sort-input'),
					sdso: row.querySelector('.bb-sdso-input')
				};
			}

			var idx = rowIndex(row);
			var aid = attrId(row);
			var m = (aid !== '' && meta[aid]) ? meta[aid] : null;
			var sdsoVal = (m && m.sdso !== null && m.sdso !== undefined) ? m.sdso : '';

			var td = document.createElement('td');
			td.className = 'bb-sort-cell text-center';
			td.style.whiteSpace = 'nowrap';
			td.innerHTML =
				'<div style="display:flex;align-items:center;justify-content:center;gap:6px;">' +
				'<button type="button" class="bb-el-up btn btn-sm btn-light border" title="Move up"><i class="fa-solid fa-arrow-up"></i></button>' +
				'<button type="button" class="bb-el-down btn btn-sm btn-light border" title="Move down"><i class="fa-solid fa-arrow-down"></i></button>' +
				'<input type="text" name="product_attribute[' + idx + '][sort_order]" value="" class="form-control bb-sort-input" style="width:56px;"/>' +
				'</div>';
			row.insertBefore(td, row.lastElementChild);

			var td2 = document.createElement('td');
			td2.className = 'bb-sdso-cell text-center';
			td2.style.whiteSpace = 'nowrap';
			td2.innerHTML =
				'<input type="text" name="product_attribute[' + idx + '][short_description_sort_order]" value="' + escapeHtml(sdsoVal) + '" class="form-control bb-sdso-input" style="width:70px;" placeholder="-"/>';
			row.insertBefore(td2, row.lastElementChild);

			return {
				sort: td.querySelector('.bb-sort-input'),
				sdso: td2.querySelector('.bb-sdso-input')
			};
		}

		function makeGroupHeader(gname, gid, pos) {
			var tr = document.createElement('tr');
			tr.className = 'bb-group-header';

			var td = document.createElement('td');
			td.setAttribute('colspan', colCount);
			td.style.cssText = 'background:#eef1f5;font-weight:600;vertical-align:middle;';
			td.innerHTML =
				'<button type="button" class="bb-group-up btn btn-sm btn-light border" title="Move group up"><i class="fa-solid fa-arrow-up"></i></button> ' +
				'<button type="button" class="bb-group-down btn btn-sm btn-light border" title="Move group down"><i class="fa-solid fa-arrow-down"></i></button>' +
				'<span style="margin-left:10px;">' + escapeHtml(gname) + '</span>' +
				'<input type="hidden" name="bb_group_sort[' + gid + ']" value="' + pos + '" class="bb-gsort"/>';
			tr.appendChild(td);

			return tr;
		}

		function makeSpacer() {
			var tr = document.createElement('tr');
			tr.className = 'bb-group-spacer';

			var td = document.createElement('td');
			td.setAttribute('colspan', colCount);
			td.style.cssText = 'border:0 !important;background:transparent !important;padding:0;height:18px;';
			tr.appendChild(td);

			return tr;
		}

		// Collect existing attribute rows into groups.
		var origRows = Array.prototype.slice.call(tbody.querySelectorAll('tr'));
		var groupsById = {};
		var encounter = [];
		var ungrouped = [];

		origRows.forEach(function (row) {
			var aid = attrId(row);
			var m = (aid !== '' && meta[aid]) ? meta[aid] : null;

			if (m && m.gname) {
				var gid = String(m.gid);

				if (!groupsById[gid]) {
					groupsById[gid] = { gid: gid, gname: m.gname, gso: (gsort[gid] != null ? gsort[gid] : LARGE), rows: [] };
					encounter.push(gid);
				}

				groupsById[gid].rows.push({ row: row, so: (m.so || 0) });
			} else {
				ungrouped.push(row);
			}
		});

		var groupList = encounter.map(function (gid) { return groupsById[gid]; });

		groupList.sort(function (a, b) {
			if (a.gso !== b.gso) { return a.gso - b.gso; }

			return encounter.indexOf(a.gid) - encounter.indexOf(b.gid);
		});

		groupList.forEach(function (g) {
			g.rows.sort(function (a, b) { return (a.so || 0) - (b.so || 0); });
		});

		// Detach the original rows, then rebuild grouped.
		origRows.forEach(function (r) { if (r.parentNode) { r.parentNode.removeChild(r); } });

		var gpos = 1;

		groupList.forEach(function (g) {
			tbody.appendChild(makeGroupHeader(g.gname, g.gid, gpos));

			var i = 1;

			g.rows.forEach(function (rr) {
				var cells = ensureSortCell(rr.row);
				cells.sort.value = i;
				tbody.appendChild(rr.row);
				i++;
			});

			gpos++;
		});

		// Trailing block for new / not-yet-grouped rows.
		if (ungrouped.length) {
			var htr = document.createElement('tr');
			htr.className = 'bb-group-header bb-group-ungrouped';

			var htd = document.createElement('td');
			htd.setAttribute('colspan', colCount);
			htd.style.cssText = 'background:#f7f7f7;font-weight:600;color:#999;';
			htd.textContent = '(Ungrouped / new - save to place in its group)';
			htr.appendChild(htd);
			tbody.appendChild(htr);

			var j = 1;

			ungrouped.forEach(function (row) {
				var cells = ensureSortCell(row);
				if (cells.sort.value === '') { cells.sort.value = j; }
				tbody.appendChild(row);
				j++;
			});
		}

		// ---- helpers -------------------------------------------------------

		function headerOf(row) {
			var n = row;

			while (n) {
				if (n.nodeType === 1 && n.classList && n.classList.contains('bb-group-header')) { return n; }

				n = n.previousElementSibling;
			}

			return null;
		}

		function blockOf(header) {
			var block = [header];
			var n = header.nextElementSibling;

			while (n && !n.classList.contains('bb-group-header') && !n.classList.contains('bb-group-spacer')) {
				block.push(n);
				n = n.nextElementSibling;
			}

			return block;
		}

		function removeSpacers() {
			Array.prototype.forEach.call(tbody.querySelectorAll('tr.bb-group-spacer'), function (s) {
				if (s.parentNode) { s.parentNode.removeChild(s); }
			});
		}

		function renumberGroups() {
			var pos = 1;

			Array.prototype.forEach.call(tbody.querySelectorAll('tr.bb-group-header'), function (h) {
				var gs = h.querySelector('.bb-gsort');

				if (gs) { gs.value = pos; pos++; }
			});
		}

		// Re-add spacing between groups + renumber group hidden inputs.
		function refreshLayout() {
			removeSpacers();

			var headers = tbody.querySelectorAll('tr.bb-group-header');

			for (var i = 0; i < headers.length; i++) {
				if (i > 0) { tbody.insertBefore(makeSpacer(), headers[i]); }
			}

			renumberGroups();
		}

		// Renumber the Sort Order inputs (1..N) inside one group block.
		function renumberGroupElements(header) {
			var n = header.nextElementSibling;
			var i = 1;

			while (n && !n.classList.contains('bb-group-header') && !n.classList.contains('bb-group-spacer')) {
				var inp = n.querySelector('.bb-sort-input');

				if (inp) { inp.value = i; i++; }

				n = n.nextElementSibling;
			}
		}

		// Move a whole group up/down among the groups.
		function moveGroup(header, dir) {
			removeSpacers();

			var headers = Array.prototype.slice.call(tbody.querySelectorAll('tr.bb-group-header'));
			var idx = headers.indexOf(header);

			if (idx === -1) { refreshLayout(); return; }

			var block = blockOf(header);

			if (dir < 0) {
				if (idx === 0) { refreshLayout(); return; }

				var prev = headers[idx - 1];

				block.forEach(function (el) { tbody.insertBefore(el, prev); });
			} else {
				var next = headers[idx + 1];

				if (!next || next.classList.contains('bb-group-ungrouped')) { refreshLayout(); return; }

				var nb = blockOf(next);
				var ref = nb.length ? nb[nb.length - 1].nextElementSibling : next.nextElementSibling;

				block.forEach(function (el) { tbody.insertBefore(el, ref); });
			}

			refreshLayout();
		}

		// Move an attribute up/down within its own group.
		function moveElement(row, dir) {
			var header = headerOf(row);

			if (!header) { return; }

			if (dir < 0) {
				var prev = row.previousElementSibling;

				if (prev && !prev.classList.contains('bb-group-header') && !prev.classList.contains('bb-group-spacer')) {
					tbody.insertBefore(row, prev);
				}
			} else {
				var next = row.nextElementSibling;

				if (next && !next.classList.contains('bb-group-header') && !next.classList.contains('bb-group-spacer')) {
					tbody.insertBefore(next, row);
				}
			}

			renumberGroupElements(header);
		}

		// ---- interactions (all arrow buttons) ------------------------------

		tbody.addEventListener('click', function (e) {
			if (!e.target.closest) { return; }

			var gUp = e.target.closest('.bb-group-up');
			var gDown = e.target.closest('.bb-group-down');

			if (gUp || gDown) {
				e.preventDefault();

				var header = (gUp || gDown).closest('tr.bb-group-header');

				if (header && !header.classList.contains('bb-group-ungrouped')) { moveGroup(header, gUp ? -1 : 1); }

				return;
			}

			var eUp = e.target.closest('.bb-el-up');
			var eDown = e.target.closest('.bb-el-down');

			if (eUp || eDown) {
				e.preventDefault();

				var row = (eUp || eDown).closest('tr');

				if (row) { moveElement(row, eUp ? -1 : 1); }
			}
		});

		// New rows added by the core "add attribute" button.
		var mo = new MutationObserver(function (muts) {
			muts.forEach(function (mut) {
				Array.prototype.forEach.call(mut.addedNodes, function (n) {
					if (n.nodeType === 1 && n.tagName === 'TR' && !n.classList.contains('bb-group-header') && !n.classList.contains('bb-group-spacer')) {
						var cells = ensureSortCell(n);

						if (cells && cells.sort.value === '') { cells.sort.value = 1; }
					}
				});
			});
		});

		// Initial layout (spacing + group numbering), then watch for new rows.
		refreshLayout();
		mo.observe(tbody, { childList: true });
	});
})();
</script>
BBJS;

		$js = str_replace('__BB_META__', json_encode($meta ?: new \stdClass()), $js);
		$js = str_replace('__BB_GSORT__', json_encode($gsort ?: new \stdClass()), $js);

		if (strpos($output, '</body>') !== false) {
			$output = str_replace('</body>', $js . '</body>', $output);
		} else {
			$output .= $js;
		}
	}

	/**
	 * Event: admin/model/catalog/product.editProduct/after
	 */
	public function saveEdit(string &$route, array &$args, mixed &$output): void {
		$product_id = isset($args[0]) ? (int)$args[0] : 0;

		$this->store($product_id);
	}

	/**
	 * Event: admin/model/catalog/product.addProduct/after
	 */
	public function saveAdd(string &$route, array &$args, mixed &$output): void {
		$product_id = (int)$output;

		$this->store($product_id);
	}

	protected function store(int $product_id): void {
		if (!$product_id) {
			return;
		}

		$this->load->model('extension/blueberry/other/attribute_sort');

		$this->model_extension_blueberry_other_attribute_sort->saveSort($product_id, $this->request->post);
	}
}

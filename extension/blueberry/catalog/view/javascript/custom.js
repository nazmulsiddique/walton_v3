

$(document).ready(function(){

    $('#productTabSection .tab-btn').on('click', function () {

        let btn = $(this);
        let target = btn.data('tab');

        let parent = $('#productTabSection');

        // hide only inside this parent
        parent.find('.tab-content')
            .addClass('hidden')
            .removeClass('block');

        parent.find('#' + target)
            .removeClass('hidden')
            .addClass('block');

        // reset only inside this parent
        parent.find('.tab-btn')
            .removeClass('text-[#6c7fd8] active-tab')
            .addClass('text-[#686e7d]');

        // active style
        btn.removeClass('text-[#686e7d]')
           .addClass('text-[#6c7fd8] active-tab');

    });

    $('#productCategorySection .tab-btn').click(function () {

        let parent = $('#productCategorySection');

        // remove active only inside this parent
        parent.find('.tab-btn')
            .removeClass('ring-2 ring-[#6c7fd8] scale-105');

        // add active to clicked
        $(this).addClass('ring-2 ring-[#6c7fd8] scale-105');

        // hide only this section's content
        parent.find('.tab-content').hide();

        // show selected tab content
        parent.find('#' + $(this).data('tab')).fadeIn(200);

    });


    // Mobile Filter Show
    const filterBtn = document.querySelector('.bb-toggle-filter');
    const filterPanel = document.getElementById('bb-mobile-filter');
    const overlay = document.querySelector('.bb-mobile-filter-overlay');
    const closeBtn = document.querySelector('.bb-close-filter');

    if (filterBtn) {
        filterBtn.addEventListener('click', function (e) {
            e.preventDefault();

            overlay.classList.remove('hidden');
            filterPanel.classList.add('bb-filter-open');
        });
    }

    if (overlay) {
        overlay.addEventListener('click', function () {
            overlay.classList.add('hidden');
            filterPanel.classList.remove('bb-filter-open');
        });
    }

    if (closeBtn) {
        closeBtn.addEventListener('click', function () {
            overlay.classList.add('hidden');
            filterPanel.classList.remove('bb-filter-open');
        });
    }
    // Data push for Mobile Filter
    $('#column_left_content_show').html(
        $('#column_left_content').html()
    );

   

});

// Header Menu Sticky
const header = document.getElementById("bottom-header");
window.addEventListener("scroll", () => {
    if (window.scrollY > 100) {
        header.classList.add("fixed", "top-0", "left-0", "w-full", "z-150", "shadow-md", "ease-in-out");
    } else {
        header.classList.remove("fixed", "top-0", "left-0", "w-full", "z-150", "shadow-md");
    }
});


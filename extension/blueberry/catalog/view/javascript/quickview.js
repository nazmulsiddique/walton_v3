$(document).on("click", ".bb-modal-toggle", function () {
    let product_id = $(this).data("product-id");
    $.get('index.php?route=extension/blueberry/product/quickview&product_id=' + product_id, function (html) {
        // remove old modal only
        $(".bb-modal").remove();
        $(".bb-modal-overlay").remove();
        // add overlay manually (IMPORTANT FIX)
        $("body").append('<div class="bb-modal-overlay"></div>');
        // add modal from ajax
        $("body").append(html);
        // show modal
        $(".bb-modal-overlay, .bb-modal")
            .removeClass("hidden")
            .addClass("opacity-100 pointer-events-auto");
    });

});

// CLOSE MODAL
$(document).on("click", ".bb-close-modal, .bb-modal-overlay", function () {
    $(".bb-modal, .bb-modal-overlay").remove();
    $("body").removeClass("bb-overflow-hidden");
});
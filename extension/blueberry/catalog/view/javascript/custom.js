

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

    /* Mobile menu sidebar JS */


});

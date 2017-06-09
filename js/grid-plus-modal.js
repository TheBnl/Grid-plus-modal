(function(){
    'use strict';

    // Wait for the grid to have been loaded
    $('.grid-plus-container').on('gridInitCompleted', function () {

        // capture the click and load the required html
        $('.grid-stack-item a').on('click', function (e) {
            e.preventDefault();
            var targetHref = $(this).attr('href');

            // Get the data and trigger the modal view
            $.get(targetHref, function(data) {
                var postData = $(data).find('article.post');
                $.fancybox.open(postData);
            });

            return false;
        })
    });
})();
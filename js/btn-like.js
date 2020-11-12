var $buttons = $(".button");

    // Click button
    $buttons.on('click', function () {
    var $button = $(this);

    // Button Off
    if ($button.hasClass('is-active')) {
        $button
        .removeClass('is-active');
        return;
    }

    // Button On (with a loader)
    $button.addClass('is-loading');  
        setTimeout(function () {
            $button
            .removeClass('is-loading')
            .addClass('is-active');
            }, 500);
        });

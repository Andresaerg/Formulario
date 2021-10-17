var $input = $('input:text'),
    $siguiente = $('#siguiente');    
$siguiente.attr('disabled', true);

$input.keyup(function() {
    var trigger = false;
    $input.each(function() {
        if (!$(this).val()) {
            trigger = true;
        }
    });
    trigger ? $siguiente.attr('disabled', true) : $siguiente.removeAttr('disabled');
});
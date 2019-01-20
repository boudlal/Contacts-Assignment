$('#first-name').on('input', function() {
    let value = $(this);
    value.val(capitalizeFirstLetter(value.val()));
});

$('#last-name').on('input', function() {
    let value = $(this);
    value.val(capitalizeFirstLetter(value.val()));
});

function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

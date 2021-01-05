$(document).on("click", "#loveproduct", function () {

    var source = $(this)[0].outerHTML;
    var n = source.indexOf("value");
    let start = source.lastIndexOf("value");
    start = start + 7;
    let str = "";
    for (let i = start; i < source.length && source[i] !== '"'; i++) {
        str += source[i];
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        url: url,
        async: false,
        data: {

        },
        success: function () {

        }
    });
});
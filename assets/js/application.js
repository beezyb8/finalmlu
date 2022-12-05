const applinkform = document.querySelector(".applinks")

$(document)
.on('submit', ".applinks", function(event) {
    event.preventDefault();
    // SEND TO BANK NOTES!
    var form = $(this);
    var noteid = form.attr("id");
    var link = $("input[type='text']", form).val();
    var date = $("input[type='date']", form).val();

    var appinfo = {
        link: $("input[type='text']", form).val(),
        date: $("input[type='date']", form).val(),
        notesid: noteid
    };

    $.ajax({
        type: 'POST',
        url: '../finalmlu/ajax/applications.php',
        data: appinfo,
        dataType: 'json',
        async: true,
    })

    .done(function ajaxDone(data) {
        console.log("done")
    })
 
    .fail(function ajaxFailed(data) {
        console.log('fail');
    })
})
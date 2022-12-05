$(document)
.on("click","input.checker", function(event){
    let rowid = $(this).attr('id');
    let isChecked = $(this)[0].checked;
    
    if (isChecked == true){
        var check = 1;
    } else {
        var check = 0;
    }
    console.log(check)
    console.log(rowid)

    var needed = {
        check: check,
        rowid: rowid,
    };

    $.ajax({
        type: 'POST',
        url: '../finalmlu/ajax/accbanks.php',
        data: needed,
        dataType: 'json',
        async: true,
    })

    .done(function ajaxDone(data) {
            if(data.thiscontact.coldemail == 1){
            } else{
            }
        })
    })
const modalbtn = document.querySelector(".newcontact")
const closebtn = document.querySelector(".closemodal")
const contactwindow = document.querySelector(".contactmodal")
const switchbanks = document.querySelectorAll(".switch") 



    // .done(function ajaxDone(data) {
    //     //ADD HTML AND SHOW CONTACT
    //     console.log('done');
    //     $(".network_div").load("../finalmlu/ajax/networktable.php");
    // })

modalbtn.onclick = () =>{
    contactwindow.style.display = "inline-block"
}
closebtn.onclick = () =>{
    contactwindow.style.display = "none"
}

switchbanks.onclick = () =>{

    var $bank = document.querySelector("#bankname");
    var $bank = $bank.innerHTML;
    var bankname = {
        bank: $bank
    };

    $.ajax({
        type: 'POST',
        url: '../finalmlu/ajax/networktable.php',
        data: bankname,
        dataType: 'json',
        async: true,
    })

    .done(function ajaxDone(data) {
        //ADD HTML AND SHOW CONTACT
        console.log('done');
        $(".network_div").load("../finalmlu/ajax/networktable.php");
    })

    .fail(function ajaxFailed(data) {
        //fail
        console.log('fail');

    })

    .always(function ajaxAlwaysDoThis(data) {
        //always run
        console.log('always');

    })

    return false;
}


$(document)
.on("submit", "form.js-add-contact", function(event) {
    event.preventDefault();

    var $form = $(this);
    var $conacts = $(".network_div")
    var $bank = document.querySelector("#bankname");
    var $bank = $bank.innerHTML;

    var contact = {
        contactname: $("input[id='conname']", $form).val(),
        notes: $("input[id='notes']", $form).val(),
        bank: $bank
    };

    $.ajax({
        type: 'POST',
        url: '../finalmlu/ajax/addcontact.php',
        data: contact,
        dataType: 'json',
        async: true,
    })

    .done(function ajaxDone(data) {
        //ADD HTML AND SHOW CONTACT
        console.log('done');
        var event_data = '';
        $.each(data.contacts, function(index, value){
            /*console.log(value);*/
            event_data += '<tr>';
            event_data += '<td>'+value.contact_name+'</td>';
            event_data += '<td>'+value.notes+'</td>';
            event_data += '</tr>';
        });
        $(".table_body").html(event_data);
    })

    .fail(function ajaxFailed(data) {
        //fail
        console.log('fail');

    })

    .always(function ajaxAlwaysDoThis(data) {
        //always run
        console.log('always');

    })

    return false;
})

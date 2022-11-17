const modalbtn = document.querySelector(".newcontact")
const closebtn = document.querySelector(".closemodal")
const contactwindow = document.querySelector(".contactmodal")
var switchbanks = document.querySelectorAll(".switch") 

modalbtn.onclick = () =>{
    contactwindow.style.display = "inline-block"
}
closebtn.onclick = () =>{
    contactwindow.style.display = "none"
}

$(document)
.on('click', "li.switch", function(event) {

    const nocontacts = document.querySelector(".nocontacts");
    var $bank = document.querySelector("#bankname");
    var $bank = $bank.innerHTML;
    var bankname = {
        bank: $bank
    };

    $.ajax({
        type: 'POST',
        url: '../finalmlu/ajax/nw.php',
        data: bankname,
        dataType: 'json',
        async: true,
    })

    .done(function ajaxDone(data) {
        //ADD HTML AND SHOW CONTACT
        var event_data = '';
        $.each(data.contacts, function(index, value){
            /*console.log(value);*/
            event_data += '<tr>';
            event_data += "<td class='contacttitle'>"+value.contact_name+'</td>';
            event_data += "<td class='notes'>"+value.notes+'</td>';
            event_data += '</tr>';
        });
        if(event_data.length > 0){
            $(".table_body").html(event_data);
            nocontacts.style.display = "none";
        } else {
            nocontacts.style.display = "inline-block";
            $(".table_body").html(event_data);
        }
        console.log("donedone")
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
            event_data += "<td class='contacttitle'>"+value.contact_name+'</td>';
            event_data += "<td class='notes'>"+value.notes+'</td>';
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

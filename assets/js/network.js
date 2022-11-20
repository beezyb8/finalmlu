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
            if(value.coldemail == 1){
                coldchecker = 'checked'
            } else {
                coldchecker = ''
            }
            if(value.callhad == 1){
                callchecker = 'checked'
            }  else {
                callchecker = ''
            }
            if(value.callsched == 1){
                callsched = 'checked'
            } else {
                callsched = ''
            }
            if(value.thankyou == 1){
                thankyouchecker = 'checked'
            }  else {
                thankyouchecker = ''
            }
            /*console.log(value);*/
            event_data += "<tr class='"+value.contact_id+"'>";
            event_data += "<td class='contacttitle'>"+value.contact_name+'</td>';
            event_data += "<td class='notes'>"+value.notes+'</td>';
            event_data += "<td class='coldemail'>"+
            "<form class='coldcheck_checks "+value.contact_id+"'>"+
            "<input type='checkbox' id='cold' name='cold' class = '"+value.contact_id+"'" + coldchecker + ">"
            +"</form></td>"
            event_data += "<td class='callsched'>"+
            "<form class='callsched_checks "+value.contact_id+"'>"+
            "<input type='checkbox' id='callsched' name='callsched' class = '"+value.contact_id+"'" + callsched + ">"
            +"</form></td>";
            event_data += "<td class='call'>"+
            "<form class='callhad_checks "+value.contact_id+"'>"+
            "<input type='checkbox' id='call' name='call' class = '"+value.contact_id+"'" +callchecker + ">"
            +"</form></td>";
            event_data += "<td class='thankyou'>"+
            "<form class='ty_checks "+value.contact_id+"'>"+
            "<input type='checkbox' id='thankyou' name='thankyou' class = '"+value.contact_id+"'" + + thankyouchecker + ">"
            +"</form></td>";
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
            if(value.coldemail == 1){
                coldchecker = 'checked'
            } else {
                coldchecker = ''
            }
            if(value.callsched == 1){
                callsched = 'checked'
            } else {
                callsched = ''
            }
            if(value.callhad == 1){
                callchecker = 'checked'
            }  else {
                callchecker = ''
            }
            if(value.thankyou == 1){
                thankyouchecker = 'checked'
            }  else {
                thankyouchecker = ''
            }
            /*console.log(value);*/
            event_data += "<tr class='"+value.contact_id+"'>";
            event_data += "<td class='contacttitle'>"+value.contact_name+'</td>';
            event_data += "<td class='notes'>"+value.notes+'</td>';
            event_data += "<td class='coldemail'>"+"<input type='checkbox' id='cold' name='cold' value = '"+value.contact_id+"'" + coldchecker + ">"+'</td>';
            event_data += "<td class='callsched'>"+"<input type='checkbox' id='callsched' name='callsched' value = '"+value.contact_id+"'" + callsched + ">"+'</td>';
            event_data += "<td class='call'>"+"<input type='checkbox' id='call' name='call' value = '"+value.contact_id+"'" +callchecker + ">"+'</td>';
            event_data += "<td class='thankyou'>"+"<input type='checkbox' id='thankyou' name='thankyou' value = '"+value.contact_id+"'" + + thankyouchecker + ">"+'</td>';
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

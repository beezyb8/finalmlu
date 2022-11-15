const modalbtn = document.querySelector(".newcontact")
const closebtn = document.querySelector(".closemodal")
const contactwindow = document.querySelector(".contactmodal")

modalbtn.onclick = () =>{
    contactwindow.style.display = "inline-block"
}
closebtn.onclick = () =>{
    contactwindow.style.display = "none"
}


$(document)
.on("submit", "form.js-add-contact", function(event){
    event.preventDefault();

    var $form = $(this);

    var $contact={
        contact_name: $("input[name='name']", $form).val(),
        notes: $("input[name='notes']", $form).val()
    };
})
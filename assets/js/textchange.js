$(document)
.on("focusin","textarea#notetextarea", function(event){
    var thistextbox = $(this);
    var btnidentify = $(this).attr('class');
    var $contactid = btnidentify;
    var btnidentify = "bt"+btnidentify.toString();
    var thisbutton = document.querySelector("."+btnidentify);
    thisbutton.style.display = "inline-block";
    thisbutton.onclick = () =>{
    var $newnotes = thistextbox.val();

    
    var updatenotes = {
        contactid: $contactid,
        newnotes: $newnotes
    };
    $.ajax({
        type: 'POST',
        url: '../finalmlu/ajax/notesup.php',
        data: updatenotes,
        dataType: 'json',
        async: true,
    })

    .done(function ajaxDone(data) {
        alert("changes confirmed")
        thisbutton.style.display = "none";
        })
    .fail(function ajaxFailed(data) {
        console.log('fail');
    })
    }
})


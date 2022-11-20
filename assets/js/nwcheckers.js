$(document)
.on("click","input#cold", function(event){
    let contactid = $(this).attr('class');
    let isChecked = $(this)[0].checked;
    let thisrow = $("tr."+contactid)
    
    if (isChecked == true){
        var coldcheck = 1;
    } else {
        var coldcheck = 0;
    }
    console.log(coldcheck)
    console.log(contactid)

    var needed = {
        coldcheck: coldcheck,
        contactid: contactid
    };
    //Begin AJAX process

    $.ajax({
        type: 'POST',
        url: '../finalmlu/ajax/check.php',
        data: needed,
        dataType: 'json',
        async: true,
    })

    .done(function ajaxDone(data) {

        console.log("done")
    })

    .fail(function ajaxFailed(data){
        //fail
        console.log("fail");

    })

    .always(function ajaxAlwaysDoThis(data){
        //always run
        console.log('always')

    })
})




// $(document).ready(function(){
//     $("input.coldemail").change(function() { 
//         if($(this).is(":checked")) { 
//             var $contactid = $inputitem.getAttribute('value');
//             var $contactid = parseInt($contactid);
//             var $thisrow = document.getElementById("."+$contactid);
//             var $coldchecker = 1

//             var needed = {
//                 contactid: $contactid,
//                 thisrow: $thisrow,
//                 coldchecker: $coldchecker,
//             }

//             $.ajax({
//                 type: 'POST',
//                 url: '../finalmlu/ajax/check.php',
//                 data: needed,
//                 dataType: 'json',
//                 async: true,
//             })

//             .done(function ajaxDone(data) {
//                 $thisrow.style.backgroundColor = "green";
//                 console.log("done")
//             })
        
//             .fail(function ajaxFailed(data){
//                 //fail
//                 console.log("fail");
        
//             })
        
//             .always(function ajaxAlwaysDoThis(data){
//                 //always run
//                 console.log('always');
//             })
//         } else {
//             $.ajax({
//                 type: 'POST',
//                 url: '../finalmlu/ajax/uncheck.php',
//                 data: needed,
//                 dataType: 'json',
//                 async: true,
//             });
//         }
//     }); 
// });



// Send to server information about changes in check marks!!!!!
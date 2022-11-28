function displaybanks(displaystyle, contact_edit_buttons){
    contact_edit_buttons.forEach(element => {
        element.style.display = displaystyle;
    });

}

$(document)
.on("click",".editcontbtn", function(event){
    const editcontbtn = document.querySelector(".editcontbtn");
    editcontbtn.classList.add('exiteditmode');
    editcontbtn.classList.remove('editcontbtn');
    var contact_edit_buttons = document.querySelectorAll(".editct")

    displaybanks("inline-block", contact_edit_buttons)
    editcontbtn.innerHTML = "EXIT"
})

// Style the two classes to have different CSS properties

$(document)
.on("click",".exiteditmode", function(event){
    const editcontbtn = document.querySelector(".exiteditmode");
    editcontbtn.classList.add('editcontbtn');
    editcontbtn.classList.remove('exiteditmode');
    var contact_edit_buttons = document.querySelectorAll(".editct")

    displaybanks("none", contact_edit_buttons)
    editcontbtn.innerHTML = "Edit"
})


$(document)
.on("click",".editct", function(event){
    var contactid = $(this).attr("id")
    var ctcttile = document.querySelector("#ctcttile"+contactid)
    console.log(ctcttile)
    contactname = ctcttile.getAttribute("value")
    console.log(contactname) 
    // ctcttile.innerHTML = TBD!!!!;


    
    // Change CTCTtile into a text box with edit ad submit buttons, figure out how to get the name currently in there.
})
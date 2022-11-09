$(document)
.on("submit", "form.js-register", function(event){
    event.preventDefault();

    var $form = $(this);
    var $error =$(".js-error", $form)

    var userstuff = {
        email: $("input[type='email']", $form).val(),
        password: $("input[type='password']", $form).val()
    };

    if(userstuff.email.length < 16) {
        $error
            .text("Please enter a valid email address")
            .show()
        return false
    } else if (userstuff.password.length < 6){
        $error
        .text("Password must be greater then 6 characters")
        .show()
    return false
    }

    //Begin AJAX process

    $error.hide();

    console.log(userstuff)

    return false
})
$(document)
.on("submit", "form.js-register", function(event){
    event.preventDefault();

    var $form = $(this);
    var $error =$(".js-error", $form)

    var userstuff = {
        email: $("input[type='email']", $form).val(),
        password: $("input[type='password']", $form).val()
    };

    if(userstuff.email.length < 6) {
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

    $.ajax({
        type: 'POST',
        url: '../finalmlu/ajax/register.php',
        data: userstuff,
        dataType: 'json',
        async: true,
    })

    .done(function ajaxDone(data) {
        if(data.redirect !== undefined) {
            window.location = data.redirect;
        } else if(data.error !== undefined) {
            $error
            .html(data.error)
            .show();
        }

    })

    .fail(function ajaxFailed(e){
        //fail
        console.log(e);

    })

    .always(function ajaxAlwaysDoThis(data){
        //always run
        console.log('always')

    })

    return false
})

$(document)
.on("submit", "form.js-login", function(event) {
    event.preventDefault();

    var $form = $(this);
    var $error =$(".js-error", $form)

    var userstuff = {
        email: $("input[type='email']", $form).val(),
        password: $("input[type='password']", $form).val()
    };

    if(userstuff.email.length < 6) {
        $error
            .text("Please enter a valid email address")
            .show();
        return false;
    } else if (userstuff.password.length < 6){
        $error
            .text("Password must be greater then 6 characters")
            .show();
    return false;
    }

    //Begin AJAX process

    $error.hide();

    $.ajax({
        type: 'POST',
        url: '../finalmlu/ajax/login.php',
        data: userstuff,
        dataType: 'json',
        async: true,
    })

    .done(function ajaxDone(data) {
        if(data.redirect !== undefined) {
            window.location = data.redirect;
// REDIRECT TO HOMMEPAGE OR DASHBOARD
        } else if(data.error !== undefined) {
            $error
            .html(data.error)
            .show();
        }

    })

    .fail(function ajaxFailed(e){
        //fail
        console.log(e);

    })

    .always(function ajaxAlwaysDoThis(data){
        //always run
        console.log('always');

    })

    return false;
})
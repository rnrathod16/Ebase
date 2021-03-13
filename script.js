$('document').ready(function() {
    var username_state = false;
    var email_state = false;
    $('#username').on('blur', function() {
        var username = $('#username').val();
        if (username == '') {
            username_state = false;
            return;
        }
        $.ajax({
            url: 'signup.php',
            type: 'post',
            data: {
                'username_check': 1,
                'username': username,
            },
            success: function(response) {
                if (response == 'taken') {
                    username_state = false;
                    $('#username').parent().removeClass();
                    $('#username').parent().addClass("form_error");
                    $('#username').siblings("span").text('Sorry... Username already taken');
                } else if (response == 'not_taken') {
                    username_state = true;
                    $('#username').parent().removeClass();
                    $('#username').parent().addClass("form_success");
                    $('#username').siblings("span").text('Username available');
                }
            }
        });
    });
    $('#email').on('blur', function() {
        var email = $('#email').val();
        if (email == '') {
            email_state = false;
            return;
        }
        $.ajax({
            url: 'signup.php',
            type: 'post',
            data: {
                'email_check': 1,
                'email': email,
            },
            success: function(response) {
                if (response == 'taken') {
                    email_state = false;
                    $('#email').parent().removeClass();
                    $('#email').parent().addClass("form_error");
                    $('#email').siblings("span").text('Sorry... Email already taken');
                } else if (response == 'not_taken') {
                    email_state = true;
                    $('#email').parent().removeClass();
                    $('#email').parent().addClass("form_success");
                    $('#email').siblings("span").text('Email available');
                }
            }
        });
    });

    $('#reg_btn').on('click', function() {
         var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
        var username = $('#username').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var pack = $('#pack').val();
        var phone = $('#phone').val();
        var address = $('#address').val();
        if (username_state == false || email_state == false) {
            $('#error_msg').text('Fix the errors in the form first');
        } else {
            // proceed with form submission
            $.ajax({
                url: 'signup.php',
                type: 'post',
                data: {
                    'save': 1,
                    'email': email,
                    'username': username,
                    'password': password,
                    'firstname': firstname,
                    'lastname': lastname,
                    'pack': pack,
                    'phone': phone,
                    'address': address,
                },
                success: function(response) {
                    alert('Account Pending');
                    $('#username').val('');
                    $('#email').val('');
                    $('#password').val('');
                }
            });
        }
    });
});
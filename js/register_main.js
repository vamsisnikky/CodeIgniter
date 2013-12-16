$(document).ready(function() {
    $('#register').validate({
        rules: {
            vFirstName: 'required',
            vLastName: 'required',
            vUserName: {
                required: true,
                minlength: 6
            },
            gender: 'required',
            vPassword: {
                required: true,
                minlength: 8
            },
            vConfirmPassword: {
                required: true,
                equalTo: '#vPassword',
            },
            vEmail: {
                required: true,
                email: 'true'
            },
            vDob: 'required',
            captcha: {
                required: true,
                equalTo: '#confirm_captcha'
            }
        },
        messages: {
            vFirstName: 'Please Enter First name',
            vLastName: 'Please Enter Last name',
            vUserName: {
                required: 'Please enter username',
                minlength: 'username must be minimum of 6 characters'
            },
            gender: 'Please select your gender',
            vPassword: {
                required: 'Please Enter your password',
                minlength: 'Your password must minimum of 8 Characters'
            },
            vConfirmPassword: {
                required:'Please Confirm your password',
                equalTo: 'Your Confirm password does not matches above password',
            },
            vEmail: {
                required: 'Please enter your email',
                email: 'Please enter valid email '
            },
            vDob: 'Please select your DOB',
            captcha: {
                required: 'Please enter captcha',
                equalTo: 'Invalid Captcha'
            }
        }

    });
});



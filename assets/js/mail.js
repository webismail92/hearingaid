
$(document).ready(function () {
    //  For Sending Message
    $('#send_message').on( "click", function(e) {
        e.preventDefault();
        var name=$('#name').val();
        var email=$('#mail').val();
        var mobile_no=$('#mnumber').val();
        var msg=$('#message').val();
        var error=0;

        if (name==''){
            $('#name').css('border-color','red');
            error++;
        }
        else {
            $('#name').css('border-color','black');
        }

        if (email==''){
            $('#mail').css('border-color','red');
            error++;
        }
        else {
            function isValidEmailAddress(emailAddress) {
                var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
                return pattern.test(emailAddress);
            }
            if (!isValidEmailAddress(email)) {
                $('#mail').css('border-color','red');
                error++;
            }
            else {
                $('#mail').css('border-color','black');
            }
        }
        if (mobile_no==''){
            $('#mnumber').css('border-color','red');
            error++;
        }
        else {
            $('#mnumber').css('border-color','black');
        }
        if (msg==''){
            $('#message').css('border-color','red');
            error++;
        }
        else {
            $('#message').css('border-color','black');
        }
        if (error>0){
            return false;
        }

        $.ajax({
            type:'POST',
            url:'assets/mail/mail.php',
            data:{
                'name':name,
                'email':email,
                'mobile_no':mobile_no,
                'msg':msg
            },
            success:function (response) {
                console.log(response);
                var res= JSON.parse(response);
                var status = res.status;
                $('.ic-text-success').css('display','none');
                $('#'+status).css('display','block');
                $('.ic-required').val(null);
                $('.ic-text-success').delay(3000).fadeOut('slow');
            }
        })
    })
})

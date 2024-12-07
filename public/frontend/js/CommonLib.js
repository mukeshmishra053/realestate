const CommonLib = {
    ajaxForm:function(formData='',method,url,loader=false) {
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        return $.ajax({
            type: method,
            url: url,
            data:formData,
            dataType: 'json',
            processData: false,
            contentType: false,
            beforeSend: function() {
                if(loader){
                    $(".final-submit-btn").html(`<div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div>`);
                }
            },
            success: function(d){;},
            complete: function(d){
                if(loader){
                    $(".final-submit-btn").html(`Register<i class="icon-arrow-right-add">`);
                }
            }
        });
    },
    notification:{
        success:function(message){
            return toastr.success(message, 'Success');
        },
        error:function(message){
            return toastr.success(message, 'Failure');
        },
        warning:function(message){
            return toastr.warning(message, 'Info');
        },
    },
    sweetalert:{
        confirm:function(formData,method,url){
            cuteAlert({
                type: "question",
                title: "Are you sure ?",
                message: "Data can't be reverted",
                confirmText: "Okay",
                cancelText: "Cancel"
              }).then((e)=>{
                if ( e == 'confirm'){
                    CommonLib.ajaxForm(formData,method,url).then(d=>{
                        if(d.status === 200){
                            CommonLib.notification.success(d.msg);
                            setTimeout(function(){
                                window.location = d.url;
                            },1000);
                        }
                    }).catch(e=>{
                        CommonLib.notification.error(e.errors);
                    });
                } else {
                  CommonLib.notification.warning("Action Cancelled!!!");
                }
              })
        },
        success:function(){

        },
    },
    baseUrl:()=>{
        var base_url = window.location;
        console.log(base_url);
    },
    truncateString:(str, maxLength)=>{
        if (str.length > maxLength) {
            return str.substring(0, maxLength) + "...";
        }
        return str;
    },
    email_with_privacy:(email,isUnlocked)=>{
        if (!isUnlocked) {
            let parts = email.split('@');
            let maskedDomain = parts[1].replace(/./g, '*');
            return `${parts[0].substring(0, 1)}@${maskedDomain}`;
        }
        return email;
    },
    phone_with_privacy:(phone,isUnlocked)=>{
        if (!isUnlocked && phone) {
            let maskedPhone = phone.substring(2).replace(/./g, '*');
            return `${phone.substring(0, 2)}${maskedPhone}`;
        }
        return phone;
    }
}

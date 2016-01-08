/**
* Created by develop software on 12/3/2015.
*/

$(document).ready(function(){

    $('#register').click(function(){

        $('form#fromRigister').submit(function(e){
            e.preventDefault();


            $("#load").load();
            var regData = '';

                regData = $('form#fromRigister').serialize();
                var url = location.href;
           // alert(url);

            $.ajax({
                url  : url + '?action=add',
                type : "POST",
                data : regData,

                success: function(data){


                    var name = $(data).find('.errorName')[0]['defaultValue'];
                    var gender = $(data).find('.errorGender')[0]['defaultValue'];
                    var email = $(data).find('.errorEmail')[0]['defaultValue'];
                    var reEmail = $(data).find('.errorRemail')[0]['defaultValue'];
                    var password = $(data).find('.errorPassword')[0]['defaultValue'];
                    var rePassword = $(data).find('.errorRepassword')[0]['defaultValue'];
                    var age = $(data).find('.errorAge')[0]['defaultValue'];
                    var target = $(data).find('.errorTarget')[0]['defaultValue'];
                    var country = $(data).find('.errorCountry')[0]['defaultValue'];
                    var country_stay = $(data).find('.errorCountry_stay')[0]['defaultValue'];
                    var radio4 = $(data).find('.radio4')[0]['defaultValue'];

                    //console.log(data);
                    if(password == '' && rePassword == '' && name == '' && gender == '' && email == '' && reEmail == ''  && age == '' && target == '' && country == '' && country_stay == '' && radio4 == '') {
                        location.reload();
                    } else {
                       // alert(data);
                        //alert(password + '-' + rePassword + '-' + name + '-' + gender + '-' + email + '-' + reEmail + '-' + age + '-' + target + '-' + country + '-' + country_stay + '-' + radio4 );
                    }



                    if(radio4 != '') {
                        $('#errorRadio8').html(radio4);
                        $('#radio8').css({
                            border: "1px solid #FF0080"
                        });

                    }else {
                      $('#errorRadio8').html('');
                      $('#radio8').css({
                          border: "none"
                      });
                    }

                    if(name != '') {
                        $('#errorName').html(name);
                        $('#name').css({
                            border: "1px solid #FF0080"
                        });
                    }else {
                        $('#errorName').html('');
                        $('#name').css({
                            border: "none"
                        });
                    }

                    if(gender != ''){
                        $('#errorGender').html(gender);
                        $('#gender').css({
                            border: "1px solid #FF0080"
                        });
                    } else {
                        $('#errorGender').html('');
                        $('#gender').css({
                            border: "none"
                        });
                    }

                    if(email != '') {
                        $('#errorEmail').html(email);
                        $('#email').css({
                            border: "1px solid #FF0080"
                        });
                    } else {
                        $('#errorEmail').html('');
                        $('#email').css({
                            border: "none"
                        });
                    }

                    if(reEmail != '') {
                        $('#errorRemail').html(reEmail);
                        $('#remail').css({
                            border: "1px solid #FF0080"
                        });
                    } else {
                        $('#errorRemail').html('');
                        $('#remail').css({
                            border: "none"
                        });
                    }

                    if(password != '') {
                        $('#errorPassword').html(password);
                        $('#password').css({
                            border: "1px solid #FF0080"
                        });
                    } else {
                        $('#errorPassword').html('');
                        $('#password').css({
                            border: "none"
                        });
                    }

                    if(rePassword != '') {
                        $('#errorRepassword').html(rePassword);
                        $('#repassword').css({
                            border: "1px solid #FF0080"
                        });
                    } else {
                        $('#errorRepassword').html('');
                        $('#repassword').css({
                            border: "none"
                        });
                    }

                    if(age != '') {
                        $('#errorAge').html(age);
                        $('#age').css({
                            border: "1px solid #FF0080"
                        });
                    }else {
                        $('#errorAge').html('');
                        $('#age').css({
                            border: "none"
                        });
                    }

                    if(target != '') {
                        $('#errorTarget').html(target);
                        $('#target').css({
                            border: "1px solid #FF0080"
                        });
                    } else {
                        $('#errorTarget').html('');
                        $('#target').css({
                            border: "none"
                        });
                    }

                    if(country != '') {
                        $('#errorCountry').html(country);
                        $('#country').css({
                            border: "1px solid #FF0080"
                        });
                    } else {
                        $('#errorCountry').html('');
                        $('#country').css({
                            border: "none"
                        });
                    }

                    if(country_stay != '') {
                        $('#errorCountry_stay').html(country_stay);
                        $('#country_stay').css({
                            border: "1px solid #FF0080"
                        });
                    } else {
                        $('#errorCountry_stay').html('');
                        $('#country_stay').css({
                            border: "none"
                        });
                    }
                },

                error : function(da) {
                  //  alert(da);
                }
            });
        });
    }); // register



    $('#socialSituationGo').click(function(){

        $('form#socialSituation').submit(function(event){
            event.preventDefault();

            var dataSituation = $('form#socialSituation').serialize();

            $.ajax({
                url: location.href + '/?action=dataSituation',
                type : 'POST',
                data : dataSituation,
                success : function(data) {
                    //alert(data);
                    location.reload();

                },
                error : function(da) {
                   // alert(ad);
                }
            });

        });
    });


    // upload photo profile

    $('#upload_file').submit(function(e) {
        e.preventDefault();
        $.ajaxFileUpload({
            url 			:'./upload/',
            secureuri		:false,
            fileElementId	:'userfile',
            dataType		: 'json',
            data			: {
            'title'			: $('#title').val()
            },
            success	: function (data, status)
            {
                if(data.status != 'error')
                {
                    $('#files').html('<p>Reloading files...</p>');
                    refresh_files();
                    $('#title').val('');
                }
                alert(data.msg);
            }
        });
        return false;
    });


    // add like

    $('#likeTo').click(function(e){
        e.preventDefault();

        if($('#likeTo i').hasClass('likeIn')){
            var action = 'removeLike';
        } else {
            var action = 'addLike'
        }

        $.ajax({
            url: location.href + '/?action=' + action,
            type:'POST',
            data:'ok',
            success:function(data) {

                $('#likeTo i').toggleClass('likeIn');
            }
        });


    });

function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}



 $('#sendChat').submit(function(e) {
        e.preventDefault();

        var post = $(this).serializeArray();

        var toId = getUrlVars()['m'];
        //alert(toId);
        if(toId != undefined && toId != '') {
            if(post[0]['value'].trim() != '') {
            
            $.ajax({
                url: location.protocol + '//' + location.host + '/messages/sendMessage/?action=add_message',
                type:'POST',
                cache: false,
                data:'to_id=' + toId + '&text=' + post[0]['value'],
                success:function(data) {
                    $('#textChat').val('');
                    $('.chat-room').animate({"scrollTop": $('#.chat-room')[0].scrollTop}, '1000');
                },
                error:function(res) {
                    alert(res);
                }
            });

            }
        } else {
            alert('خطأ فى الارسال. يرجى توجيه الرساله الى شخص معين');
        } 

        
    });

function asideMessages() {


    //var lastId = $('#adideChat input').val();

    $.ajax({
        url: location.protocol + '//' + location.host + '/messages/getSideMessage/?action=get_new   ',
        type: 'POST',
        data: '',
        success:function(data) {
            
            //typeof(data);
           // console.log(data);
            $('#adideChat').html(data);

        
    }

    }); 



}
asideMessages();

setInterval(asideMessages, 1000);

    function newMessagesComtent() {

        //var lastId = $('#adideChat input').val();
        var id = getUrlVars()['m'];
       
        $.ajax({
            url: location.protocol + '//' + location.host + '/messages/getMessageContent/?action=get_new',
            type: 'POST',
            data: 'id=' + id,
            success: function (data) {

                //typeof(data);
                console.log(data);
                $('#messageContent').html(data);


            }

        });



    }
    newMessagesComtent();
    setInterval(newMessagesComtent, 1000);




// run time is ok

// var check_session;
// function CheckForSession() {
//     // var str="chksession=true";
//     jQuery.ajax({
//             type: "POST",
//             url: location.protocol + '//' + location.host + '/messages/chatAjax/?m=6',
//             data: '',
//             cache: false,
//             success: function(res){
//              //   alert(res);
//               $('document').html(res);



//             }
//     });
// }

// check_session = setInterval(CheckForSession, 3000);




});

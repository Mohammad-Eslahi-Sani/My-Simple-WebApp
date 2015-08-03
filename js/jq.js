//$('input[name="genderS"]:checked').val();

$(document).ready(function(){
    $("#submitBtn").on('click',function (){
        var myData = {
            firstName : validateName($("#firstName").val()),
            lastName : validateName($("#lastName").val()),
            gender: $('input[name="gender"]:checked').val(),
            userName: validateName($("#username").val()),
            password: validateName($("#password").val())
        };
        //console.log(myData['password']);
        //debugger;
        myData = JSON.stringify(myData);
        console.log("Yes we are in submit function");

        $.ajax({
            type: 'POST',
            async: false,
            url: '/webapp/serverside/handler.php',
            data: myData,
            headers: {  'content-type': 'application/json'},
            success: function (response) {
                response = $.parseJSON(response);
                if(response){
                    $(location).attr('href','/webapp/signeduppage.php');
                }
                else{alert(response);}
            },
            error: function(){
                alert("Ajax faced Error!");
            }
        });

    });

});



function validateName(name){
    if(!(name==" ")) return name;
    else return false;
}





/*
 */







/*
 $("#submitBtn").on('click',function(){
 $.ajax({
 type: 'POST',
 async : false,
 url: 'handler.php',
 data: JSON.stringify({
 taskId: 1
 }),
 headers:{'content-type': 'application/json' },
 success: function(response){alert(response)},
 error: function(){alert("Ajax Faced Error!")}

 }) ;

 });*/
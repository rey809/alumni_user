/*---------------------------------------------------Alumni Validate ID Before He/She can Register*/
$(".Check_Alumni_ID").click(function()
{
  var id_one = document.getElementById('id_one').value; 
  var id_two = document.getElementById('id_two').value;  
  var id_three = document.getElementById('id_three').value;
  var Check_Alumni_ID;
  var dataString = 'id_one='+id_one+'&id_two='+id_two+'&id_three='+id_three+'&Check_Alumni_ID='+Check_Alumni_ID;
 if (id_one==''||id_two==''||id_three=='') {
    alert('Please fill out this Fields');
  }else
  { 
    $.ajax
    ({
        type: "POST",
        url: "alumni-ajax.php?id_one="+id_one+"&id_two="+id_two+"&id_three="+id_three,
        data: dataString,  
        success: function(result)
        {
          var result=$.parseJSON(result);
          $.each(result, function(i, field)
          {
            if(field.message == "ok")
            {
               
              field.message = '<i class="glyphicon glyphicon-ok feedback"></i>';
              $('#messages').hide();              
              $('#btn2').button('loading');
              $("#messageserror").html(field.message);
                setTimeout(function() {
                  $('#btn2').button('reset');  
                  $('#myModals').modal('show'); 
                  $('#validate-id').modal('hide');
                },2000);
            }else
            {
                field.message = '<i class="glyphicon glyphicon-remove feedback"> </i>';
                $('#btn2').button('loading');
                  setTimeout(function() {
                    $('#btn2').button('reset');
                    $("#messages").html(field.message);
                  },2000);
            }
        });  
      }
    });
  }
});

function EmployedYes()
{
      $('#company').val('');
      $('#companyaddress').val('');
      $("#workposition").val('');
      $('#datehired').val('');
       $("#company").removeClass("alert alert-danger");
       $("#companyaddress").removeClass("alert alert-danger");
       $("#datehired").removeClass("alert alert-danger");
      $('#output').show();
}

function EmployedNo()
{
      $('#company').val('');
      $('#companyaddress').val('');
      $("#workposition").val('');
      $('#datehired').val('');
       $("#company").removeClass("alert alert-danger");
       $("#companyaddress").removeClass("alert alert-danger");
       $("#datehired").removeClass("alert alert-danger");
      $('#output').hide();
}
   
function ScholarYes()
{
       $('#Scholarship').val('');
       $("#Scholarship").removeClass("alert alert-danger");
      $('#scholar-output').show();   
}

function ScholarNo()
{
       $('#Scholarship').val('');
       $("#Scholarship").removeClass("alert alert-danger");
      $('#scholar-output').hide();   
}

/*---------------------------------------------------------------END OF ID VALIDATION*/

/*--------------------------------------------------------------CHECK ALUMNI USERNAME IF EXIST*/
$("#Alumni_Registration_Check").click(function()
{

  var email = $("#email").val();
  var username = $("#usernames").val();
  var passwords = $("#passwords").val();
  var confirmpassword = $("#confirmpassword").val();
  var first_name = $("#first_name").val();
  var m_name = $("#m_name").val();
  var last_name = $("#last_name").val();
  var suffix = $("#suffix").val();
  var course = $("#course").val();
  var college = $("#college").val();
  var level = $("#level").val();
  var yeardate = $("#yeardate").val();
  var bdate = $("#bdate").val();

  var gender = $('input:radio[name=gender]:checked').val();

  var religion = $("#religion").val();
  var address = $("#address").val();
  var contacts = $("#contacts").val();
  var scholarship = $("#scholarship").val();
  var employed = $('input[type=radio][name="employed"]:checked').attr('id');
  var company = $("#company").val();
  var companyaddress = $("#companyaddress").val();
  var datehired = $("#datehired").val();
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

  var dataString = 'username='+username+'&email='+email+'&Alumni_Registration_Check='+Alumni_Registration_Check;
            /*-------------------------------------------------Input Fields Empty-----------*/
    if(email==''){
      $("#email").addClass("alert alert-danger");
      $("#email").focus(function () {
      $("#email").removeClass("alert alert-danger");
        });
    }

    if( !emailReg.test( email ) ) {
      $("#email").addClass("alert alert-danger");
      $("#email").focus(function () {
      $("#email").removeClass("alert alert-danger");
        });
    }

    if(username==''){
      $("#usernames").addClass("alert alert-danger");
      $("#usernames").focus(function () {
      $("#usernames").removeClass("alert alert-danger");
      });
    }

    if(passwords==''){
      $("#passwords").addClass("alert alert-danger");
      $("#passwords").focus(function () {
      $("#passwords").removeClass("alert alert-danger");
      });
    }

    if(first_name==''){
      $("#first_name").addClass("alert alert-danger");
      $("#first_name").focus(function () {
      $("#first_name").removeClass("alert alert-danger");
      });
    }

    if(m_name==''){
      $("#m_name").addClass("alert alert-danger");
      $("#m_name").focus(function () {
      $("#m_name").removeClass("alert alert-danger");
      });
    }

    if(last_name==''){
      $("#last_name").addClass("alert alert-danger");
      $("#last_name").focus(function () {
      $("#last_name").removeClass("alert alert-danger");
      });
    }

    if(suffix==''){
      $("#suffix").addClass("alert alert-danger");
      $("#suffix").focus(function () {
      $("#suffix").removeClass("alert alert-danger");
      });
    }

    if(course==''){
      $("#course").addClass("alert alert-danger");
      $("#course").focus(function () {
      $("#course").removeClass("alert alert-danger");
      });
    }

    if(college==''){
      $("#college").addClass("alert alert-danger");
      $("#college").focus(function () {
      $("#college").removeClass("alert alert-danger");
      });
     }

    if(level==''){
      $("#level").addClass("alert alert-danger");
      $("#level").focus(function () {
      $("#level").removeClass("alert alert-danger");
      });
    }

    if(yeardate==''){
      $("#yeardate").addClass("alert alert-danger");
      $("#yeardate").focus(function () {
      $("#yeardate").removeClass("alert alert-danger");
      });
    }

    if(bdate==''){
      $("#bdate").addClass("alert alert-danger");
      $("#bdate").focus(function () {
      $("#bdate").removeClass("alert alert-danger");
      });
    }

    if(religion==''){
      $("#religion").addClass("alert alert-danger");
      $("#religion").focus(function () {
      $("#religion").removeClass("alert alert-danger");
      });
    }

    if(address==''){
      $("#address").addClass("alert alert-danger");
      $("#address").focus(function () {
      $("#address").removeClass("alert alert-danger");
      });
    }

    if(contacts==''){
      $("#contacts").addClass("alert alert-danger");
      $("#contacts").focus(function () {
      $("#contacts").removeClass("alert alert-danger");
      });
    }

    if(company==''){
      $("#company").addClass("alert alert-danger");
      $("#company").focus(function () {
      $("#company").removeClass("alert alert-danger");
      });
    }

    if(companyaddress==''){
      $("#companyaddress").addClass("alert alert-danger");
      $("#companyaddress").focus(function () {
      $("#companyaddress").removeClass("alert alert-danger");
      });
    }

    if(datehired==''){
      $("#datehired").addClass("alert alert-danger");
      $("#datehired").focus(function () {
      $("#datehired").removeClass("alert alert-danger");
      });
    }

    if(confirmpassword==''||passwords!=confirmpassword){
      $("#confirmpassword").addClass("alert alert-danger");
      $("#confirmpassword").focus(function () {
      $("#confirmpassword").removeClass("alert alert-danger");
      });
    }

    if(confirmpassword==''){
      $("#confirmpassword").addClass("alert alert-danger");
      $("#confirmpassword").focus(function () {
      $("#confirmpassword").removeClass("alert alert-danger");
      });
    }

    if(passwords!=confirmpassword){
      $("#confirmpassword").addClass("alert alert-danger");
      $("#confirmpassword").focus(function () {
      $("#confirmpassword").removeClass("alert alert-danger");
      });
    }
 /*---------------------------END OF EMPTY FIELDS------------------------------*/ 

    if(email!=''||username!=''||passwords!=''||confirmpassword!=''||first_name!=''||m_name!=''||last_name!=''||suffix!=''||course!=''||college!=''||level!=''||yeardate!=''||bdate!=''||gender!=''||religion!=''||address!=''||contacts!=''){
      
      if(email==''||username==''||passwords==''||confirmpassword==''||first_name==''||m_name==''||last_name==''||suffix==''||course==''||college==''||level==''||yeardate==''||bdate==''||gender==''||religion==''||address==''||contacts==''){
         alert('Please Fill out all fieds');
      }
      else if( !emailReg.test( email ) ) {
         alert('Please enter valid email');
      }
      else if(passwords!=confirmpassword){
          alert('Passwords does not match');
      }
      else{
          $.ajax({
            type: "POST",
            url: 'alumni-ajax.php',
            data: dataString,
              success: function(result){
                var result=$.parseJSON(result);
                $.each(result, function(i, field){
                  if(field.message == "ok"){
                    RegisterUser();
                   }
                   else{
                    alert('The username is already taken please try again!');
                   }
                 });
               }
             }); 
        }   
    }

});

/*---------------------------------------------------------INSERT USER IF ALUMNI ID AND USERNAME NOT EXITS*/
function RegisterUser()
{

  var email = $("#email").val();
  var username = $("#usernames").val();
  var passwords = $("#passwords").val();
  var confirmpassword = $("#confirmpassword").val();
  var first_name = $("#first_name").val();
  var m_name = $("#m_name").val();
  var last_name = $("#last_name").val();
  var suffix = $("#suffix").val();
  var course = $("#course").val();
  var college = $("#college").val();
  var level = $("#level").val();
  var yeardate = $("#yeardate").val();
  var bdate = $("#bdate").val();
  var gender = $('input:radio[name=gender]:checked').val();
  var religion = $("#religion").val();
  var address = $("#address").val();
  var contacts = $("#contacts").val();
  var scholarship = $("#scholarship").val();
 
  var employed = $('input[type=radio][name="employed"]:checked').attr('id');
  var company = $("#company").val();
  var companyaddress = $("#companyaddress").val();
  var workposition = $("#workposition").val();
  var datehired = $("#datehired").val();
  var id_one = $("#id_one").val();
  var id_two = $("#id_two").val();
  var id_three = $("#id_three").val();
  var Alumni_Insert_User;
  alert(id_one);
  var dataString = 'email='+email+'&username='+username+'&id_one='+id_one+'&id_two='+id_two+'&id_three='+id_three+'&passwords='+passwords+'&first_name='+first_name+'&m_name='+m_name+'&last_name='+last_name+'&suffix='+suffix+'&course='+course+'&college='+college+'&level='+level+'&yeardate='+yeardate+'&bdate='+bdate+'&gender='+gender+'&religion='+religion+'&address='+address+'&contacts='+contacts+'&company='+company+'&companyaddress='+companyaddress+'&workposition='+workposition+'&datehired='+datehired+'&scholarship='+scholarship+'&Alumni_Insert_User='+Alumni_Insert_User;
   
    $.ajax
    ({
      type: "POST",
      url: 'alumni-ajax.php',
      data: dataString,
      success: function(result)
      { 
        var result=$.parseJSON(result);
        $.each(result, function(i, field)
        {
          if(field.message == "ok")
          {
            alert("Your Account Successfully Register");
          }
          else
          {
            alert('The username is already taken please try again!');
          }
        });
      }
    });
}
/*---------------------------------------------------------END INSERT USER IF ALUMNI ID AND USERNAME NOT EXITS*/


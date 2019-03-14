
function validate()
{

    if(document.StudentRegistration.fname.value == " "  ) {
     alert( "Please Enter Firstname!" );
     document.StudentRegistration.fname.focus() ;
     return false;
   }
   if( document.StudentRegistration.lname.value == " " )
   {
     alert( "Please Enter Lastname!");
     document.StudentRegistration.lname.focus() ;
     return false;
   }
   if( document.StudentRegistration.dob.value == " " )
    {
      alert( "Please provide your DOB!" );
      document.StudentRegistration.dob.focus() ;
      return false;
    }
    if( document.StudentRegistration.phonenum.value == " " || document.StudentRegistration.phonenum.value.length != 10 )
     {
       alert( "Please provide a Mobile No in the format 123." );
       document.StudentRegistration.phonenum.focus() ;
       return false;
     }
     if( document.StudentRegistration.collegename.value == " " )
      {
        alert( "Please provide your collegename!" );
        document.StudentRegistration.collegename.focus() ;
        return false;
      }
      var email = document.StudentRegistration.email.value;
       atpos = email.indexOf("@");
       dotpos = email.lastIndexOf(".");
      if (email == "" || atpos < 1 || ( dotpos - atpos < 2 ))
      {
          alert("Please enter correct email ID")
          document.StudentRegistration.email.focus() ;
          return false;
      }
     if(document.StudentRegistration.passvalue.value != " " && document.StudentRegistration.passvalue.value == document.StudentRegistration.repassvalue.value)
      {
                   if(document.StudentRegistration.passvalue.value < 6) {
                     alert("Error: Password must contain at least six characters!");
                     document.StudentRegistration.passvalue.focus();
                     return false;
                   }
                   if(document.StudentRegistration.passvalue.value == document.StudentRegistration.fname.value) {
                     alert("Error: Password must be different from Username!");
                    document.StudentRegistration.passvalue.focus();
                     return false;
                   }
                   re = /[0-9]/;
                   if(!re.test(document.StudentRegistration.passvalue.value)) {
                     alert("Error: password must contain at least one number (0-9)!");
                     document.StudentRegistration.passvalue.focus();
                     return false;
                   }
                   re = /[a-z]/;
                   if(!re.test(document.StudentRegistration.passvalue.value)) {
                     alert("Error: password must contain at least one lowercase letter (a-z)!");
                          document.StudentRegistration.passvalue.focus();
                     return false;
                   }
                   re = /[A-Z]/;
                   if(!re.test(document.StudentRegistration.passvalue.value)) {
                     alert("Error: password must contain at least one uppercase letter (A-Z)!");
                    document.StudentRegistration.passvalue.focus();
                     return false;
                   }
      }
        else
       {
         alert("Error: Your password and repassword miss match plzzs check!");
          document.StudentRegistration.passvalue.focus();
         return false;
       }
       return true;
 }

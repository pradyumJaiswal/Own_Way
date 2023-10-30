function validation(){
    var user =document.getElementById('user').value;
    var email =document.getElementById('email').value;
    var password =document.getElementById('password').value;
    var rpwd =document.getElementById('rpwd').value;
    var contact =document.getElementById('con_no').value;
    
    if(user == ""){
      document.getElementById('username').innerHTML = "*Please fill the username*";
      return false;
    }
    
    if((user.length <= 2) || (user.length > 50)){
      document.getElementById('username').innerHTML = "*Username must be between 2 to 50 character*";
      return false;
    }
    if(!isNaN(user)){
      document.getElementById('username').innerHTML = "*Only characters are allowed*";
      return false;
    }
    
    if(email == ""){
      document.getElementById('mail').innerHTML = "*Please fill the email *";
      return false;
    }
    if(password == ""){
      document.getElementById('pwd').innerHTML = "*Please fill the password*";
      return false;
    }
    if((password.length <= 4) || (password.length > 50)){
      document.getElementById('pwd').innerHTML = "*Password must be between 5 to 50 character*";
      return false;
    }
    if(rpwd == ""){
      document.getElementById('repwd').innerHTML = "*Please re-type the password*";
      return false;
    }
    if(password != rpwd ){
      document.getElementById('repwd').innerHTML ="*Please re-type the password or password not matched*"
      return false;
    }
    
    if(contact == ""){
      document.getElementById('connum').innerHTML = "*Please enter your mobile number*";
      return false;
    }
    if(isNaN(contact)){
      document.getElementById('connum').innerHTML = "*User must write digits only*";
      return false;
      }
      if(contact.length!=10){
      document.getElementById('connum').innerHTML="*Moblie number be must write 10 digits*";
      return false;
    }
    if(file == ""){
      document.getElementById('fileup').innerHTML = "*Please upload your file first*";
      return false;
    }
    
      }
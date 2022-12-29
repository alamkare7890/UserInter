function validForm(){

  var user = document.forms['login_form']['username'].value;
  var pass = document.forms['login_form']['pass'].value;
  var err = document.getElementsByClassName('logErr');

 
  if(user == ''){
    err[0].innerHTML = 'Please Fill Out The Field.';    
  }
  if(pass == ''){
   err[1].innerHTML = 'Please Fill Out The Field.';    
  }

}

document.querySelector('#form_send').addEventListener('submit', function(e){
  e.preventDefault();


      var firstname = e.target.fName.value;
      var lastname = e.target.lName.value;
      var mail = e.target.uEmail.value;
      var num = e.target.uPhone.value;
      var mess = e.target.uText.value; 
      

      if((firstname === '') ||  (lastname === '') || (mail === '') || (num === '') || (mess === '')){
        var error = document.querySelectorAll('.err');    

        for (let i = 0; i < error.length; i++){
          error[i].innerHTML = 'Please Fill Out Field';        
        }

      }else{
        var error = document.querySelectorAll('.err');    

        for (let i = 0; i < error.length; i++){
          error[i].innerHTML = '';          
        }
      }
   
})
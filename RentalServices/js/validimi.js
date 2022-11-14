// document.addEventListener(
//   "DOMContentLoaded",
  
//   function (ngjarja) {
//     const BtnSubmit = document.getElementById("Btn-submit");

//     const validate = (ngjarja) => {
//       const perdoruesi = document.getElementById("userId");
//       const emailin = document.getElementById("emailId");
//       const ditaLindjes = document.getElementById("data");
//       const numriTel = document.getElementById("numeriTel");
//       const fjalkalimi = document.getElementById("pass");
//       const fjalkalimi2 = document.getElementById("passConfirm");

//       function refreshPage(){
//         onclick=window.location.href='./login.html';
//       }
//       if (perdoruesi.value === "") {
//         alert("Ju lutem shtoni Username!");
//         perdoruesi.focus();
//         return false;
//       }

//       if (emailin.value === "") {
//         alert("Ju lutem shtoni email-in!");
//         emailin.focus();
//         return false;
//       }
//       if (ditaLindjes.value === "") {
//         alert("Ju lutem selektoni daten e lindjes!");
//         ditaLindjes.focus();
//         return false;
//       }
//       if (fjalkalimi.value === "") {
//         alert("Ju lutem shkruani password-in!");
//         fjalkalimi.focus();
//         return false;
//       }
//       if (fjalkalimi2.value === "") {
//         alert("Ju lutem konfirmone password-in!");
//         fjalkalimi2.focus();
//         return false;
//       }
//       if (numriTel.value == 0) {
//         alert("Ju lutem shkruani numrin e telefonit!");
//         numriTel.focus();
//         return false;
//       }
//       if(!(perdoruesi.value === "" & emailin.value === "" & fjalkalimi.value === "" & fjalkalimi2.value === "" & ditaLindjes.value === "" & numriTel.value == 0)){
//         BtnSubmit.addEventListener("click", refreshPage());
//         alert("Jeni rexhistruar me suksese!");
//       }
//       return true;
//     };

//     BtnSubmit.addEventListener("click", validate);

//   }
// );



function validationContact(){

  var user = document.getElementById("user").value;
  var message = document.getElementById("message").value;

  var userCheck = /^[A-Za-z]{4}/;
  var messageCheck = /^[A-Za-z]{3}/;


  if(userCheck.test(user)){
      document.getElementById("userError").innerHTML = " ";
  }else{
      document.getElementById("userError").innerHTML = " * Username or Email Is Invalid (Please type a minimum of 4 characters) ";
      return false
  }
  if(messageCheck.test(message)){
      document.getElementById("messageError").innerHTML = " ";
  }else{
      document.getElementById("messageError").innerHTML = " * Message Is Invalid (Please type a minimum of 3 characters)  ";
      return false
  }
  

}

function validationLogin(){
  

  var user = document.getElementById("user").value;
  var password = document.getElementById("pass").value;

  var userCheck = /^[A-Za-z]{4}/;
  var passwordCheck = /^[A-Za-z]{8}/;


  if(userCheck.test(user)){
      document.getElementById("userError").innerHTML = " ";
  }else{
      document.getElementById("userError").innerHTML = " * Username or Email Is Invalid (Please type a minimum of 4 characters) ";
      return false
  }
  if(passwordCheck.test(password)){
      document.getElementById("passError").innerHTML = " ";

  }else{
      document.getElementById("passError").innerHTML = " * Password Is Invalid (Please type a minimum of 8 characters)  ";
      return false;
  }
 
  

}function validationRegister(){

  var perdoruesi = document.getElementById("userId").value;
  var emailin = document.getElementById("emailId").value;
  var ditaLindjes = document.getElementById("data").value;
  var numriTel = document.getElementById("numeriTel").value;
  var fjalkalimi = document.getElementById("pass").value;
  var fjalkalimi2 = document.getElementById("passConfirm").value;

  var userCheck = /^[A-Za-z]{4}/;
  var emailCheck = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+/;
//   var birthCheck = /^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;
  var passwordCheck = /^[A-Za-z]{8}/;
  var numCheck = /^[0-9]{9}/;



  if(userCheck.test(perdoruesi)){
      document.getElementById("userError").innerHTML = " ";
  }else{
      document.getElementById("userError").innerHTML = " * Username Is Invalid (Please type a minimum 4 characters) ";
      return false
  }
  if(emailCheck.test(emailin)){
      document.getElementById("emailError").innerHTML = " ";
  }else{
      document.getElementById("emailError").innerHTML = " * Email Is Invalid (Please type a valid email address)  ";
      return false
  }
//   if(birthCheck.test(ditaLindjes)){
//       document.getElementById("birthError").innerHTML = " ";
//   }else{
//       document.getElementById("birthError").innerHTML = " * Please select your birthday ";
//       return false
//   }
  if(passwordCheck.test(fjalkalimi)){
      document.getElementById("passError").innerHTML = " ";

  }else{
      document.getElementById("passError").innerHTML = " * Password Is Invalid (Please type a minimum of 8 characters)  ";
      return false;
  }
  if(fjalkalimi == fjalkalimi2){
    document.getElementById("confirmPassError").innerHTML = " ";
  }else{
    document.getElementById("confirmPassError").innerHTML = " * Please confirm your Password!  ";
    return false
  }
  if(numCheck.test(numriTel)){
      document.getElementById("numError").innerHTML = " ";
      alert("Registered Successfully, please Login!");
  }else{
      document.getElementById("numError").innerHTML = " * Phone Number Is Invalid (Please type a number like 044123456) ";
      return false
  }

}

 
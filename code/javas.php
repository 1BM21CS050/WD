const forms=document.querySelector(".forms"),
    pwShowHide=document.querySelectorAll(".eye-icon"),
      links=document.querySelectorAll(".link");

pwShowHide.forEach(eyeIcon=>{
    eyeIcon.addEventListener("click",()=>{
        let pwFields=eyeIcon.parentElement.parentElement.querySelectorAll(".password");

        pwFields.forEach(password=>{
            if(password.type==="password"){
                    password.type="text";
                    eyeIcon.classList.replace("bx-hide","bx-show");
                    return;
            }
            password.type="password";
            eyeIcon.classList.replace("bx-show","bx-hide");

        })
    })
})
links.forEach(link=>{
    link.addEventListener("click",e=>{
        e.preventDefault();
        forms.classList.toggle("show-signup");

    })
})
var myInput = document.getElementById("psw");
var cp=document.getElementById("cpsw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");


myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}


myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}


myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}


  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

 
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

 
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
  
}
function checkPassword(){
    if(cp.value!=myInput.value)
  {
    alert("Passwords don't match!");
  }
}
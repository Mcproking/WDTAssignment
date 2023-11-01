//Password Validation
var input = document.getElementById("password");
var Uletter = document.getElementById("Uletter");
var Lletter = document.getElementById("Lletter");
var Digit = document.getElementById("Digit");
var Special = document.getElementById("Special");
var Char8 = document.getElementById("Char8");

var Requirements = document.getElementById("Requirements");
input.addEventListener("focus",function(){
    Requirements.classList.toggle("visually-hidden");
    Requirements.classList.toggle("reqz_ani-in");
});
input.addEventListener("focusout",function(){
    Requirements.classList.remove("reqz_ani-in");
    Requirements.classList.toggle("reqz_ani-out");
    setTimeout(() => {
        Requirements.classList.toggle("visually-hidden");
        Requirements.classList.remove("reqz_ani-out");
    }, 1000);
});


// input.onfocus = function() {
//     document.getElementById("Requirements").style.animation = "slideIn 1s ease-out;";
//     document.getElementById("Requirements").style.display = "block";
// }
// input.onblur = function() {
//     setTimeout(function() {
//         document.getElementById("Requirements").style.display = "none";
//         document.getElementById("Requirements").style.animation = "slideIn 1s ease-out;";
//     }, 1000); 
// }
input.onkeyup = function() {

    var upperCaseLetter = /[A-Z]/g;
    if (input.value.match(upperCaseLetter)) {
        Uletter.classList.remove("invalid");
        Uletter.classList.add("valid");
    }
    else {
        Uletter.classList.remove("valid");
        Uletter.classList.add("invalid");
    }

    var lowerCaseLetter = /[a-z]/g;
    if (input.value.match(lowerCaseLetter)) {
        Lletter.classList.remove("invalid");
        Lletter.classList.add("valid");
    }
    else {
        Lletter.classList.remove("valid");
        Lletter.classList.add("invalid");
    }

    var digit = /[0-9]/g;
    if (input.value.match(digit)) {
        Digit.classList.remove("invalid");
        Digit.classList.add("valid");
    }
    else {
        Digit.classList.remove("valid");
        Digit.classList.add("invalid");
    }

    const special = /[~`!@#$%^&*()_+\-=\[\]{};:\\|,.<>\/?]/g;
    if (input.value.match(special)) {
        Special.classList.remove("invalid");
        Special.classList.add("valid");
    }
    else {
        Special.classList.remove("valid");
        Special.classList.add("invalid");       
    }

    if (input.value.length >= 8) {
        Char8.classList.remove("invalid");
        Char8.classList.add("valid");
    }
    else {
        Char8.classList.remove("valid");
        Char8.classList.add("invalid");
    }
}

//Confirm Password Validation

var password = document.getElementById("password");
var Confirm = document.getElementById("confirm");
var confirmValidate = document.getElementById("confirmValidate");

Confirm.oninput = function() {

    if (password.value != Confirm.value) {
        confirmValidate.classList.remove("original");
        confirmValidate.classList.add("change");
    }
    else {
        confirmValidate.classList.remove("change");
        confirmValidate.classList.add("original");
    }
}


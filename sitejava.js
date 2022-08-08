
let signup = document.getElementById("signup");

let loginform = document.getElementById("formsignup");

let closebtn = document.getElementById("closebtn");

let newsinput = document.getElementById("newsinput");

let newspopup = document.getElementById("newspopup");

if(signup){
    signup.addEventListener("click", function(e){
        e.preventDefault();

        loginform.style.display="block";

    })
}

if(closebtn){

    closebtn.addEventListener("click", function(e){
        e.preventDefault();

        loginform.style.display="none";
    })
}

// if(newsinput){

//     newsinput.addEventListener("submit", function(e){
//         e.preventDefault();

//         newsinput.style.display="none";

//         newspopup.style.display="block"


//     })
// }
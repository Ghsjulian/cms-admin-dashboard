("use strict");
/*_______________________________
      SECURE VALIDATION FORM
________________________________*/
var login_btn = document.getElementById("__btn");
var form = document.getElementById("myfrm");
document.getElementById("__btn").addEventListener("click", function (e) {
  e.preventDefault();
  login_btn.innerHTML = "Processing...";
  var error = document.getElementById("_error");
  var login_div = document.getElementById("login");
  /*________________________________
    GETTING ALL INPUTS VALUES 
________________________________*/
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var action = document.getElementById("action").value;
  var form = document.getElementById("myfrm");

  /*________________________________
      ****VALIDATION****
________________________________*/

  setTimeout(function () {
    login_btn.innerHTML = "Continue";
    if (email == "") {
      try {
        login_div.classList.add("whole_error");
        error.classList.remove("_success");
        error.classList.add("_error");
        error.textContent = "Email Is Required !";
        form.reset();
      } catch (err) {
        error.innerHTML = err;
      }
    } else if (password == "") {
      try {
        login_div.classList.add("whole_error");
        error.classList.remove("_success");
        error.classList.add("_error");
        error.textContent = "Password Is Required !";
        form.reset();
      } catch (err) {
        error.innerHTML = err;
      }
    } else {
      error.classList.remove("_error");
      error.classList.add("_success");
      //   AJAX USE HERE
      fetch(`http://localhost:8000/Bd_Result/API/server/login/index.php`, {
        method: "POST",
        body: new FormData(form),
      })
        .then((res) => {
          return res.json();
        })
        .then((data) => {
          error.classList.remove("_error");
          error.classList.add("_success");
          error.textContent = data.message;
 // window.location.href= ""
          form.reset();
        });
    }
    /*________________________________
   RESET FORM AFTER SUBMITTING 
_______________________________*/

    setTimeout(function () {
      form.reset();
      login_div.classList.remove("whole_error");
      error.classList.remove("_success");
      error.classList.remove("_error");
      error.innerHTML = "";
    }, 3000);
  }, 2000);
});
/*_______________________________
    CHECK IF INPUT IS VALID 
________________________________*/
/*
 function ghsTest(input_value) {
  let value = input_value.trim();
  if (
    value.includes("/") ||
    value.includes("*") ||
    value.includes("%") ||
    value.includes("$") ||
    value.includes("#") ||
    value.includes("+") ||
    value.includes("-") ||
    value.includes(";") ||
    value.includes("?") ||
    value.includes("instagram") ||
    value.includes("Instagram") ||
    value.includes("where") ||
    value.includes("Where") ||
    value.includes("how") ||
    value.includes("what") ||
    value.includes("which") ||
    value.includes("Which") ||
    value.includes("What") ||
    value.includes("How") ||
    value.includes("Hello") ||
    value.includes("hello") ||
    value.includes("<script>") ||
    value.includes("<") ||
    value.includes("alert") ||
    value.includes("(") ||
    value.includes(")") ||
    value.includes("php") ||
    value.includes("window") ||
    value.includes("||") ||
    value.includes("[") ||
    value.includes("]") ||
    value.includes(">") ||
    value.includes("{") ||
    value.includes("}") ||
    value.includes(":") ||
    value.includes("'") ||
    value.includes("_") ||
    value.includes("=") ||
    value.includes("!") ||
    value.includes("12345") ||
    value.includes("Abc") ||
    value.includes("Sex") ||
    value.includes("Fuck") ||
    value.includes("SELECT") ||
    value.includes("select") ||
    value.includes("href") ||
    value.includes("hot") ||
    value.includes("sexy") ||
    value.includes("Hot") ||
    value.includes("Sexy") ||
    value.includes("LoL") ||
    value.includes("Lol") ||
    value.includes("Naked") ||
    value.includes("<html>") ||
    value.includes("<--->") ||
    value.includes("Google") ||
    value.includes("Facebook") ||
    value.includes("Twitter") ||
    value.includes("Phone") ||
    value.includes("Developer") ||
    value.includes("Code") ||
    value.includes("Internet") ||
    value.includes("Communication") ||
    value.includes("0") ||
    value.includes("6") ||
    value.includes("`") ||
    value.includes("~") ||
    value.includes("√") ||
    value.includes(",") ||
    value.includes("'") ||
    value.includes("•") ||
    value.includes("|") ||
    value.includes("÷") ||
    value.includes("1234567890") ||
    value.includes("qwert") ||
    value.includes("Hacker") ||
    value.includes("×") ||
    value.includes("friend") ||
    value.includes("idiot") ||
    value.includes("programmer") ||
    value.includes("hacker") ||
    value.includes("⁵") ||
    value.includes("⅘")
  ) {
    return true;
  } else {
    return false;
  }
}
*/
/*________________________________
      VALIDATION EMAIL 
________________________________*/

/*________________________________
      VALIDATION FINISHED 
_________________________________*/

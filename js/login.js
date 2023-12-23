"use strict";
function _selector(tag) {
    return document.querySelector(tag);
}
/*
========= BACKGROUND IMAGE CHANGE=========
*/
async function __login__(url, login_data, call) {
    try {
        fetch(url, {
            method: "POST",
            body: login_data
            /*headers: {
                "Content-Type": "application/json"
            }*/
        })
            .then(res => {
                return res.json();
            })
            .then(res_data => {
                call(res_data);
            });
    } catch (error) {
        console.error("Error fetching data : ", error);
    }
}
_selector("#login_btn").onclick = e => {
    e.preventDefault();
    var email = _selector("#email").value.trim();
    var password = _selector("#password").value.trim();
    var data = JSON.stringify({
        email,
        password
    });
    var form = new FormData();
    form.append("email", email);
    form.append("password", password);
    var container = _selector(".container");
    var url = "http://localhost:8000/API/server/login/login.php";
    var error = _selector("#error");
    if (email === "") {
        container.style.border = "1px solid red";
        _selector("#email").style.border = "1px solid red";
        _selector("#password").style.border = "1px solid red";
        error.style.display = "block";
        error.textContent = "Enter Email Address !";
    } else if (password === "") {
        container.style.border = "1px solid red";
        _selector("#email").style.border = "1px solid red";
        _selector("#password").style.border = "1px solid red";
        error.style.display = "block";
        error.textContent = "Please Enter Password !";
    } else if (password.length < 6) {
        container.style.border = "1px solid red";
        _selector("#email").style.border = "1px solid red";
        _selector("#password").style.border = "1px solid red";
        error.style.display = "block";
        error.textContent = "Password Must Be At 6 Character !";
    } else if (
        !email.includes("@") ||
        !email.includes("gmail") ||
        !email.includes("com")
    ) {
        error.style.display = "block";
        error.textContent = "Invalid Email Address !";
    } else {
        _selector("#login_btn").style.width = "150px";
        _selector(
            "#login_btn"
        ).innerHTML = `<div class="loading"></div>Processing...`;
        container.style.border = "1px solid #00b627";
        _selector("#email").style.border = "1px solid #00b627";
        _selector("#password").style.border = "1px solid #00b627";
        setTimeout(() => {
            _selector("#login_btn").style.width = "110px";
            _selector("#login_btn").textContent = "Login Now";
            __login__(url, form, res_data => {
                if (res_data.status) {
                    error.style.display = "block";
                    error.style.color = "#00b627";
                    error.style.borderColor = "#00b627";
                    error.textContent = res_data.message;
                } else {
                    error.style.display = "block";
                    error.textContent = res_data.message;
                }
            });
        }, 1000);
    }
    setTimeout(() => {
        container.style.border = "";
        _selector("#email").style.border = "";
        _selector("#password").style.border = "";
        error.style.display = "none";
        error.textContent = "";
    }, 3000);
};


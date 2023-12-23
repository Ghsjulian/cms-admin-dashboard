"use strict";
function _selector(tag) {
    return document.querySelector(tag);
}

/*
========= WORKING MOBILE NAVBAR =========
*/

_selector("#menu--bar").onclick = () => {
    var nav = _selector("#mobile-nav");
    var isopen = _selector("#mobile-nav").getAttribute("active");
    if (isopen === "false") {
        _selector("#menu--bar").innerHTML = '<i class="bi bi-x">';
        nav.style.display = "block";
        _selector("#mobile-nav").setAttribute("active", "true");
    } else {
         _selector("#menu--bar").innerHTML = '<i class="bi bi-list">';
        nav.style.display = "none";
        _selector("#mobile-nav").setAttribute("active", "false");
    }
};

var image;


_selector('#img').addEventListener('change', function(e) {
    var file = e.target.files[0];
    var reader = new FileReader();
    reader.onloadend = function() {
        image = reader.result;
        //console.log(image); // Data URL of the image
    }
    reader.readAsDataURL(file);
});
_selector("#login_btn").onclick = e => {
    e.preventDefault();
    fetch(`http://${window.location.host}/API/server/save-img.php`, {
            method: "POST",
            headers: {
            'Content-Type': 'application/json',},
        body: JSON.stringify({
            image: image,
        }),
    })
    .then(response => response.text())
    .then(data => console.log(data))
    .catch((error) => {
        console.log('Error:'+ error);
    });
            
   
}
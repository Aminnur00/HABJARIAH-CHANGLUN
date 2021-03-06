function rememberMe() {
    var rememberme = document.forms["loginForm"]["idremember"].checked;
    var email = document.forms["loginForm"]["idemail"].value;
    var password = document.forms["loginForm"]["idpassword"].value;
    console.log("Form data:" + rememberme + "," + email + "," + password);
    if (!rememberme) {
        setCookies("cemail", "", 0);
        setCookies("cpassword", "", 0);
        setCookies("crem", false, 0);
        document.forms["loginForm"]["idemail"].value = "";
        document.forms["loginForm"]["idpassword"].value = "";
        document.forms["loginForm"]["idremember"].checked = false;
        alert("Credentials removed");
    } else {
        if (email == "" && password == "") {
            document.forms["loginForm"]["idremember"].checked = false;
            alert("Please enter your credentials");
            return false;
        } else {
            setCookies("cemail", email, 30);
            setCookies("cpassword", password, 30);
            setCookies("crem", rememberme, 30);
            alert("Credentials Stored Success");
        }
    }
}

function setCookies(cookiename, cookiedata, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cookiename + "=" + cookiedata + ";" + expires + ";path=/";
}

function loadCookies(){
    var username = getCookie("cemail");
    var password = getCookie("cpassword");
    var rememberme = getCookie("crem");
    console.log("COOKIES:" + username, password, rememberme);
    document.forms["loginForm"]["idemail"].value = username;
    document.forms["loginForm"]["idpassword"].value = password;
    if (rememberme) {
        document.forms["loginForm"]["idremember"].checked = true;
    } else {
        document.forms["loginForm"]["idremember"].checked = false;
    }
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' '){
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0){
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function deleteCookie(cname) {
    const d = new Date();
    d.setTime(d.getTime() + (24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=;" + expires + ";path=/";
}

function acceptCookieConsent() {
    deleteCookie('user_cookie_consent');
    setCookies('user_cookie_consent', 1, 30);
    document.getElementById("cookieNotice").style.display = "none";
}

function myFunction() {
    var x = document.getElementById("idnavbar");
    if (x.className.indexOf("w3-show") == -1){
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }  
}

function previewFile() {
    const preview = document.querySelector('.w3-image');
    const file = document.querySelector('input[type=file]').files[0];
    const reader = new FileReader();
    reader.addEventListener("load", function() {
        // convert image file to base64 string
        preview.src = reader.result;
    }, false);

    if (file) {
        reader.readAsDataURL(file);
    }
}

function confirmDialog() {
    var r = confirm("Adakah anda pasti untuk memohon?");
    if (r == true) {
        return true;

    } else {
        return false;
    }
}

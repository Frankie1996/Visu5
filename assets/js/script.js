window.onload = activeClass(window.location.href.split('/').pop());

function activeClass(url) {
    if (url == "") {
        document.querySelector("#nav-home").classList.add("active");
    } else if(url == "about.php"){
        document.querySelector("#nav-about").classList.add("active");
    } else if(url == "lessons.php") {
        document.querySelector("#nav-lessons").classList.add("active");
    }
}






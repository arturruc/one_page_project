window.onscroll = function () 
{
    stickyHeader();
}

let header = document.getElementById("masthead")
let sticky = header.offsetTop

function stickyHeader() {
    if(window.scrollY > sticky) {
        header.classList.add("sticky")
    }
    else {
        header.classList.remove("sticky")
    }
}
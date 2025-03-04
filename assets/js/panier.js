const nav = document.getElementById("head");
const threshold = 200;
window.addEventListener('scroll',()=> {
    if (window.scrollY>threshold) {
        nav.style.transform="translateY(-100%)"
    } else  {
        nav.style.transform="translateY(0%)"
    }
})
let lastScrollTop = 0;

window.addEventListener("scroll", function() {
    let currentScroll = window.pageXOffset || document.documentElement.scrollTop;
    
    if (currentScroll > lastScrollTop) {
        document.querySelector("header").style.top = "-100px";
    } else {
        document.querySelector("header").style.top = "0";
    }
    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
}, false);

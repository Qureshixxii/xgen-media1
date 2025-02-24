// Get the button element
const scrollToTopBtn = document.getElementById("scrollToTopBtn");

// Show the button when scrolled down 100px
window.onscroll = function () {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        scrollToTopBtn.classList.add("show");
    } else {
        scrollToTopBtn.classList.remove("show");
    }
};

// When the button is clicked, scroll to the top
scrollToTopBtn.onclick = function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
};

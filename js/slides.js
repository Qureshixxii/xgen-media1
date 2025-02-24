


ScrollTrigger.matchMedia({
    "(min-width: 851px)": function() {
        // Yeh animations sirf screens par kaam karegi jinki width 768px ya usse zyada hai
        gsap.to(".studio", {
            y: "-30%",
            ease: "power2.out",
            scrollTrigger: {
                trigger: ".moving-sec",
                start: "top center",
                end: "bottom center",
                scrub: 6,
            },
        });
    },
    "(max-width: 880px)": function() {
        // Yeh animations sirf screens par kaam karegi jinki width 767px ya usse kam hai
        gsap.to(".studio", {
            y: "-10%", // Chhote screens par kam movement
            ease: "power2.out",
            scrollTrigger: {
                trigger: ".moving-sec",
                start: "top center",
                end: "bottom center",
                scrub: 3, // Chhote screens par kam scrub delay
            },
        });
    },
});







var owl = $('.owl-carousel');
owl.owlCarousel({
    loop:true,
    margin:10,
    dots: false, // Pagination (dots) ko hide karein
    responsive:{
        400:{
            items:1
        },
        600:{
            items:2
        },            
        960:{
            items:3 
        },            
        1000:{
            items: 4
        }
       
    }
});
owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});







const texts = [
    { first: "The", second: "Social" }, // Pehla text
    { first: "Editing", second: "Services" }, // Dusra text
    { first: "Drone", second: "Services" }, // Teesra text
    { first: "Sound Proof", second: "Studio" } // Chautha text
];
let textIndex = 0;
let charIndex = 0;
let isFirstPart = true; // Pehla part type ho raha hai ya nahi
const typewriterElement = document.getElementById("typewriter");

function typeWriter() {
    if (isFirstPart) {
        // Pehla part type karein
        if (charIndex < texts[textIndex].first.length) {
            typewriterElement.innerHTML = `<span class="text-white">${texts[textIndex].first.substring(0, charIndex + 1)}</span>`;
            charIndex++;
            setTimeout(typeWriter, 100); // Typing speed (100ms per character)
        } else {
            isFirstPart = false; // Dusra part start karein
            charIndex = 0;
            setTimeout(typeWriter, 500); // 0.5 seconds wait karne ke baad dusra part start karein
        }
    } else {
        // Dusra part type karein
        if (charIndex < texts[textIndex].second.length) {
            typewriterElement.innerHTML = `<span class="text-white">${texts[textIndex].first}</span> <span class="text-warning">${texts[textIndex].second.substring(0, charIndex + 1)}</span>`;
            charIndex++;
            setTimeout(typeWriter, 100); // Typing speed (100ms per character)
        } else {
            // Text ko remove karein
            setTimeout(deleteText, 2000); // 2 seconds wait karne ke baad remove karein
        }
    }
}

function deleteText() {
    if (charIndex > 0) {
        // Text ko slowly remove karein
        typewriterElement.innerHTML = `<span class="text-white">${texts[textIndex].first}</span> <span class="text-warning">${texts[textIndex].second.substring(0, charIndex - 1)}</span>`;
        charIndex--;
        setTimeout(deleteText, 50); // Deleting speed (50ms per character)
    } else {
        // Agla text start karein
        textIndex = (textIndex + 1) % texts.length; // Loop back to the first text
        isFirstPart = true; // Pehla part start karein
        setTimeout(typeWriter, 500); // 0.5 seconds wait karne ke baad next text start karein
    }
}

// Typewriter effect start karein
typeWriter();

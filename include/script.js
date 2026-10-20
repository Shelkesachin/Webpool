

    AOS.init();



    $(document).ready(function () {
        $('.kzn-logos').slick({
            slidesToShow: 3, // Number of slides to show at once
            slidesToScroll: 1, // Number of slides to scroll at a time
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: true,

            dots: false,
            pauseOnHover: false,
            responsive: [
                {
                    breakpoint: 768, // Breakpoint for tablets and below
                    settings: {
                        slidesToShow: 2 // Number of slides to show on smaller screens
                    }
                },
                {
                    breakpoint: 520, // Breakpoint for mobile and below
                    settings: {
                        slidesToShow: 1 // Number of slides to show on mobile screens
                    }
                }
            ],
            // Slick Carousel init callback
            onInit: function () {
                // Update width after Slick initialization
                document.querySelector('.kzn-slide').style.width = '450px';
            }
        });
    });




    // Initialize WOW.js
    new WOW().init(1);


// <!-- below script tag for  logo and website buttons -->

  

// <!-- below script tag for tild effect -->

    VanillaTilt.init(document.querySelectorAll("[data-tilt]"), {
        max: 5,    // Maximum tilt rotation
        speed: 1000, // Speed of the effect
        perspective: 1000, // Perspective distance
    });


// <!-- Initialize FancyBox -->

    $(document).ready(function () {
        $(".fancybox").fancybox({
            buttons: [
                "zoom",
                "close"
            ],
            protect: true
        });

    });





    document.addEventListener("DOMContentLoaded", function () {
        const navbar = document.querySelector('.navbar-custom');

        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) { // Adjust the scroll distance as needed
                navbar.classList.add('sticky-navbar');
            } else {
                navbar.classList.remove('sticky-navbar');
            }
        });
    });

    


        document.addEventListener('DOMContentLoaded', function () {
            const counters = document.querySelectorAll('.counter');

            counters.forEach(counter => {
                counter.innerText = '0';

                const updateCounter = () => {
                    const target = +counter.getAttribute('data-target');
                    const c = +counter.innerText;
                    const increment = target / 200;

                    if (c < target) {
                        counter.innerText = `${Math.ceil(c + increment)}`;
                        setTimeout(updateCounter, 1);
                    } else {
                        counter.innerText = target;
                    }
                };

                const runCounter = () => {
                    const counterTop = counter.getBoundingClientRect().top;
                    const screenBottom = window.innerHeight;

                    if (counterTop < screenBottom) {
                        updateCounter();
                        window.removeEventListener('scroll', runCounter);
                    }
                };

                window.addEventListener('scroll', runCounter);
                runCounter();
            });
        });
 
// function to toggle nav bar on mobile devices
const showTopBar = () => {
    let navTogglerIcon = document.querySelector('.navTogglerIcon')
    let nav_modal_overlay = document.querySelector('.nav-modal-overlay')
    let nav_modal_content = document.querySelector('.nav-modal-content')
    navTogglerIcon.classList.toggle('fa-bars')
    navTogglerIcon.classList.toggle('fa-times')
    nav_modal_overlay.classList.toggle('active')
    nav_modal_content.classList.toggle('active')
}
// scroll to top
$(window).scroll(() => {
    $(window).scrollTop() > 100 ? $('.scrollTop').fadeIn() : $('.scrollTop').fadeOut()
})
$('.scrollTop').click((e) => {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, 1000)
    return 0;
});

document.body.addEventListener('click', e => {
    let nav_modal_overlay = document.querySelector('.nav-modal-overlay')
    e.target == nav_modal_overlay ? showTopBar() : null;

})

const type1 = new Typed('.type-1', {
    strings: ['emhet ^500 guest house ^500 and lodge ^2000', 'emhet ^500 guest house ^500 and lodge ^2000', 'emhet ^500 guest house ^500 and lodge ^2000'],
    typeSpeed: 100,
    fadeOut: true,
    fadeOutClass: 'typed-fade-out',
    fadeOutDelay: 500,
    loop: true,
    loopCount: Infinity,
    showCursor: false,
})
const swiper1 = new Swiper(".mySwiper", {
    loop: true,
    loopCount: Infinity,
    navigation: false,

    //  {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev',
    // },
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        bulletActiveClass: 'swiper-pagination-bullet-active',
        clickable: true,
    },
    // effect: 'coverflow',
    // coverflowEffect: {
    //     rotate: 30,
    //     slideShadows: true,
    // },
    autoplay: {
        delay: 3000,
    },
    // Responsive breakpoints
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        // when window width is >= 640px
        640: {
            slidesPerView: 4,
            spaceBetween: 10
        }
    }
});
var swiper = new Swiper(".gallery", {
    loop: true,
    loopCount: Infinity,
    autoplay: {
        delay: 2000,
    },
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: false,
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 140,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
        dynamicMainBullets: 1,
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        // when window width is >= 640px
        640: {
            slidesPerView: 3,
            spaceBetween: 10
        }
    }
});
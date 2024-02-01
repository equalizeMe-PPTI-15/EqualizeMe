var swiper = new Swiper(".slide-content2", {
    slidesPerView: 5,
    spaceBetween: 30,
    // loop: true,
    // loopFillGroupWithBlank: false,
    centerSlide:'true',
    fade:'true',
    grabCursor:'true',
    pagination: {
        el: ".swiper-pagination2",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next2",
        prevEl: ".swiper-button-prev2",
    },
    
    breakpoints:{
    0: {
        slidesPerView:1,
        },
    520: {
        slidesPerView:2,
        },
    950: {
        slidesPerView:3,
        },
    },
});
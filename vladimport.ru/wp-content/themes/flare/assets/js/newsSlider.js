const initNewsSlider = () => {
    const generalSlider = document.querySelector('.new-items-1');
    console.log('Я ТУТ')

    if (generalSlider) {

        const swiper = new Swiper(generalSlider, {
            slidesPerView: 3,
            spaceBetween: 20,
            speed: 1300,
            navigation: {
                nextEl: '.next-new--item-1',
                prevEl: '.prev-new--item-1',
            },

            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                460: {
                    slidesPerView: 1,
                },
                460: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                769: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                1047: {
                    slidesPerView: 3,
                    spaceBetween: 15
                }
            }
        });
    }
}

initNewsSlider()
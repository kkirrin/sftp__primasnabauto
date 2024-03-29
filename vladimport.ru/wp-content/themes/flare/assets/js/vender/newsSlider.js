const initSaleSlider = () => {
    const generalSlider = document.querySelector('.news-item');

    if (generalSlider) {

        const swiper = new Swiper(generalSlider, {
            spaceBetween: 20,
            speed: 1300,
            loop: true,
            direction: 'horizontal',
            navigation: {
                nextEl: '.next-new--item-1',
                prevEl: '.prev-new--item-1',
            },

            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                426: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                460: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                769: {
                    slidesPerView: 1,
                    spaceBetween: 15
                },
                1047: {
                    slidesPerView: 3,
                    spaceBetween: 15
                }
            }
        });
    }
}

initSaleSlider();
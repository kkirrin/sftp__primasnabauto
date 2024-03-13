const iconsAccordion = () => {
    const btn = document.querySelector('.scroll-top--3')
    const icons = document.querySelector('.icons__phone')
    console.log(btn)

    btn.addEventListener('click', () => {
        icons.classList.toggle('is_active')
    })
}

iconsAccordion();
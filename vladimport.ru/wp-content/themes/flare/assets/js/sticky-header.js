const stickyHeader = () => {
    const header = document.querySelector('.container.header--tool ');
    console.log(header)

    if (header) {
        window.addEventListener('scroll', () => {
            let scrollTop = window.scrollY;
            if (scrollTop >= 50) {
                header.classList.add('header-fix');
            } else {
                header.classList.remove('header-fix');
            }
        });
    }
}

stickyHeader();
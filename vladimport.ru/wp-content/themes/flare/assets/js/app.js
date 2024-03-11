const initNav2 = () => {
    const body = document.querySelector('body');
    if(body) {
        const mobileMenu = document.querySelector('.mobile-menu')
        const mobileMenuButton = document.querySelector('.btn__menu--mobile')
        console.log(mobileMenuButton)
        console.log('Я Тут')
    
        const mobileMenuLinks = document.querySelectorAll('.mobile-menu a');
        const menuLinks = document.querySelectorAll('.menu a');
    
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', (evt) => {
                body.classList.remove('lock');
            });
        });

        mobileMenuButton.addEventListener('click', (evt) => {
            evt.preventDefault();
            mobileMenuButton.classList.toggle('active');
            mobileMenu.classList.toggle('is-active');
            body.classList.toggle('lock');

        })
    
    
    
        menuLinks.forEach(link => {
            link.addEventListener('click', (evt) => {
                // menuButton.classList.remove('active');
                menu.classList.remove('is-active');
                body.classList.remove('lock');
            });
        })
  
    }
    
  }


const initDropList = () => {
    const dropdownToggles = document.querySelectorAll('.catalog-menu li');
    console.log(dropdownToggles);
  
    dropdownToggles.forEach((el) => {
        const button = el.querySelector('a');
        const content = el.querySelector('ul');
    
        button.addEventListener('click', (evt) => {
            if (content) { 
                evt.preventDefault();
    
                const currentButton = evt.currentTarget;
                console.log(currentButton)
                currentButton.classList.toggle('is-active');
                content.classList.toggle('is-active');
                
                if (currentButton.classList.contains('is-active')) {
                    
                    content.style.maxHeight = 'max-content';
  
                } else {
                    content.style.maxHeight = null;
                }
            }
        });
    });
}
  
initDropList();
initNav2();
const initNav = () => {
    const body = document.querySelector('body');
    const mobileMenu = document.querySelector('.mobile-menu')
    const mobileMenuButton = document.querySelector('.btn__menu--mobile')
    console.log('Я Тут')
  
    const mobileMenuLinks = document.querySelectorAll('.mobile-menu a');
    const menuLinks = document.querySelectorAll('.menu a');
  
  
    mobileMenuLinks.forEach(link => {
        link.addEventListener('click', (evt) => {
            menuButton.classList.remove('active');
            menu.classList.remove('is-active');
            body.classList.remove('lock');
        });
    });
    mobileMenuButton.addEventListener('click', (evt) => {
        mobileMenuButton.classList.toggle('active');
        mobileMenu.classList.toggle('is-active');
        body.classList.toggle('lock');
    })
  
  
    menuLinks.forEach(link => {
        link.addEventListener('click', (evt) => {
            menuButton.classList.remove('active');
            menu.classList.remove('is-active');
            body.classList.remove('lock');
        });
    });
  
  }


// AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
const initDropList = () => {
    const dropdownToggles = document.querySelectorAll('#menu-mobilnoe-menyu li');
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
    


    dropdownFilter.forEach(toggle => {
        toggle.addEventListener('click', function(event) {
            
            const ul = toggle.querySelector('ul');
            ul.classList.toggle('hidden');
        });
    });

    if(buttonShowMenu) {
        buttonShowMenu.addEventListener('click', function(event) {
            const sidebar = document.querySelector('.sidebar_menu')
            sidebar.classList.toggle('hidden')
        })
    }



    
}

initNav();
initDropList();
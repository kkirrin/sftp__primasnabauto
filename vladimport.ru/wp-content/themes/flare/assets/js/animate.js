const animate = () => {
    console.log('Я тут')
    window.addEventListener('DOMContentLoaded', () => { 
        const icon = document.querySelector('.pulse')
        const open = document.querySelector('.icon-open')
        const close = document.querySelector('.icon-close'); 
        const panel = document.querySelector('.chat_panel'); 
        icon.addEventListener('click', () => { 
            open.classList.toggle('icon-hide'); 
            close.classList.toggle('icon-hide'); 
            panel.classList.toggle('panel-open'); 
            icon.classList.toggle('stoppulse'); 
        }); 
    }) 
}

animate();
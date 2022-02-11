//hamburger-icon

document.querySelector('.hamburger-icon').addEventListener('click', navMenuHandler);
function navMenuHandler(e){
    const showNavBarClass = 'show-nav-bar';
    const navMenu = document.querySelector('.slide-out-nav-bar');
    const timer = 100;
    if(!navMenu.classList.contains(showNavBarClass)){
        navMenu.classList.add(showNavBarClass);
        window.setTimeout(()=>{
            document.querySelector('body').addEventListener('click', hideMenu);
        },timer);
        
    }
}

function hideMenu(e){
    const showNavBarClass = 'show-nav-bar';
    const navMenu = document.querySelector('.slide-out-nav-bar');
    navMenu.classList.remove(showNavBarClass);
    document.querySelector('body').removeEventListener('click', hideMenu);
}
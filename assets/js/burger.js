const burger = document.getElementById('burgerr');
const burgerVisible = document.querySelector('.burger-hidden');
const closeBtn = document.getElementById('close');

function toggleBurgerMenu() {
    // Basculer la visibilité du menu hamburger
    if (burgerVisible.style.display === 'none' || burgerVisible.style.display === '') {
        burgerVisible.style.display = 'block';
        burger.style.visibility = 'visible';
    } else {
        burgerVisible.style.display = 'none';
        burger.style.visibility = 'visible';
    }
}

burger.addEventListener('click', (event) => {
    event.preventDefault();
    toggleBurgerMenu();

    // Changer les styles quand le menu est ouvert
    const name = document.getElementById('name');
    const navBar = document.getElementById('nav-bar');
    const color = document.getElementById('container');

    if (burgerVisible.style.display === 'block') {
        name.style.color = 'black';
        navBar.style.backgroundColor = 'white';
        color.style.backgroundColor = 'white';
        closeBtn.style.position = 'relative';
        closeBtn.style.bottom = '82px';
        closeBtn.style.left = '400px';
    } else {
        
    }
});

closeBtn.addEventListener('click', (event) => {
    event.preventDefault();
    toggleBurgerMenu();

    // Réinitialiser les styles lors du clic sur le bouton 'close'
    const name = document.getElementById('name');
    const navBar = document.getElementById('nav-bar');
    const color = document.getElementById('container');

    name.style.color = ''; 
    navBar.style.backgroundColor = '';  
    color.style.backgroundColor = '';  
    closeBtn.style.position = ''; 
    closeBtn.style.bottom = '';  
    closeBtn.style.left = '';    
});


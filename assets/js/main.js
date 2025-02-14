const navBar = document.querySelector('.nav-bar');
const menuList = document.querySelector('.list-menu');


window.addEventListener('scroll', () =>{
    if(window.scrollY > 10 ){
        navBar.style.backgroundColor = 'rgb(255 255 255 / 3%)';
        navBar.style.backdropFilter = "blur(10px)" ;
        
    }else{
        navBar.style.backgroundColor = "transparent"; 
        navBar.style.backdropFilter = "none";
    }
});


// ------------------------------------DARK&LIGHT-----------------------------------------


const themeStylesheet = document.getElementById('theme-stylesheet');
const darkModeToggle = document.getElementById('darkModeToggle');

// On vérifie si le mode dark est activé dans le localStorage et on applique le thème approprié
if (localStorage.getItem('theme') === 'light') {
    themeStylesheet.setAttribute('href', 'assets/style/light-mode.css');
    darkModeToggle.checked = true; // On coche la case si le mode clair est activé
}

// Écouteur d'événements pour le changement d'état de la checkbox
darkModeToggle.addEventListener('change', () => {
    if (darkModeToggle.checked) {
        // Si la case est cochée, on applique le mode clair
        themeStylesheet.setAttribute('href', 'assets/style/light-mode.css');
        
        localStorage.setItem('theme', 'light');
    } else {
        // Si la case n'est pas cochée, on applique le mode sombre
        themeStylesheet.setAttribute('href', 'assets/style/style.css');
        localStorage.setItem('theme', 'dark');
    }
});




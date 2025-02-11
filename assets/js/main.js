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


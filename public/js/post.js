const mq = window.matchMedia( "(max-width: 780px)" );
if(mq.matches){
    var responsiveIcon = document.querySelector('.responsive-icon');
    var closeIcon = document.querySelector('.close-icon');
    var sideBar = document.querySelector('.side-bar');

    responsiveIcon.onclick = function(){
        document.body.overflow = 'hidden';
        closeIcon.style.display = 'block';
        sideBar.style.animationName = 'side-bar-animation-in';
        sideBar.style.animationDuration = '1s';
        sideBar.style.right = '0';
    }

    closeIcon.onclick = function(){
        closeIcon.style.display = 'none'; 
        sideBar.style.animationName = 'side-bar-animation-out';
        sideBar.style.animationDuration = '1s';
        sideBar.style.right = '-500px';
        
        
    }
}


var dropdown = document.getElementById('dropdown');
var tag = document.getElementById('navbarDropdown');
var control = 0;
tag.onclick = function(){
    if(control%2 == 0){
        dropdown.style.display = 'block';
        control++;
    }
    else{
        dropdown.style.display = 'none';
        control++;
    }
    
}



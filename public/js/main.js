
/*Tenho que concertar isso ainda colocando os links no centro da tela...*/


/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
} 


window.onscroll = function(){
    var scroll = window.pageYOffset; /*This is how you get the height in pixels of the scroll position! This is the equivalent of element.scrollTop() in jQuery!*/ 
    var nav = document.querySelector('.topnav');
    var link = document.querySelectorAll('.nav-link');
    if(scroll > 0){
        nav.style.backgroundColor = 'white';
        
        for(var i = 0;i < link.length; i++){
            link[i].style.color = 'black';
        }
        
       
    }
    else{
        nav.style.backgroundColor = 'transparent';
        for(var i = 0;i < link.length; i++){
            link[i].style.color = 'white';
        }
        
    }
};


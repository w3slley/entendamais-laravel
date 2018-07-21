
window.onscroll = function(){
    var scroll = window.pageYOffset; /*This is how you get the height in pixels of the scroll position! This is the equivalent of element.scrollTop() in jQuery!*/ 
    var nav = document.querySelector('.topnav');
    var link = document.querySelectorAll('.nav-link');

    var textContainerFirst = document.querySelector('.text-container-first');
    var imageContainerFirst = document.querySelector('.img-container-first');

    var textContainerSecond = document.querySelector('.text-container-second');
    var imageContainerSecond = document.querySelector('.img-container-second');

    

    if(scroll > 1){
        nav.style.backgroundColor = '#1A181B';
        nav.style.boxShadow = '1px 1px 11px #131313';
        
        for(var i = 0;i < link.length; i++){
            link[i].style.color = 'white';
        }
        
       
    }
    if(scroll > 500){
        imageContainerFirst.style.animationName = 'animation-img';
        imageContainerFirst.style.animationDuration = '.6s';
        imageContainerFirst.style.left = '0';

        textContainerFirst.style.display = 'block';
        textContainerFirst.style.animationName = 'animation-text';
        textContainerFirst.style.animationDuration = '.6s';
        textContainerFirst.style.right = '0';

    }

    if(scroll>1000){
        imageContainerSecond.style.display = 'block';
        imageContainerSecond.style.animationName = 'animation-img-second';
        imageContainerSecond.style.animationDuration = '2s';
        imageContainerSecond.style.top = '1300px';

        textContainerSecond.style.display = 'block';
        textContainerSecond.style.animationName = 'animation-text-second';
        textContainerSecond.style.animationDuration = '2s';
        textContainerSecond.style.top = '1300px';
        
    }
    
    if(scroll == 0){
        nav.style.backgroundColor = 'transparent';
        nav.style.boxShadow = 'none';
        for(var i = 0;i < link.length; i++){
            link[i].style.color = 'white';
        }
        
    }
};



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
// dropdown.onclick = function(){
//     dropdown.style.display = 'block';
// }

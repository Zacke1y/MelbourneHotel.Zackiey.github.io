// JavaScript source code
function show(a){
    document.querySelector('.text02').value = a;
}

let dropdown = document.querySelector(".dropdown");
    dropdown.onclick = function(){
    dropdown.classList.toggle('active');
}
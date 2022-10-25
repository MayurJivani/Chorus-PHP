let revealButton = () =>{
    var scrollButton=document.querySelector('.scroll_btn');
    let pos =document.documentElement.scrollTop;

if(pos>500){
    scrollButton.classList.add('is-visible');
}
else{
    scrollButton.classList.remove('is-visible');
}
    
scrollButton.addEventListener("click",() => {
    document.documentElement.scrollTop=0;
})
}

window.onscroll=revealButton;




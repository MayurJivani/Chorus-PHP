window.addEventListener('scroll',function(){
    var scroll=this.document.querySelector('.scroll_btn');
    scroll.classList.toggle("active-btn",this.window.scrollY > 700)
})

function scrollToTop(){
    window.scrollTo(
        {
            top:0
        }
    )
}


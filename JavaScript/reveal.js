window.addEventListener('scroll',reveal);
window.addEventListener('scroll',reveal_btn);


function reveal(){
    var reveals=document.querySelectorAll('.reveal');
    

    for(var i=0; i<reveals.length; i++)
    {
        var windowheight=window.innerHeight;
        var revealtop=reveals[i].getBoundingClientRect().top;
        var revealpoint=150;    

        if(revealtop < windowheight-revealpoint){
            reveals[i].classList.add('active');
        }

        else{
            reveals[i].classList.remove('active');
        }
    }

}

function reveal_btn(){
    var reveals=document.querySelectorAll('.reveal_btn');
    

    for(var i=0; i<reveals.length; i++)
    {
        var windowheight=window.innerHeight;
        var revealtop=reveals[i].getBoundingClientRect().top;
        var revealpoint=150;    

        if(revealtop < windowheight-revealpoint){
            reveals[i].classList.add('active');
        }

        else{
            reveals[i].classList.remove('active');
        }
    }

}



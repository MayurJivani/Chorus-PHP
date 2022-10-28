var card1= document.querySelector('.card-1');
card1.onmousemove=function(e){
    const x=e.pageX-card1.offsetLeft;
    const y=e.pageY-card1.offsetTop;

    card1.style.setProperty('--x',x+'px');
    card1.style.setProperty('--y',y+'px');
}

var card2= document.querySelector('.card-2');
card2.onmousemove=function(e){
    const x=e.pageX-card2.offsetLeft;
    const y=e.pageY-card2.offsetTop;

    card2.style.setProperty('--x',x+'px');
    card2.style.setProperty('--y',y+'px');
}
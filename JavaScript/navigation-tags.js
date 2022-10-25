function about_scroll() {
    const element = document.getElementById('about');
    let rect = element.getBoundingClientRect();
    var pos=rect.y-200;
    console.log(pos);
    window.scrollTo(0,pos);
}

function rules_scroll() {
    const element = document.getElementById('rules');
    let rect = element.getBoundingClientRect();
    var pos=rect.y-200;
    console.log(pos);
    window.scrollTo(0,pos);
}
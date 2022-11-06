function toggleButton () {
    const btn = document.querySelector('#button-toggle');
    btn.dataset.value=btn.dataset.value === "true" ? "false" : "true";
    console.log(btn.dataset.value);

    btn.dataset.clickonce="true";
    console.log("Click Once Value: "+btn.dataset.clickonce);

    const vinyl = document.querySelector('.cd-player');
    vinyl.dataset.value=vinyl.dataset.value === "true" ? "false" : "true";
    console.log("Vinyl: "+btn.dataset.value);
}
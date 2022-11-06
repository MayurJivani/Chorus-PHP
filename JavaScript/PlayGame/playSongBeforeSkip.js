const overlay = document.getElementById('overlay');
const toggleBtn = document.querySelector('#button-toggle');
const modal = document.querySelector('.play-before-skip-modal');
const btn = document.getElementById('skipBtn');
const closeBtn = document.getElementById('play-before-skip-close');

btn.addEventListener('click', () => {
    const modal = document.querySelector(button.dataset.modalTarget)
    openModal(modal);
})


closeBtn.addEventListener('click', () => {
    const modal = button.closest('.modal')
    closeModal(modal);
})


function openModal(modal) {
    if (modal == null) return
    if (toggleBtn.dataset.clickOnce == "true") {
        modal.classList.add('active');
        overlay.classList.add('active');
    }
}

function closeModal(modal) {
    if (modal == null) return
    modal.classList.remove('active');
    overlay.classList.remove('active');
}

overlay.addEventListener('click', () => {
    const modals = document.querySelectorAll('.modal.active');
    modals.forEach(modal => {
        closeModal(modal);
    })
})
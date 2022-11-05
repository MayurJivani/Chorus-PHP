const openModalButtons = document.querySelectorAll('[data-modal-target]');
const closeModalButtons = document.querySelectorAll('[data-close-button]');
const overlay = document.getElementById('overlay');
const inputText = document.getElementById('search');

openModalButtons.forEach(button => {
    button.addEventListener('click', () => {
        if (inputText.value == "") {
            const modal = document.querySelector(button.dataset.modalTarget)
            openModal(modal);
        }
    })
})


inputText.addEventListener("keypress", function (event) {
    if (event.key === "Enter") {
        event.preventDefault();
        if (inputText.value == "") {
            const modal = document.querySelector(button.dataset.modalTarget)
            openModal(modal);
        }
    }
})

closeModalButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modal = button.closest('.modal')
        closeModal(modal);
    })
})

function openModal(modal) {
    if (modal == null) return
    modal.classList.add('active');
    overlay.classList.add('active');
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
const openModalButtons = document.querySelectorAll('[data-modal-target]');
const closeModalButtons = document.querySelectorAll('[data-close-button]');
const overlay = document.getElementById('overlay');
const playPauseBtn = document.querySelector('#button-toggle');

openModalButtons.forEach(button => {
    button.addEventListener('click',() => {
        const modal=document.querySelector(button.dataset.modalTarget);
        console.log(modal.className);
        if(modal.className=="modal play-before-skip-modal")
        {
            if (playPauseBtn.dataset.clickonce == "false")
            {
                openModal(modal);
            }
            else
            {
                return
            }
        }
        openModal(modal);
    })
})

closeModalButtons.forEach(button => {
    button.addEventListener('click',() => {
        const modal= button.closest('.modal')
        closeModal(modal);
    })
})

function openModal(modal) {
    if(modal==null) return
    modal.classList.add('active');
    overlay.classList.add('active');
}

function closeModal(modal) {
    if(modal==null) return
    modal.classList.remove('active');
    overlay.classList.remove('active');
}

overlay.addEventListener('click', () => {
    const modals=document.querySelectorAll('.modal.active');
    modals.forEach(modal => {
        closeModal(modal);
    })
})
const addInput = document.querySelector("#addInput");
const addBtn = document.querySelector("#addBtn");
const skipBtn = document.querySelector("#skipBtn");
const divList = document.querySelector(".guess-container");
const spanEle = document.querySelector(".fa-icon");
const liEle = document.querySelector(".guess-output-li");
const songName = "Hello";
var count = 0;

function addLists() {
    count++;
    if (count == 6) {
        setTimeout(() => {
            window.location = "./result.php";
        }, 1000);

    }
    const ul = divList.querySelector('ul');
    const li = document.createElement('li');
    const span1 = document.createElement('span');
    const span2 = document.createElement('span');
    const i1 = document.createElement('i');
    const i2 = document.createElement('i');
    const i3 = document.createElement('i');
    i1.className = "skip fa-solid fa-forward-step";
    i2.className = "correct fa-solid fa-circle-check";
    i3.className = "wrong fa-solid fa-circle-xmark";
    if (addInput.value === "") {
        const modal = document.querySelector('#valid-input-modal');
        modal.showModal();
        const closeModal = document.querySelector('#valid-input-modal-close-btn');
        closeModal.addEventListener('click', () => {
            modal.close();
        })
        return;
    }
    if (addInput.value.toUpperCase() === songName.toUpperCase()) {
        i1.style.opacity = 0;
        i2.style.opacity = 1;
        i3.style.opacity = 0;
        setTimeout(() => {
            window.location = "./result.php";
        }, 1000);
    }
    else {
        i1.style.opacity = 0;
        i2.style.opacity = 0;
        i3.style.opacity = 1;
    }
    span1.append(i1);
    span1.append(i2);
    span1.append(i3);
    span2.innerHTML = addInput.value;
    addInput.value = '';
    li.append(span1);
    li.append(span2);
    ul.appendChild(li);
}

function skipLists() {
    count++;
    if (count == 6) {
        setTimeout(() => {
            window.location = "./result.php";
        }, 1000);

    }
    const ul = divList.querySelector('ul');
    const li = document.createElement('li');
    const span1 = document.createElement('span');
    const span2 = document.createElement('span');
    const i1 = document.createElement('i');
    const i2 = document.createElement('i');
    const i3 = document.createElement('i');
    i1.className = "skip fa-solid fa-forward-step";
    i2.className = "correct fa-solid fa-circle-check";
    i3.className = "wrong fa-solid fa-circle-xmark";
    i1.style.opacity = 1;
    i2.style.opacity = 0;
    i2.style.opacity = 0;
    span1.append(i1);
    span1.append(i2);
    span1.append(i3);
    span2.innerHTML = "Skipped";
    addInput.value = '';
    li.append(span1);
    li.append(span2);
    ul.appendChild(li);
}

addBtn.addEventListener('click', () => {
    addLists();
});

addInput.addEventListener("keypress", function (event) {
    if (event.key === "Enter") {
        event.preventDefault();
        addLists();
    }
});

skipBtn.addEventListener('click', () => {
    skipLists()
});

skipBtn.addEventListener("keypress", function (event) {
    if (event.key === "Enter") {
        event.preventDefault();
        skipLists();
    }
});


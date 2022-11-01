const addInput=document.querySelector("#addInput");
const addBtn=document.querySelector("#addBtn");
const divList=document.querySelector(".guess-container");
const spanEle=document.querySelector(".fa-icon");
const liEle=document.querySelector(".guess-output-li");


function addLists(){
    const ul=divList.querySelector('ul');
    const li=document.createElement('li');
    li.className="guess-output li";
    const span1=document.createElement('span');
    const span2=document.createElement('span');
    span1.className="guess-output li span:nth-child(1)";
    span2.className="guess-output li span:nth-child(2)";
    const i=document.createElement('i');
    li.innerHTML=addInput.value;
    addInput.value='';
    li.append(span1);
    li.append(span2);
    ul.appendChild(li);
}

addBtn.addEventListener('click', () => {
    addLists();
});

addInput.addEventListener('keyup', (event) => {
    if(event.which === 13) {
      addLists();
    }
});
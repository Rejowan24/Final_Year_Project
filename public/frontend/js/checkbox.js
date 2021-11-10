// Checking student or not

let showfields = document.querySelector('#flexRadioDefault1');
let hidefields = document.querySelector('#flexRadioDefault2');
let displayfields = document.querySelector('.displayfields');

showfields.addEventListener('click', () => {
    displayfields.classList.remove('d-none', 'animation');
});

hidefields.addEventListener('click', () => {
    displayfields.classList.add('d-none', 'animation');
});
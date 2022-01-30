let Chatboxhidden = document.querySelector('#chatbox-hidden');
let Chatboxbody = document.querySelector('#chatbox-body');
let Chatboxfooter = document.querySelector('#chatbox-footer');

Chatboxhidden.addEventListener('click', () => {
    Chatboxbody.classList.toggle('hidden-body');
    Chatboxfooter.classList.toggle('hidden-footer');
})
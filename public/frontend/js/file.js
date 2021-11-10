// dashboard sidebar design
let btnclick = document.querySelector('#changebtn');
let sidebar = document.querySelector('.main-sidebar');
let navbar = document.querySelector('.main-container-box');
let content = document.querySelector('.container-section');

btnclick.addEventListener('click', () => {
    sidebar.classList.toggle('sidebarclass');
    navbar.classList.toggle('main-section');
    content.classList.toggle('main-table-section');
});
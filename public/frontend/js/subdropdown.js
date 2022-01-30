// dashboard sidebar design
let Library = document.querySelector('#Library');
let BooksItems = document.querySelector('#BooksItems');
let Transport = document.querySelector('#Transport');
let Schedule = document.querySelector('#Schedule');
let Foods = document.querySelector('#Foods');
let Foodplace = document.querySelector('#Foodplace');
let Booking = document.querySelector('#Booking');
let Booklist = document.querySelector('#Booklist');
let Lab = document.querySelector('#Lab');
let Labvisit = document.querySelector('#Labvisit');

Library.addEventListener('click', () => {
    BooksItems.classList.toggle('sub-bar');
});

Transport.addEventListener('click', () => {
    Schedule.classList.toggle('sub-bar');
})

Foods.addEventListener('click', () => {
    Foodplace.classList.toggle('sub-bar');
})

Booking.addEventListener('click', () => {
    Booklist.classList.toggle('sub-bar');
})

Lab.addEventListener('click', () => {
    Labvisit.classList.toggle('sub-bar');
})
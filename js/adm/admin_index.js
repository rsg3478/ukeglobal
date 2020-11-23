const togleBtn = document.querySelector('.header_togleBtn');
const menu = document.querySelector('.toggle_menu');
const logout = document.querySelector('.header_Logout');


togleBtn.addEventListener('click',() => { //lib Click eventlistner
    menu.classList.toggle('active');
    logout.classList.toggle('active');
});


let scrollBtn = document.querySelector('.scrollBtn');
window.addEventListener("scroll",()=>{
window.scrollY > 100 ? fixedNav.classList.add('active') : fixedNav.classList.remove('active');
window.scrollY > 500 ? scrollBtn.classList.add('active') : scrollBtn.classList.remove('active');
})
scrollBtn.addEventListener('click',()=>{
window.scrollTo({
   top : 0,
   behavior : "smooth"
})
})

//Active SideBar
let bars = document.querySelector('.bars'),
SideBar = document.querySelector('.header ul');
bars.addEventListener('click',()=>{
   SideBar.classList.toggle("active")
})


function changeMode() {
    var element = document.body;
    element.classList.toggle("dark-mode");
}

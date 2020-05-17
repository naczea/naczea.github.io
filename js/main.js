let ubicacionPrincipal = window.pageYOffset;
let actualWidth = screen.width;

//MENU

let navhead = document.querySelectorAll(".navbar__list")[0];
let state = true;

document.querySelectorAll(".navbar__hamburger")[0].addEventListener("click", function() {
    if (state) {
        $('#icon1').hide();
        $('#machine').hide();
        $('#icon2').show();
        state = false;
    } else {
        $('#icon2').hide();
        $('#icon1').show();
        $('#machine').show();
        state = true;
    }
    navhead.classList.toggle("menu2")
})
document.querySelectorAll(".navbar__list")[0].addEventListener("click", function() {
    if (state) {
        $('#icon1').hide();
        $('#icon2').show();
        state = false;
    } else {
        $('#icon2').hide();
        $('#icon1').show();
        state = true;
    }
    navhead.classList.toggle("menu2")
})

// ANIMACIONES
AOS.init();

//TYPED

const type = new Typed('.typed', {
    strings: ['software', 'web', 'electronics'],
    typeSpeed: 70, //velocidad en poner letras
    startDelay: 300, //tiempo en empezar
    backSpeed: 75, //tiempo en borrar
    backDelay: 1500,
    loop: true
});
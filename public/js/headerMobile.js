const btnShowMenu = document.getElementById("btn-show-menu");
const listMobile = document.querySelector(".list-mobile");
const header = document.querySelector(".header");

// funcion para añadir opacidad al header al hacer scroll
window.addEventListener("scroll", () => {
    if (window.scrollY > 0) {
        header.classList.add("blur");
    } else {
        header.classList.remove("blur");
    }
});

// funcion para mostrar el menu mobile aplicando clases
btnShowMenu.addEventListener("click", () => {
    listMobile.classList.toggle("menu-visible");
    listMobile.classList.toggle("list-blur");

    if (listMobile.classList.contains("menu-visible")) {
        header.classList.add("remove-blur");
        document.body.style.overflow = "hidden";
    } else {
        header.classList.remove("remove-blur");
        document.body.style.overflow = "";
    }

    btnShowMenu.classList.toggle("active");
});

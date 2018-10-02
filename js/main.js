const menuButton = document.querySelector(".menu-button");
const menuLinks = document.querySelector(".menu-links");
let showMenu = false;
menuButton.addEventListener("click", toggleMenu);
menuLinks.addEventListener("click", closeMenu);

function closeMenu() {
    menuButton.classList.remove("button-transform");
    menuLinks.classList.remove("show-menu");

    showMenu = false;
}
function toggleMenu() {
    if (!showMenu) {
        menuButton.classList.add("button-transform");
        menuLinks.classList.add("show-menu");

        showMenu = true;
    } else {
        closeMenu();
    }
}

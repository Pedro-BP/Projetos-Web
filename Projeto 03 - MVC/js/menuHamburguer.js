const menuBtn = document.getElementById("menuBtn");
const mobileMenu = document.getElementById("mobileMenu");

menuBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
});

const icon = document.getElementById("searchIcon");
const input = document.getElementById("searchInput");
const divSerch = document.getElementById("divSerch");

let aberto = false;

icon.addEventListener("click", () => {
    aberto = !aberto;

    if (aberto) {
        input.classList.remove("w-0", "opacity-0");
        input.classList.add("w-40", "opacity-100");
        icon.classList.remove("rounded-xl");
        icon.classList.add("rounded-r-xl");
        divSerch.classList.remove("-ml-2");
        input.focus();
    } else {
        input.classList.add("w-0", "opacity-0");
        input.classList.remove("w-40", "opacity-100");
        icon.classList.add("rounded-xl");
        setTimeout(() => {
            divSerch.classList.add("-ml-2");
        }, 250);
    }
});
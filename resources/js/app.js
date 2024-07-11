import './bootstrap';


document.getElementById("menu-toggle").addEventListener("click", function() {
    document.getElementById("menu-items").classList.toggle("hidden");
});;



import '@fortawesome/fontawesome-free/scss/fontawesome.scss';
import '@fortawesome/fontawesome-free/scss/brands.scss';
import '@fortawesome/fontawesome-free/scss/regular.scss';
import '@fortawesome/fontawesome-free/scss/solid.scss';
import '@fortawesome/fontawesome-free/scss/v4-shims.scss';
//Menú del mapa de sitio en dispositivos más pequeños
document.getElementById("toggleMenu").addEventListener("click", function() {
    var menu = document.getElementById("menuItems");
    if (menu.classList.contains("hidden")) {
        menu.classList.remove("hidden");
    } else {
        menu.classList.add("hidden");
    }
});

//Código js para las tablas:
























   
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
//JS PARA MENÚ:


//Código js para puntuar entradas:

document.addEventListener('DOMContentLoaded', function() {
    const starsContainer = document.querySelector('[style*="background-image"]');
    const filledStars = starsContainer.querySelector('div');
    const votesCount = document.getElementById('votes-count');
    const averageRating = document.getElementById('average-rating');

    let totalVotes = 0;
    let totalRating = 0;

    starsContainer.addEventListener('click', function(event) {
        const rect = starsContainer.getBoundingClientRect();
        const x = event.clientX - rect.left;
        const starWidth = rect.width / 5; // Asumiendo 5 estrellas

        const rating = Math.ceil(x / starWidth);
        totalVotes += 1;
        totalRating += rating;

        filledStars.style.width = `${(rating / 5) * 100}%`;

        votesCount.textContent = totalVotes;
        averageRating.textContent = (totalRating / totalVotes).toFixed(1);
    });
});


























   
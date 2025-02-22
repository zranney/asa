document.addEventListener("DOMContentLoaded", function () {
    const sliders = document.querySelectorAll(".effectif-slider");

    sliders.forEach(slider => {
        const prevBtn = slider.querySelector(".prev-btn");
        const nextBtn = slider.querySelector(".next-btn");
        const playerList = slider.querySelector(".player-list");
        const players = playerList.children;
        let index = 0; // Position actuelle

        function getVisibleCount() {
            return window.innerWidth <= 768 ? 3 : 3; // Mobile → 1, PC → 4
        }

        function updateSlider() {
            const visibleCount = getVisibleCount();
            const playerWidth = players[0] ? players[0].offsetWidth + 20 : 200;

            playerList.style.transition = "transform 0.6s ease-in-out"; 
            playerList.style.transform = `translateX(-${index * playerWidth}px)`;

            prevBtn.style.display = index > 0 ? "flex" : "none";
            nextBtn.style.display = (index + visibleCount < players.length) ? "flex" : "none";
        }

        nextBtn.addEventListener("click", function () {
            const visibleCount = getVisibleCount();
            if (index + visibleCount < players.length) {
                index += visibleCount;

                if (index + visibleCount > players.length) {
                    index = players.length - visibleCount;
                }

                updateSlider();
            }
        });

        prevBtn.addEventListener("click", function () {
            const visibleCount = getVisibleCount();
            if (index - visibleCount >= 0) {
                index -= visibleCount;
            } else {
                index = 0;
            }

            updateSlider();
        });

        window.addEventListener("resize", () => {
            index = 0; // Réinitialiser la position au redimensionnement
            updateSlider();
        });

        updateSlider(); // Appliquer au chargement
    });
});

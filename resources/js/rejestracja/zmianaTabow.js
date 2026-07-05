      const links = document.querySelectorAll(".tab-link");
const tabs = document.querySelectorAll(".tab-content");

links.forEach(link => {
    link.addEventListener("click", function(e) {
        e.preventDefault(); // blokuje id

        // ukrywa sekjcje
        tabs.forEach(tab => {
            tab.style.display = "none";
        });

        // pokazuje sekcje
        const target = document.querySelector(this.getAttribute("href"));
        target.style.display = "block";
    });
});
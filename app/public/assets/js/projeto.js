const filterBtn = document.getElementById("filter-btn");
const filterModal = document.getElementById("filter-modal");

filterBtn.addEventListener("click", () => {
    if (filterModal.style.display === "none" || filterModal.style.display === "") {
        filterModal.style.display = "block"; // Mostra o modal
    } else {
        filterModal.style.display = "none"; // Esconde o modal
    }
});

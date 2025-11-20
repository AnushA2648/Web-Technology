// Simple fade animation for inputs
document.querySelectorAll("input, textarea, select").forEach(field => {
    field.addEventListener("focus", () => {
        field.style.background = "#ece8ff";
    });
    field.addEventListener("blur", () => {
        field.style.background = "#f3f0ff";
    });
});

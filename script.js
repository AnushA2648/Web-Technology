// Smooth link hover effect
document.querySelectorAll("nav a").forEach(link => {
    link.addEventListener("mouseover", () => link.style.opacity = "1");
    link.addEventListener("mouseout", () => {
        if (!link.classList.contains("active")) link.style.opacity = "0.8";
    });
});

const boton = document.getElementById("modo");

boton.addEventListener("click", () => {
    document.documentElement.classList.toggle("dark");
});
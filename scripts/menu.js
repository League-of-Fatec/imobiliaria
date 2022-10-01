let cadastro = document.getElementById("cadastrar");
let fechar = document.getElementById("fechar");
let menu = document.getElementById("menu")

console.log(cadastro)

cadastro.addEventListener("click", (e) => {
    menu.classList = "menu open"
})

fechar.addEventListener("click", (e) => {
    menu.classList ="menu"
})
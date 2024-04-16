// Menu
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }

document.querySelector("#colapsar").addEventListener("click", e => {
    sleep(100).then(() => { 
        menu = document.querySelector("#navegador")
        menu.classList.forEach(element => {
            principal = document.querySelector("#principal");
            console.log(element);
            if (element === "show") {
                principal.classList.remove("col");
                principal.classList.add("col-10");
            } else {
                principal.classList.remove("col-10");
                principal.classList.add("col");
            }
        }); 
    });
});
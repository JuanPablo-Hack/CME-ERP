document.addEventListener("DOMContentLoaded", function () {
    document
        .getElementById("loginForm")
        .addEventListener("submit", agregarCliente);

});
async function agregarCliente(e) {
    e.preventDefault();
    var form = document.getElementById("loginForm");
    let data = new FormData(form);
    fetch("../controllers/Login.php", {
        method: "POST",
        body: data,
    })
        .then((result) => result.text())
        .then((result) => {
            console.log(result);
            // if (result == 1) {
            //     document.getElementById("success").style.display = "inherit";
            //     document.getElementById("wrong").style.display = "none";
            //     setTimeout(function () {
            //         location.reload();
            //     }, 2000);
            // } 
            // if (result == 2) {
            //     document.getElementById("success").style.display = "inherit";
            //     document.getElementById("wrong").style.display = "none";
            //     setTimeout(function () {
            //         location.reload();
            //     }, 2000);
            // } 
            // if (result == 3) {
            //     document.getElementById("success").style.display = "inherit";
            //     document.getElementById("wrong").style.display = "none";
            //     setTimeout(function () {
            //         location.reload();
            //     }, 2000);
            // } 
        });
}
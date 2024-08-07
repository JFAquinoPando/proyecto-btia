let formulario = document.getElementById("carga")

formulario.addEventListener("submit", function (evento) {
    evento.preventDefault()
    let form = new FormData(formulario)
    fetch("./php/acciones-posteos.php",{
        method: "POST",
        body: form
    }).then(
        function (dato) {
            return dato.json()
        }
    ).then(
        function (respuesta) {
            let divRespuesta = document.getElementById("respuesta")
            confetti({
                particleCount: 100,
                spread: 70,
                origin: { y: 0.6 },
              });
            divRespuesta.textContent = respuesta.texto
        }
    )
})
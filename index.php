<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicar</title>
    <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
</head>
<body>
    <form
    id="formulario-giuli"
    action="php/acciones-posteos.php" method="post">
        <div>
            <label for="titulo">Titulo</label>
            <input type="text" id="titulo" name="titulo">
        </div>
        <div>
            <label for="contenido">contenido</label>
            <textarea id="contenido" name="contenido"></textarea>
        </div>
        <div>
            <label for="imagen">imagen</label>
            <input type="text" id="imagen" name="imagen">
        </div>
        <div>
            <label for="ubicacion">ubicacion</label>
            <input type="text" id="ubicacion" name="ubicacion">
        </div>
        <button>Publicar</button>
    </form>
    <script>
        try {
    CKEDITOR.replace( 'contenido' );
} catch (e) {
    
}

function acciones(evento) => {
    evento.preventDefault()// Previene acciones por defecto
    let contenido = document.getElementById("contenido")
    contenido.value = CKEDITOR?.instances
                        .contenido.getData()
    //evento.target.submit()
    let formHTML = document.getElementById("formulario-giuli")
    let formulario = new FormData( formHTML )
    formulario.append("contenido", contenido.value)

    fetch("./php/acciones-posteos.php", {
        method: "POST",
        body: formulario
    })

}

let formulario = document.getElementById("formulario-giuli")
formulario.addEventListener("submit", acciones)

    </script>
</body>

</html>


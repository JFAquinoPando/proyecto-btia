<?php
header("Content-Type: application/json");
$conexion = new mysqli("localhost", "root", 
"", "proyectob");

$titulo = $_POST["titulo"];
$contenido = $_POST["contenido"];
$imagen = $_POST["imagen"];
$ubicacion = $_POST["ubicacion"];

$sql = "INSERT INTO publicaciones (
    titulo,
    contenido,
    imagen,
    ubicacion
) VALUES (
    '{$titulo}',
    '{$contenido}',
    '{$imagen}',
    '{$ubicacion}'
)";

//print $sql;
$conexion->query($sql);
$r = ["texto" => "Publicación realizada"];
echo json_encode($r);
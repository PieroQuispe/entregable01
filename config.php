<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $fecha = $_POST["fecha"];

    $pdo = new PDO("mysql:host=localhost;port=3306;dbname=libreria", "root", "");

    if ($pdo) {
        // Prepara y ejecuta la consulta para insertar el nuevo libro
        $stmt = $pdo->prepare("INSERT INTO libros (id, titulo, autor, fecha) VALUES (?, ?, ?, ?)");
        $stmt->execute([$id, $titulo, $autor, $fecha]);

        echo "Libro agregado correctamente.";
    } else {
        echo "Error en la conexión a la base de datos.";
    }
}
?>

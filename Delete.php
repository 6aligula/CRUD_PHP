<?php
require_once "./clases/Cartera.php";
require_once "./clases/Empresa.php"; // Asegúrate de incluir también la clase Empresa

$cartera = new Cartera();
$cartera->loadData("data.csv"); // Carga los datos antes de intentar eliminar

$cartera->delete(isset($_GET['id']) ? $_GET['id'] : null);

header("location: index.php");

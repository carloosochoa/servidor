<?php
    if($_SERVER['REQUEST_METHOD']==='GET' && isset($_GET['dni'])){
        $dni = $_GET['dni'];
        try{
            include_once("profesores.php");
            $p = new Profesores();
            $p->BorrarP($dni);
            header("Location: visualizar_profesores.php");
            exit();
        }catch (PDOException $e) {
            die($e->getMessage());
        }
    }
?>
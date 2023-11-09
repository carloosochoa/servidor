<?php include "./cabecera.inc";
require_once "conexion.php";
ini_set("display_errors",1);

class Profesores extends Conexion{
    private $pdo;

    public function __construct(){
        parent::__construct();
        $this->pdo = $this->conectar();
    }

    public function ListarP(){
        try{
            $query = "SELECT * FROM profesores";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
            return $registro->fetchAll();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function InsertarP($dni,$nombre,$categoria,$ingreso){
        try{
            $insercion = $this->pdo->prepare("INSERT INTO profesores values(?,?,?,?)");
            $array = [$dni,$nombre,$categoria,$ingreso];
            for($i=0;$i<count($array);$i++){
                $insercion->bindParam($i+1, $array[$i]);
            }
            $insercion->execute();
            return true;
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function BorrarP($valor){
        try{
            $borrar = $this->pdo->prepare("DELETE FROM profesores WHERE dni=:dni");
            $borrar->bindParam(":dni",$valor);
            $borrar->execute();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function ModificarP($dni,$nombre,$categoria,$ingreso){
        try{
            $modificar = $this->pdo->prepare("UPDATE profesores SET nombre=:nombre, categoria=:categoria, ingreso=:ingreso WHERE dni=:dni");
            $modificar->bindParam(":dni",$dni);
            $modificar->bindParam(":nombre",$nombre);
            $modificar->bindParam(":categoria",$categoria);
            $modificar->bindParam(":ingreso",$ingreso);
            $modificar->execute();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}

include "./pie.inc";
?>

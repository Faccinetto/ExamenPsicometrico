<?php 

class Aspirantes extends Conectar{

    public function login(){
        $conectar=parent::Conexion();
        parent::set_names();
        if(isset($_POST["enviar"])){
            $nombre=$_POST["nombre"];
            $folio=$_POST["folio"];
            if(empty($nombre) and empty($folio)){
                header("Location:" .conectar::ruta(). "/pages/loginExa.php?m=2");
                exit();
            }else{
                $sql="SELECT * FROM iniciosesion WHERE  nombre=? AND folio=?";
               $stmt=$conectar->prepare($sql);
               $stmt->bindValue(1,$nombre);
               $stmt->bindValue(2,$folio);
               $stmt->execute();
               $resultado=$stmt->fetch();
               if(is_array($resultado) and count($resultado)>0){
                $_SESSION["nombre"]=$resultado["nombre"];
                $_SESSION["folio"]=$resultado["folio"];
                header("Location:" .conectar::ruta()."/pages/verExamen.php");
                exit();
               }else{
                header("Location:" .conectar::ruta()."/pages/loginExa.php?m=1");
                print("No ente");
                exit();

               }
            }
        }
    }

}
?>
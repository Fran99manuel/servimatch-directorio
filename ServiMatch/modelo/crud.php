<?php
require_once('conexion.php');
class crud extends conexion{
    private $conexion;

    public function __construct(){
        $this->conexion= new conexion();
        $this->conexion= $this->conexion->getconexion();
        
    }


    public function consultarTiposUsuarios(string $consulta){
        $query = $this->conexion->query($consulta);
        $rsconsulta = $query->fetchALL(PDO::FETCH_OBJ);

        if ($rsconsulta) {
            return $rsconsulta;
        } else {
            echo "ocurrio un error en consultar tipo de usuario";
        }
        
    }

    public function consultarregistro(string $valor, string $cedula){
        $prepararConsulta = $this->conexion->prepare($valor);
        $prepararConsulta->execute([$cedula]);
        $rsconsulta = $prepararConsulta->fetch(PDO::FETCH_OBJ);
        if($rsconsulta){
            return $rsconsulta;
        }else{
            echo "ocurrio un error al hacer la consulta de 1 registro";
        }

    }

    public function insertarDatos(string $insertar, array $valores){
        $prepararConsulta= $this->conexion->prepare($insertar);
        $rsinsertar = $prepararConsulta->execute($valores);
        if($rsinsertar){
            echo" registro insertado";
            return $rsinsertar;
        } else{
            echo "error al insertar datos";
        }
    }

    public function validarDatos(string $consulta){
        $query = $this->conexion->query($consulta);
        $rsacceso = $query->fetch(PDO::FETCH_OBJ);

        if ($rsacceso) {
            return $rsacceso;
        } else {
            echo "ocurrio un error al validar datos";
        }
        
    }

    public function editar(string $sentenciaEditar, array $valores){
        $prepararConsulta = $this->conexion->prepare($sentenciaEditar);
        $resultadoEditar = $prepararConsulta->execute($valores);
        if($resultadoEditar){
            echo "La Categoría fue Actualizada Correctamente";
            return($resultadoEditar);
        }else{
            echo "Ocurrio un error al Actulizar la Categoria";
        }
    }

    public function eliminar(string $sentenciaEliminar, int $id){
        $prepararConsulta = $this->conexion->prepare($sentenciaEliminar);
        $resultadoEliminar = $prepararConsulta->execute([$id]);
        if($resultadoEliminar){
            echo "Categoría Eliminada Exitosamente";
            return $resultadoEliminar;
        }else{
            echo "Ocurrio un error al Eliminar la Categoría";
        }

    }


}

?>
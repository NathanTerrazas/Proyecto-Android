<?php

class EmpleadoBean {
  
   private $idEmpleado;
   private $nombreEmpleado;
   private $apellidoEmpleado;
   private $edadEmpleado;
   private $dniEmpleado;
   private $fechaEmpleado;
   
   function getIdEmpleado() {
       return $this->idEmpleado;
   }

   function getNombreEmpleado() {
       return $this->nombreEmpleado;
   }

   function getApellidoEmpleado() {
       return $this->apellidoEmpleado;
   }

   function getEdadEmpleado() {
       return $this->edadEmpleado;
   }

   function getDniEmpleado() {
       return $this->dniEmpleado;
   }

   function getFechaEmpleado() {
       return $this->fechaEmpleado;
   }

   function setIdEmpleado($idEmpleado) {
       $this->idEmpleado = $idEmpleado;
   }

   function setNombreEmpleado($nombreEmpleado) {
       $this->nombreEmpleado = $nombreEmpleado;
   }

   function setApellidoEmpleado($apellidoEmpleado) {
       $this->apellidoEmpleado = $apellidoEmpleado;
   }

   function setEdadEmpleado($edadEmpleado) {
       $this->edadEmpleado = $edadEmpleado;
   }

   function setDniEmpleado($dniEmpleado) {
       $this->dniEmpleado = $dniEmpleado;
   }

   function setFechaEmpleado($fechaEmpleado) {
       $this->fechaEmpleado = $fechaEmpleado;
   }
   
}

?>

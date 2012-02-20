<?php
// Archivos necesarios
require_once('config/global.php');
//include_once('config/i18n.php');
include_once(RAIZ_PROYECTO . 'core/config/i18n.php');

class Controlador{
    private $controlador  = '';
    private $accion  = '';
    function __construct($c = '', $a = '') {
        $this->controlador = $c;
        $this->accion = $a;
        require_once(RAIZ_PROYECTO . 'app/appControlador.php');
        require_once(RAIZ_PROYECTO . 'app/controladores/' . $this->controlador  . '/'. $this->controlador . '.php');
        //$objeControlador =  new $this->controlador();
        //$objeControlador->$this->accion();
    }
    private function existe_controlador() {
        
    }
    private function existe_accion()  {
        
    }
    
}
?>

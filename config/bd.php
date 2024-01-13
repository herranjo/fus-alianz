<?php

class BD{
    public static $instancia=null;
    public static function crearInstancia(){

    if (!isset(self::$instancia)) {
        $opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instancia = new PDO('mysql:host=localhost; dbname=fus','root','',$opciones);
        echo "<div class='col-md-12'>conectado...</div>";
    }
    return self::$instancia;
}

}
?>
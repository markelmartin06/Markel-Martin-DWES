<?php 
    abstract class Monoplaza {
        protected $nombre_piloto;
        protected $nacionalidad_piloto;
        protected $numero;
        protected $escuderia;
        protected $puntos;

        abstract function otorgarPuntos($posicion, $vueltaRapida);
        
        abstract function posicionValida($posicion);
    }

?>
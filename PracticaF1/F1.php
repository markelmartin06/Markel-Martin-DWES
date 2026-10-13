<?php
    class F1 extends Monoplaza {
        private $patrocinador_principal;

        #[Override]
        function posicionValida($posicion)
        {
            return $posicion >= 1 && $posicion <= 22;
        }

        #[Override]
        function otorgarPuntos($posicion, $vueltaRapida)
        {
            if ($this->posicionValida($posicion)) {
                switch ($posicion) {
                    case 1:
                        $this->puntos += 25;
                        break;
                    case 2:
                        $this->puntos += 18;
                        break;
                    case 3:
                        $this->puntos += 15;
                        break;
                    case 4:
                        $this->puntos += 12;
                        break;
                    case 5:
                        $this->puntos += 10;
                        break;
                    case 6:
                        $this->puntos += 8;
                        break;
                    case 7:
                        $this->puntos += 6;
                        break;
                    case 8:
                        $this->puntos += 4;
                        break;
                    case 9:
                        $this->puntos += 2;
                        break;
                    case 10:
                        $this->puntos += 1;
                        break;
                    default:
                        $this->puntos += 0;
                        break;
                }

                if ($vueltaRapida) {
                    $this->puntos += 1;
                }
            } else {
                echo "Posición inválida para F1. Debe estar entre 1 y 22.";
            }
        }
    }
?>
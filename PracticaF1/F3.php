<?php
    class F3 extends Monoplaza {
        private $academia_piloto;

        #[Override]
        function posicionValida($posicion)
        {
            return $posicion >= 1 && $posicion <= 30;
        }

        #[Override]
        function otorgarPuntos($posicion, $vueltaRapida)
        {
            if ($this->posicionValida($posicion)) {
                switch ($posicion) {
                    case 1:
                        $this->puntos += 10;
                        break;
                    case 2:
                        $this->puntos += 8;
                        break;
                    case 3:
                        $this->puntos += 7;
                        break;
                    case 4:
                        $this->puntos += 6;
                        break;
                    case 5:
                        $this->puntos += 5;
                        break;
                    case 6:
                        $this->puntos += 4;
                        break;
                    case 7:
                        $this->puntos += 3;
                        break;
                    case 8:
                        $this->puntos += 2;
                        break;
                    case 9:
                        $this->puntos += 1;
                        break;
                    default:
                        $this->puntos += 0;
                        break;
                }
            } else {
                echo "Posición inválida para F3. Debe estar entre 1 y 30.";
            }
        }

        #[Override]
        function subirCategoria()
        {
            return(new F2());
        }
    }
?>
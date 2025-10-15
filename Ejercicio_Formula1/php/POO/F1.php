<?php
    class F1 extends Monoplaza{
        private string $patrocinadorPrincipal;

        public function __construct(string $pNombrePiloto,string $pNacionalidadPiloto, int $pNumeroMonoplaza, string $pEscuderiaPiloto, int $pPuntosPiloto,string $pPatrocinadorPrincipal ){
            parent::__construct($pNombrePiloto,$pNacionalidadPiloto,$pNumeroMonoplaza,$pEscuderiaPiloto,$pPuntosPiloto);
            $this->patrocinadorPrincipal = $pPatrocinadorPrincipal;
        }

        public function setPatrocinadorPrincipal(string $pPatrocinadorPrincipal){
            $this->patrocinadorPrincipal = $pPatrocinadorPrincipal;
        }
        public function getPatrocionadorPrincipal(){
            return $this->patrocinadorPrincipal;
        }

        public function obtenerPuntuacion(int $posicion,bool $vueltaRapida){
            if (posicionValida($posicion)){
                switch($posicion){
                    case 1 : 
                        $this->puntosPiloto += 25;
                        break;
                    case 2:
                        $this->puntosPiloto += 18;
                        break;
                    case 3:
                        $this->puntosPiloto += 15;
                        break;
                    case 4:
                        $this->puntosPiloto += 12;
                        break;
                    case 5:
                        $this->puntosPiloto += 10;
                        break;
                    case 6:
                        $this->puntosPiloto += 8;
                        break;
                    case 7:
                        $this->puntosPiloto += 6;
                        break;
                    case 8:
                        $this->puntosPiloto += 4;
                        break;
                    case 9:
                        $this->puntosPiloto += 2;
                        break;
                    case 10:
                        $this->puntosPiloto += 1;
                        break;
                }
                if ($posicion < 11 && $vueltaRapida){
                        $this->puntosPiloto += 1;
                }
            }else{
                echo "Poscion no valida";
            }
        }
        public function posicionValida(int $posicion){
            if($posicion > 0 && posicion < 23){
                return true;
            }
            return false;
        }
        public function subirCategoria(){
            echo "Ya estas en la maxima categoria";
        }
    }
    ?>
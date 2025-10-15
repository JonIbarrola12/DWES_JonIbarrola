<?php
    class F3 extends Monoplaza{
        private string $nombreAcademia;

        public function __construct(string $pNombrePiloto,string $pNacionalidadPiloto, int $pNumeroMonoplaza, string $pEscuderiaPiloto, int $pPuntosPiloto,string $pNombreAcademia ){
            parent::__construct($pNombrePiloto,$pNacionalidadPiloto,$pNumeroMonoplaza,$pEscuderiaPiloto,$pPuntosPiloto);
            $this->nombreAcademia = $pNombreAcademia;
        }

        public function setNombreAcademia(bool $pNombreAcademia){
            $this->nombreAcademia = $pNombreAcademia;

        }
        public function getNombreAcademia(){
            return $this->nombreAcademia;
        }

        public function obtenerPuntuacion(int $posicion,bool $vueltaRapida){
            if (posicionValida($posicion)){
                switch($posicion){
                    case 1 : 
                        $this->puntosPiloto += 10;
                        break;
                    case 2:
                        $this->puntosPiloto += 8;
                        break;
                    case 3:
                        $this->puntosPiloto += 7;
                        break;
                    case 4:
                        $this->puntosPiloto += 6;
                        break;
                    case 5:
                        $this->puntosPiloto += 5;
                        break;
                    case 6:
                        $this->puntosPiloto += 4;
                        break;
                    case 7:
                        $this->puntosPiloto += 3;
                        break;
                    case 8:
                        $this->puntosPiloto += 2;
                        break;
                    case 9:
                        $this->puntosPiloto += 1;
                        break;
                }
            }else{
                echo "Poscion no valida";
            }
        }
        public function posicionValida(int $posicion){
            if($posicion > 0 && posicion < 31){
                return true;
            }
            return false;
        }
        public function subirCategoria(bool $minimoPuntosSuperlicencia){
            $f2 = new F2($pNombrePiloto, $pNacionalidadPiloto, $pNumeroMonoplaza, $pEscuderiaPiloto, 0, $minimoPuntosSuperlicencia );
            return $f2;
        }
    }
    ?>
<?php
    class FAcademia extends Monoplaza{
        private int $potenciaMaximaMotor;

        public function __construct(string $pNombrePiloto,string $pNacionalidadPiloto, int $pNumeroMonoplaza, string $pEscuderiaPiloto, int $pPuntosPiloto,int $pPotenciaMaximaMotor ){
            parent::__construct($pNombrePiloto,$pNacionalidadPiloto,$pNumeroMonoplaza,$pEscuderiaPiloto,$pPuntosPiloto);
            $this->potenciaMaximaMotor = $pPotenciaMaximaMotor;
        }

        public function setPotenciaMaximaMotor(int $pPotenciaMaximaMotor){
            $this->potenciaMaximaMotor = $pPotenciaMaximaMotor;

        }
        public function getPotenciaMaximaMotor(){
            return $this->potenciaMaximaMotor;
        }

        public function otorgarPuntos(int $posicion,bool $vueltaRapida){
            if ($this->posicionValida($posicion)){
                switch($posicion){
                    case 1:
                        $this->puntosPiloto += 18;
                        break;
                    case 2:
                        $this->puntosPiloto += 15;
                        break;
                    case 3:
                        $this->puntosPiloto += 12;
                        break;
                    case 4:
                        $this->puntosPiloto += 10;
                        break;
                    case 5:
                        $this->puntosPiloto += 8;
                        break;
                    case 6:
                        $this->puntosPiloto += 6;
                        break;
                    case 7:
                        $this->puntosPiloto += 4;
                        break;
                    case 8:
                        $this->puntosPiloto += 2;
                        break;
                    case 9:
                        $this->puntosPiloto += 1;
                        break;
                }
                if ($posicion < 10 && $vueltaRapida){
                        $this->puntosPiloto += 1;
                }
            }else{
                echo "Poscion no valida";
            }
        }
        public function posicionValida(int $posicion){
            if($posicion > 0 && $posicion < 19){
                return true;
            }
            return false;
        }
        public function subirCategoria(string $pPaisCategoria){
            $f4 = new F4($this->nombrePiloto, $this->nacionalidadPiloto, $this->numeroMonoplaza, $this->escuderiaPiloto, 0, $pPaisCategoria);
            return $f4;
        }
    }
    ?>
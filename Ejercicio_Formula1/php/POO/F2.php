<?php
    class F2 extends Monoplaza{
        private bool $minimoPuntosSuperlicencia;

        public function __construct(string $pNombrePiloto,string $pNacionalidadPiloto, int $pNumeroMonoplaza, string $pEscuderiaPiloto, int $pPuntosPiloto,bool $pMinimoPuntosSuperlicencia ){
            parent::__construct($pNombrePiloto,$pNacionalidadPiloto,$pNumeroMonoplaza,$pEscuderiaPiloto,$pPuntosPiloto);
            $this->minimoPuntosSuperlicencia = $pMinimoPuntosSuperlicencia;
        }

        public function setMinimoPuntosSuperlicencia(bool $pMinimoPuntosSuperlicencia){
            $this->minimoPuntosSuperlicencia = $pMinimoPuntosSuperlicencia;
        }
        public function getMinimoPuntosSuperlicencia(){
            return $this->minimoPuntosSuperlicencia;
        }

        public function otorgarPuntos(int $posicion,bool $vueltaRapida){
            if ($this->posicionValida($posicion)){
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
                if ($posicion < 10 && $vueltaRapida){
                        $this->puntosPiloto += 1;
                }
            }else{
                echo "Poscion no valida";
            }
        }
        public function posicionValida(int $posicion){
            if($posicion > 0 && $posicion < 25){
                return true;
            }
            return false;
        }
        public function subirCategoria(string $patrocinadorPrincipal){
            $f1 = new F1($this->nombrePiloto, $this->nacionalidadPiloto, $this->numeroMonoplaza, $this->escuderiaPiloto, 0, $patrocinadorPrincipal );
            return $f1;
        }
    }
    ?>
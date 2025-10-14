<?php
    abstract class Monoplaza{
        private string $nombrePiloto;
        private string $nacionalidadPiloto;
        private int $numeroMonoplaza;
        private string $escuderiaPiloto;
        private int $puntosPiloto;

        public function __construct(string $pNombrePiloto,string $pNacionalidadPiloto, int $pNumeroMonoplaza, string $pEscuderiaPiloto, int $pPuntosPiloto) {
            $this->nombrePiloto = $pNombrePiloto;
            $this->nacionalidadPiloto = $pNacionalidadPiloto;
            $this->numeroMonoplaza = $pNumeroMonoplaza;
            $this->escuderiaPiloto = $pEscuderiaPiloto;
            $this->puntosPiloto = $pPuntosPiloto;
        }
        public function setNombrePiloto(string $pNombrePiloto){
            $this->nombrePiloto = $pNombrePiloto;
        }
        public function getNombrePiloto(){
            return $this->nombrePiloto;
        }

        public function setNacionalidadPiloto(string $pNacionalidadPiloto){
            $this->nacionalidadPiloto = $pNacionalidadPiloto;
        }
        public function getNacionalidadPiloto(){
            return $this->nacionalidadPiloto;
        }

        public function setNumeroMonoplaza(int $pNumeroMonoplaza){
            $this->numeroMonoplaza = $pNumeroMonoplaza;
        }
        public function getNumeroMonoplaza(){
            return $this->numeroMonoplaza;
        }

        public function setEscuderiaPiloto(string $pEscuderiaPiloto){
            $this->escuderiaPiloto = $pEscuderiaPiloto;
        }
        public function getEscuderiaPiloto(){
            return $this->escuderiaPiloto;
        }

        public function setPuntosPiloto(int $puntosPiloto){
            $this->puntosPiloto = $puntosPiloto;
        }
        public function getPuntosPiloto(){
            return $this->puntosPiloto;
        }

        public abstract function otorgarPuntos();
        public abstract function posicionValida();
        public abstract function subirCategoria();

    }
    ?>
<?php
    require_once 'Monoplaza.php';
    require_once 'F1.php';
    require_once 'F2.php';
    require_once 'F3.php';
    require_once 'F4.php';
    require_once 'FAcademy.php';

    $pilotoFAcademy = new FAcademia('Pepe', 'España', 16, 'Alpine Academy', 130, 310);
    $pilotoF4 = new F4('Max', 'Belgica', 32 , 'Herta Racing', 210, 'Francia');
    $pilotoF3 = new F3('Jake', 'EEUU', 1, 'Andretti', 170, 'Andretti Academy');
    $pilotoF2 = new F2('Calum', 'Austria', 41, 'Campos Racing', 50, true);
    $pilotoF1 = new F1('Fernando', 'España', 14, 'Aston Martin', 37, 'Boss');

    echo $pilotoFAcademy->getNombrePiloto() . " " . $pilotoFAcademy->getNacionalidadPiloto() . " " . $pilotoFAcademy->getNumeroMonoplaza() . " " . $pilotoFAcademy->getEscuderiaPiloto() . " " . $pilotoFAcademy->getPuntosPiloto() . " " . $pilotoFAcademy->getPotenciaMaximaMotor(). "\n";
    $pilotoFAcademy->otorgarPuntos(8,true);
    $pilotoFAcademyAscendido = $pilotoFAcademy->subirCategoria('España');
    echo $pilotoFAcademyAscendido->getNombrePiloto() . " " . $pilotoFAcademyAscendido->getNacionalidadPiloto() . " " . $pilotoFAcademyAscendido->getNumeroMonoplaza() . " " . $pilotoFAcademyAscendido->getEscuderiaPiloto() . " " . $pilotoFAcademyAscendido->getPuntosPiloto() . " " . $pilotoFAcademyAscendido->getPaisCategoria() . "\n";
    echo $pilotoF4->getNombrePiloto() . " " . $pilotoF4->getNacionalidadPiloto() . " " . $pilotoF4->getNumeroMonoplaza() . " " . $pilotoF4->getEscuderiaPiloto() . " " . $pilotoF4->getPuntosPiloto() . " " . $pilotoF4->getPaisCategoria() . "\n";
    $pilotoF4->otorgarPuntos(5,false);
    $pilotoF4Ascendido = $pilotoF4->subirCategoria('Redbull Academy');
    echo $pilotoF4Ascendido->getNombrePiloto() . " " . $pilotoF4Ascendido->getNacionalidadPiloto() . " " . $pilotoF4Ascendido->getNumeroMonoplaza() . " " . $pilotoF4Ascendido->getEscuderiaPiloto() . " " . $pilotoF4Ascendido->getPuntosPiloto() . " " . $pilotoF4Ascendido->getNombreAcademia(). "\n";
    echo $pilotoF3->getNombrePiloto() . " " . $pilotoF3->getNacionalidadPiloto() . " " . $pilotoF3->getNumeroMonoplaza() . " " . $pilotoF3->getEscuderiaPiloto() . " " . $pilotoF3->getPuntosPiloto() . " " . $pilotoF3->getNombreAcademia(). "\n";
    $pilotoF3->otorgarPuntos(3,false);
    $pilotoF3Ascendido = $pilotoF3->subirCategoria(true);
    echo $pilotoF3Ascendido->getNombrePiloto() . " " . $pilotoF3Ascendido->getNacionalidadPiloto() . " " . $pilotoF3Ascendido->getNumeroMonoplaza() . " " . $pilotoF3Ascendido->getEscuderiaPiloto() . " " . $pilotoF3Ascendido->getPuntosPiloto() . " " . $pilotoF3Ascendido->getMinimoPuntosSuperlicencia(). "\n";
    echo $pilotoF2->getNombrePiloto() . " " . $pilotoF2->getNacionalidadPiloto() . " " . $pilotoF2->getNumeroMonoplaza() . " " . $pilotoF2->getEscuderiaPiloto() . " " . $pilotoF2->getPuntosPiloto() . " " . $pilotoF2->getMinimoPuntosSuperlicencia(). "\n";
    $pilotoF2->otorgarPuntos(16, false);
    $pilotoF2Ascendido = $pilotoF2->subirCategoria('Duracell');
    echo $pilotoF2Ascendido->getNombrePiloto() . " " . $pilotoF2Ascendido->getNacionalidadPiloto() . " " . $pilotoF2Ascendido->getNumeroMonoplaza() . " " . $pilotoF2Ascendido->getEscuderiaPiloto() . " " . $pilotoF2Ascendido->getPuntosPiloto() . " " . $pilotoF2Ascendido->getPatrocionadorPrincipal(). "\n";
    echo $pilotoF1->getNombrePiloto() . " " . $pilotoF1->getNacionalidadPiloto() . " " . $pilotoF1->getNumeroMonoplaza() . " " . $pilotoF1->getEscuderiaPiloto() . " " . $pilotoF1->getPuntosPiloto() . " " . $pilotoF1->getPatrocionadorPrincipal(). "\n";
    $pilotoF1->otorgarPuntos(4, true);
    
?>
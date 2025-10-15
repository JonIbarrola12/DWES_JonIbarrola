<?php
    include 'api.php';
    function obtenerPilotos($numeros){
        global $url_base;
        $sesion_key = "session_key=7763";
        foreach ($numeros as $numero){
            $url = $url_base. "?driver_number=$numero&".$sesion_key;
            $json = file_get_contents($url);
            $data = json_decode($json,true);

            if(empty($data)){
                echo "No se encontro informacion del piloto con el numero $numero";
                continue;
            }

            $piloto = $data[0];

            $datos_piloto = [
                "Nombre completo" => $piloto['full_name'] ?? "null",
                "Numero" => $piloto['driver_number'] ?? "null",
                "Pais" => $piloto['country_code'] ?? "null",
                "Equipo" =>$piloto['team_name'] ?? "null",
                "Foto" =>$piloto['headshot_url'] ?? "null"
            ];
            echo "<h2>Piloto #$numero</h2>";
            foreach($datos_piloto as $key => $value){
                if($key === "Foto"){
                    echo "<img src='$value' alt='Foto del piloto'/>";
                }else{
                    echo "<p><strong>$key: </strong>$value</p>";
                }
            }
        }
    }
    obtenerPilotos([16,44]);
?>
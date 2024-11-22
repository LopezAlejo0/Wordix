<?php
    include_once ("wordix.php");



    /**************************************/
    /***** DATOS DE LOS INTEGRANTES *******/
    /**************************************/

    /* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
    /* ****COMPLETAR**** */


    /**************************************************/
    /***** DEFINICIÓN DE FUNCIONES PRINCIPALES ********/
    /**************************************************/

    /** FUNCIÓN 1 
     * Explicación 3 (punto 1)
     * Obtiene una colección de palabras de 5 letras y devuelve el arreglo
     * @return array
     */
    function cargarColeccionPalabras ()
    {
        $coleccionPalabras = [
            "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
            "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
            "VERDE", "MELON", "YUYOS", "PIANO", "PISOS",
            "TERMO", "ARBOL", "CIELO", "NOCHE", "PLAZA"
            
        ];
        return ($coleccionPalabras); 
    }

        /** FUNCIÓN 2
         * Explicación 3 (punto 2)
         * Esta función inicializa una estructura de datos y retorna la colección
     * @RETUR ARRAY  */ 
    function cargarPartidas () {
        //ARRAY $coleccionPartidas
        $coleccionPartidas[0] = ["palabraWordix" => "QUESO", "jugador" => "Alejo", "intentos" => 4, "puntaje" => 12];
        $coleccionPartidas[1] = ["palabraWordix" => "MUJER", "jugador" => "Frescia", "intentos" => 1, "puntaje" => 15];
        $coleccionPartidas[2] = ["palabraWordix" => "PIANO", "jugador" => "Veronica", "intentos" => 5, "puntaje" => 11];
        $coleccionPartidas[3] = ["palabraWordix" => "CIELO", "jugador" => "Lisandro", "intentos" => 6, "puntaje" => 0];
        $coleccionPartidas[4] = ["palabraWordix" => "PLAZA", "jugador" => "Paula", "intentos" => 2, "puntaje" => 15];
        $coleccionPartidas[5] = ["palabraWordix" => "ARBOL", "jugador" => "Paula", "intentos" => 6, "puntaje" => 10];
        $coleccionPartidas[6] = ["palabraWordix" => "TERMO", "jugador" => "Alejo", "intentos" => 3, "puntaje" => 14];
        $coleccionPartidas[7] = ["palabraWordix" => "VERDE", "jugador" => "Genoveva", "intentos" => 6, "puntaje" => 0];
        $coleccionPartidas[8] = ["palabraWordix" => "GOTAS", "jugador" => "Roberto", "intentos" => 1, "puntaje" => 16];
        $coleccionPartidas[9] = ["palabraWordix" => "HUEVO", "jugador" => "Ana", "intentos" => 4, "puntaje" => 11];
        $coleccionPartidas[10] = ["palabraWordix" => "GATOS", "jugador" => "Alejo", "intentos" => 6, "puntaje" => 0];
        return $coleccionPartidas;
    }

    /** FUNCIÓN 3
     * Explicación 3 (punto 3)
     * Muestra por pantalla un menú con las opciones disponibles para el jugador
     * @return int
     */
    function seleccionarOpción () {
        // int $opción
        echo "1) Jugar con una palabra determinada \n";
        echo "2) Jugar con una palabra aleatoria \n";
        echo "3) Mostrar una partida \n";
        echo "4) Mostrar la primer partida ganadora \n";
        echo "5) Mostrar estadísticas \n";
        echo "6) Mostrar listado de partidas ordenadas por jugador y por palabras \n";
        echo "7) Agregar una nueva palabra de 5 letras \n";
        echo "8) Salir \n";
        echo "Seleccione una opción: ";
        // La función invocada verifica que el número ingresado se encuentre dentro del rango del menú
        $opcion = solicitarNumeroEntre (1, 8);
        return $opcion;
    }

    /** FUNCIÓN 4
     *  Explicación 3 (punto 4)
     * La función está en wordix.php (lineas 153-163)
     */

    /** FUNCIÓN 5
     * Explicación 3 (punto 5)
     * La función está en wordix.php (lineas 35-49)
     */

    /** FUNCIÓN 6
     * Explicación 3 (punto 6)
     * Recibe un número de partida y muestra por pantalla los datos de dicha partida
     * @param array $colecciónPartida
     * @param int $numPartida
     */
    function mostrarPartida ($coleccionPartida, $numPartida) {
        // array $partida
        $partida = $coleccionPartida[$numPartida];
        if ($partida["puntaje"] > 0) {
            echo "********************************** \n";
            echo "Partida WORDIX " . ($numPartida + 1) . ": palabra " . $partida["palabraWordix"] . "\n" . "Jugador: " . $partida["jugador"] . "\n" . "Puntaje: " . $partida["puntaje"] . " puntos\n" . "Intento: Adivinó la palabra en " . $partida["intentos"] . " intentos";
            echo "********************************** \n";
        }
        else {
            echo "********************************** \n";
           echo "Partida WORDIX " . ($numPartida + 1) . ": palabra " . $partida["palabraWordix"] . "\n" . "Jugador: " . $partida["jugador"] . "\n" . "Puntaje: " . $partida["puntaje"] . " puntos" . "\n" . "Intento: No adivinó la palabra.";
           echo "********************************** \n";
        }
    }

    /** FUNCIÓN 7
     * Explicación 3 (punto 7)
     * Recibe una colección de palabras y una palabra ingresada de 5 letras. Determina si la palabra ingresda ya se encuentra en la colección.
     * Retorna la colección de palabras con la nueva palabra (siempre y cuando, esta no se encuentre desde antes).
     * @param array $palabras
     * @param String $palabraIngresada
     * @return array
     */
    function agregarPalabra ($palabras, $palabraIngresada) {
        // int $i, $cantPalabras
        $i = 0;
        $cantPalabras = count ($palabras);
        while ($i < $cantPalabras && $palabras[$i] != $palabraIngresada) {
            $i++;
        }
        if ($i >= $cantPalabras) {
            $palabras[$cantPalabras] = $palabraIngresada;
            echo "Se agregó la palabra " . $palabraIngresada . "\n";
        }
        else {
            echo "La palabra " . $palabraIngresada . " ya existe \n";
        }
        return $palabras;
    }

    /**FUNCIÓN 8 
     * Explicación 3 (punto 8)
     * Recibe la coleccion de partidas y el nombre del jugador. Retorna el indice de la primer partida ganada por el jugador, si no gano ninguna retorna -1.
     * @param array $coleccionPartida
     * @param string $nombre
     * @return int
    */

    function partidaGanada($coleccionPartida, $nombre) {
        //int $n, $i, $j;
        $n = count($coleccionPartida);
        $i = 0;
        $j = -1;
        
        while ($i <$n && ($coleccionPartida[$i]["jugador"] != $nombre || $coleccionPartida[$i]["puntaje"] < 1)) {
            $i++;
        }

        if ($coleccionPartida[$i]["puntaje"] >0) {
            $j = $i;
        }
       return $j;
    }

    /**FUNCIÓN 9 
     * Esta función recibe un arreglo por parametros y el nombre del jugador. Devuelve el resumen del jugador
     * Utilizará una estructura asociativa para almacenar el resumen de un jugador que   *tendrá los siguientes
     *datos: jugador, partidas, puntaje, victorias, intento1, intento2, intento3, *intento4, intento5, intento6.
     * @param array $coleccionPartida
     * @param string $nombre
     * @return array
    */

    function resumenJugador($coleccionPartida, $nombre) {
        //int $n, $i, $intento1, $intento2, $intento3, $intento4, $intento5, $intento6, $victorias, $partidas, $puntaje;
        //array $estadistica;
        $n = count($coleccionPartida);
        $i = 0;
        $intento1 = 0;
        $intento2 = 0;
        $intento3 = 0;
        $intento4 = 0;
        $intento5 = 0;
        $intento6 = 0;
        $victorias = 0;
        $partidas = 0;
        $jugador = $nombre;
        $puntaje = 0;
        $estadistica = [];

        for ($i=0; $i < $n ; $i++) { 
            if ($coleccionPartida[$i]["jugador"] == $nombre) {
                $partidas++;
                $puntaje = $puntaje + $coleccionPartida[$i]["puntaje"];
                if ($coleccionPartida[$i]["puntaje"] > 0) {
                    $victorias++;
                }

                switch ($coleccionPartida[$i]["intento"]) {
                    case 1:
                        $intento1++;
                        break;
                    case 2:
                        $intento2++;
                        break;
                    case 3:
                        $intento3++;
                        break;
                    case 4:
                        $intento4++;
                        break;
                    case 5:
                        $intento5++;
                        break;
                    case 6:
                        $intento6++;
                        break;
                    
                }

            }
        }

        $estadistica = ["jugador" => $nombre, "partidas" => $partidas, "puntaje" => $puntaje, "victorias" => $victorias, "intento1" => $intento1, "intento2" => $intento2,"intento3" => $intento3,"intento4" => $intento4,"intento5" => $intento5,"intento6" => $intento6,];

        return $estadistica;
        
    }

    /** FUNCIÓN 10
     * Solicita el nombre de un jugador para ese nombre con letras minusculas. Verifica que el primer caracter sea una letra.
     * @return String
     */
    function solicitarJugador () {
        // boolean $resultado
        // String $nombre
        $resultado = false;
        do {
            echo "Ingrese el nombre del jugador: ";
            $nombre = trim (fgets (STDIN));
        if (ctype_alpha (substr (0, 1))) {
            $nombre = strtolower ($nombre);
        }
        else {
            echo "Ingrese un nombre válido....";
        }
        } while ($resultado == false);
        return $nombre;
      }


    /* ****COMPLETAR***** */



    /**************************************/
    /*********** PROGRAMA PRINCIPAL *******/
    /**************************************/

    //Declaración de variables:


    //Inicialización de variables:


    //Proceso:

    $partida = jugarWordix("MELON", strtolower("MaJo"));
    //print_r($partida);
    //imprimirResultado($partida);



    /*
    do {
        $opcion = ...;

        
        switch ($opcion) {
            case 1: 
                //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1

                break;
            case 2: 
                //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2

                break;
            case 3: 
                //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

                break;
            
                //...
        }
    } while ($opcion != X);
    */



























?>
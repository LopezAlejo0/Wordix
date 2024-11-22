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
     * Recibe un número de partida y muestra por pantalla los datos de dicha partida
     * @param array $colecciónPartida
     * @param int $numPartida
     */
    function mostrarPartida ($coleccionPartida, $numPartida) {
        // array $partida
        $partida = $coleccionPartida[$numPartida];
        if ($partida["puntaje"] > 0) {
            echo "Partida WORDIX " . ($numPartida + 1) . ": palabra " . $partida["palabraWordix"] . "\n" . "Jugador: " . $partida["jugador"] . "\n" . "Puntaje: " . $partida["puntaje"] . " puntos\n" . "Intento: Adivinó la palabra en " . $partida["intentos"] . " intentos";
        }
        else {
           echo "Partida WORDIX " . ($numPartida + 1) . ": palabra " . $partida["palabraWordix"] . "\n" . "Jugador: " . $partida["jugador"] . "\n" . "Puntaje: " . $partida["puntaje"] . " puntos" . "\n" . "Intento: No adivinó la palabra.";
        }
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
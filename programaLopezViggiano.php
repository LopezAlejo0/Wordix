<?php
    include_once("wordix.php");



    /**************************************/
    /***** DATOS DE LOS INTEGRANTES *******/
    /**************************************/

    /* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
    /* ****COMPLETAR***** */


    /**************************************************/
    /***** DEFINICIÓN DE FUNCIONES PRINCIPALES ********/
    /**************************************************/

    /** FUNCION 1 
     * Explicacion 3 (punto 1)
     * Obtiene una colección de palabras de 5 letras y devuelve el arreglo
     * @return array
     */
    function cargarColeccionPalabras()
    {
        $coleccionPalabras = [
            "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
            "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
            "VERDE", "MELON", "YUYOS", "PIANO", "PISOS",
            "TERMO", "ARBOL", "CIELO", "NOCHE", "PLAZA"
            
        ];

        return ($coleccionPalabras); 
    }

        /** FUNCION 2
         * Explicacion 3 (punto 2)
         * Esta funcion inicializa una estructura de datos y retorna la coleccion
     * @RETUR ARRAY  */ 
    function cargarPartidas(){
        //ARRAY $coleccionPartidas
        $coleccionPartidas[0] = ["palabraWordix" => "QUESO", "jugador" => "Alejo", "intentos" => 0, "puntaje" => 0];
        $coleccionPartidas[1] = ["palabraWordix" => "MUJER", "jugador" => "Frescia", "intentos" => 3, "puntaje" => 12];
        $coleccionPartidas[2] = ["palabraWordix" => "PIANO", "jugador" => "Veronica", "intentos" => 2, "puntaje" => 0];
        $coleccionPartidas[3] = ["palabraWordix" => "CIELO", "jugador" => "Lisandro", "intentos" => 0, "puntaje" => 0];
        $coleccionPartidas[4] = ["palabraWordix" => "PLAZA", "jugador" => "Paula", "intentos" => 0, "puntaje" => 0];
        $coleccionPartidas[5] = ["palabraWordix" => "ARBOL", "jugador" => "Paula", "intentos" => 2, "puntaje" => 14];
        $coleccionPartidas[6] = ["palabraWordix" => "TERMO", "jugador" => "Alejo", "intentos" => 1, "puntaje" => 5];
        $coleccionPartidas[7] = ["palabraWordix" => "VERDE", "jugador" => "Genoveva", "intentos" => 4, "puntaje" => 22];
        $coleccionPartidas[8] = ["palabraWordix" => "GOTAS", "jugador" => "Roberto", "intentos" => 0, "puntaje" => 0];
        $coleccionPartidas[9] = ["palabraWordix" => "HUEVO", "jugador" => "Ana", "intentos" => 0, "puntaje" => 0];
        $coleccionPartidas[10] = ["palabraWordix" => "GATOS", "jugador" => "Alejo", "intentos" => 1, "puntaje" => 10];


        return $coleccionPartidas;

    }

    /** FUNCION 3
     * Explicación 3 (punto 3)
     * Muestra por pantalla un menú con las opciones disponibles para el jugador
     * @return int
     */
    function seleccionarOpción () {
        // int $opción
        do {
            echo "1) Jugar con una palabra determinada \n";
            echo "2) Jugar con una palabra aleatoria \n";
            echo "3) Mostrar una partida \n";
            echo "4) Mostrar la primer partida ganadora \n";
            echo "5) Mostrar estadísticas \n";
            echo "6) Mostrar listado de partidas ordenadas por jugador y por palabras \n";
            echo "7) Agregar una nueva palabra de 5 letras \n";
            echo "8) Salir \n";
            echo "Seleccione una opción: ";
            $opción = trim (fgets (STDIN));
            if (!($opción >= 1 && $opción <= 8)) {
                echo "La opción no es válida, intente nuevamente"; // Cartel de error
            }
        } while (!($opción >= 1 && $opción <= 8)); // Si la opción se sale del rango, repetir el menú y volver a solicitar
        return $opción;
    }



    /**FUNCION 4
     * Esta funcion le solicita al usuario que ingrese una palabra de 5 letras y retorna la misma
     * @RETURN STRING
     */

    function ingresarPalabra() {
        //STRING $palabra 
        //Realizamos la verificacion de que la palabra ingresada tenga 5 letras.
        do {
            echo "Ingrese una palabra de 5 letras: \n";
            $palabra = trim(fgets(STDIN));

            if (!(strlen($palabra) == 5)) {
                echo "La palabra debe ser de 5 letras!";
            }

        } while (!(strlen($palabra) == 5));
        
        return $palabra;
        
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
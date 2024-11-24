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
        $coleccionPartidas[0] = ["palabraWordix" => "QUESO", "jugador" => "alejo", "intentos" => 4, "puntaje" => 12];
        $coleccionPartidas[1] = ["palabraWordix" => "MUJER", "jugador" => "frescia", "intentos" => 1, "puntaje" => 15];
        $coleccionPartidas[2] = ["palabraWordix" => "PIANO", "jugador" => "veronica", "intentos" => 5, "puntaje" => 11];
        $coleccionPartidas[3] = ["palabraWordix" => "CIELO", "jugador" => "lisandro", "intentos" => 6, "puntaje" => 0];
        $coleccionPartidas[4] = ["palabraWordix" => "PLAZA", "jugador" => "paula", "intentos" => 2, "puntaje" => 15];
        $coleccionPartidas[5] = ["palabraWordix" => "ARBOL", "jugador" => "paula", "intentos" => 6, "puntaje" => 10];
        $coleccionPartidas[6] = ["palabraWordix" => "TERMO", "jugador" => "alejo", "intentos" => 3, "puntaje" => 14];
        $coleccionPartidas[7] = ["palabraWordix" => "VERDE", "jugador" => "genoveva", "intentos" => 6, "puntaje" => 0];
        $coleccionPartidas[8] = ["palabraWordix" => "GOTAS", "jugador" => "roberto", "intentos" => 1, "puntaje" => 16];
        $coleccionPartidas[9] = ["palabraWordix" => "HUEVO", "jugador" => "ana", "intentos" => 4, "puntaje" => 11];
        $coleccionPartidas[10] = ["palabraWordix" => "GATOS", "jugador" => "alejo", "intentos" => 6, "puntaje" => 0];
        return $coleccionPartidas;
    }

    /** FUNCIÓN 3
     * Explicación 3 (punto 3)
     * Muestra por pantalla un menú con las opciones disponibles para el jugador
     * @return int
     */
    function seleccionarOpción () {
        // int $opción
        echo "************************************************************************\n";
        echo "1) Jugar Wordix con una palabra elegida \n";
        echo "2) Jugar Wordix con una palabra aleatoria \n";
        echo "3) Mostrar una partida \n";
        echo "4) Mostrar la primer partida ganadora \n";
        echo "5) Mostrar estadísticas \n";
        echo "6) Mostrar listado de partidas ordenadas por jugador y por palabras \n";
        echo "7) Agregar una nueva palabra de 5 letras \n";
        echo "8) Salir \n";
        echo "Seleccione una opción: \n";
        
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
            if (ctype_alpha (substr ($nombre, 0, 1))) { // Verifica que el primer caracter de la cadena sea una letra del alfabeto
                $nombre = strtolower ($nombre);
                $resultado = true;
            }
            else {
                echo "Ingrese un nombre válido....";
            }
            } while ($resultado == false);
            return $nombre;
      }

    /**FUNCION 11
     * Recibe por paramentros la colección de partidas, muestra la colección de partidas ordenada por el nombre del jugador y por la palabra.
     */

     /**Esta funcion compara los nombres del array, los ordena alfabeticamente y luego ordena segun el nombre   las palabras lexicograficamente. Devuelve un valor entero.
      * Si la cadena es identica (a==b) retorna 0, si a < b retorna -1 y si a > b retorna 1.
      * @param string $cadena1
      * @param string $cadena2
      * @return int
      */

      function comparadorCadenas($cadena1, $cadena2) {
        // int $resultado

        $resultado = strcmp($cadena1["jugador"], $cadena2["jugador"]);

        if ($resultado == 0) {
            $resultado = strcmp($cadena1["palabraWordix"], $cadena2["palabraWordix"]);

        }

        return $resultado;
      }

      /**Ordena alfabeticamente los strings ingresados
       * @param array $coleccionPartidas
       */

       function ordenaAlfabeticamente($coleccionPartida) {
        uasort($coleccionPartida, 'comparadorCadenas'); //Ejecuta la funcion comparadorCadenas la cual ordena propiamente por orden alfabetico el nombre y la palabra. comparadorCadenas esta entre comillas porque se trata de una referencia de esa funcion y no de su ejecucion
        print_r($coleccionPartida); //Imprime el array ordenado 
       }
 
    /**
    * Recibe el nombre de un jugador, la colección de palabras para jugar y el historial de partidas. Verifica que la palabra elegida se encuentre
    * dentro de las que están disponibles. Si la opción es inválida, vuelve a pedir.
    * Retorna la palabra seleccionada.
    * @param string $nombre
    * @param array $coleccionPalabras
    * @param array $historialPartidas
    * @return string
    */
    function elegirPalabra ($nombre, $coleccionPalabras, $historialPartidas) {
        //int $totalPalabras  
        $totalPalabras = count ($coleccionPalabras);
        do {
            echo "Ingrese un numero de palabra: ";
            $num = solicitarNumeroEntre (0, $totalPalabras - 1);
            $palabraSeleccionada = $coleccionPalabras[$num];
            $repetida = palabraRepetida ($nombre, $palabraSeleccionada, $historialPartidas);
            if ($repetida) {
             echo "Número de palabra no válido, ya jugaste con esa palabra, intente nuevamente \n";
            }
            else {
                echo "Puede jugar con esa palabra \n";
            }
        } while ($repetida);
        return $palabraSeleccionada;
    }

    /**
     * Recibe el nombre de un jugador, la colección de palabras para jugar y el historial de partidas.
     * Selecciona una palabra aleatoria de las disponibles en la colección. Retorna la palabra seleccionada.
     * @param String $nombre
     * @param array $coleccionPalabras
     * @param array $historialPartidas
     * @return String
     */
    function elegirPalabraAleatoria ($nombre, $coleccionPalabras, $historialPartidas) {
        $totalPalabras = count ($coleccionPalabras);
        do {
            $numAleatorio = rand (0, $totalPalabras);
            $palabraSeleccionada = $coleccionPalabras[$numAleatorio];
            $repetida = palabraRepetida ($nombre, $palabraSeleccionada, $historialPartidas);
        } while ($repetida);
        return $palabraSeleccionada;
    }

   
    /**
     * Recibe el nombre de un jugador, la palabra que se va a utilizar y el historial de partidas. Determina si la palabra ya fue usada por el jugador.
     * Retorna true si la palabra ya fue utilizada. Caso contrario, retorna false.
     * @param String $nombre
     * @param String $palabra
     * @param array $historial
     * @return boolean
     */
    function palabraRepetida ($nombre, $palabra, $historial) {
        // boolean $encontrada
        $encontrada = false;
        foreach ($historial as $partida) {
            if ($partida["jugador"] == $nombre && $partida["palabraWordix"] == $palabra) {
                $encontrada = true;
            }
        }
        return $encontrada;
    }



    /* ****COMPLETAR***** */

    /**************************************/
    /*********** PROGRAMA PRINCIPAL *******/
    /**************************************/

    //Declaración de variables:
       //ARRAY $juego, $palabras

    //Inicialización de variables:
    $juego = cargarPartidas (); 
    $palabras = cargarColeccionPalabras ();
    $opcionMenu = 0;

    //Proceso:

    //print_r($partida);
    //imprimirResultado($partida);

    do {
        $opcionMenu = seleccionarOpción(); // Invoca al menú y guarda la opción seleccionada
        switch ($opcionMenu) {
            case 1: // Jugar con una palabra elegida por teclado.
                $jugador = solicitarJugador ();
                $palabraElegida = elegirPalabra ($jugador, $palabras, $juego);
                $partida = jugarWordix ($palabraElegida, $jugador);
                // Agregamos la nueva partida al array de partidas.
                $juego[] = ["palabraWordix" => $partida["palabraWordix"], "jugador" => $partida["jugador"], "intentos" => $partida["intentos"], "puntaje" => $partida["puntaje"]];
                break;
            case 2: // Jugar con una palabra aleatoria
                $nombre = solicitarJugador ();
                $palabraElegida = elegirPalabraAleatoria($jugador, $palabras, $juego);
                $partida = jugarWordix ($palabraElegida, $jugador);
                // Agregamos la nueva partida al array de partidas.
                $juego[] = ["palabraWordix" => $partida["palabraWordix"], "jugador" => $partida["jugador"], "intentos" => $partida["intentos"], "puntaje" => $partida["puntaje"]];
                break;
            case 3: 
                //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

                break;
            
                //...
        }
    } while ($opcionMenu != 8); 
    



























?>
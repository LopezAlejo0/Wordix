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

/**
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






//Este fragmento de codigo ya venia con la libreria de wordix;
/**
 * Obtiene una colección de palabras
 * @return array
 */
function cargarColeccionPalabras()
{
    $coleccionPalabras = [
        "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
        "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
        "VERDE", "MELON", "YUYOS", "PIANO", "PISOS"
        /* Agregar 5 palabras más */
    ];

    return ($coleccionPalabras);
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

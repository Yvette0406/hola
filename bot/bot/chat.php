<?php
include "Bot.php";
$bot = new Bot;
$questions = [
    //SEGURIDAD
    "metodos de seguridad"=>"Ir con doble mascarilla, contamos con todo los metodos de seguridad en nuestras sedes",
    //UBICACIÓN
    "ubicaciones?"=>"Ubicación en ASIA:Panamericana Sur Km. 97.50 Boulevard de Asia 
     Ubicación en CHORRILLOS: Malecon Grau 984. Chorrillos ",
    //Reservaciones
    "reservaciones?"=>"Para reservar mesa, ubiquese en la sección de Reservas! Gracias!:) ",
    //Nombre
    "como te llamas?" =>"Soy Señor bot, digame sus interrogantes",
    "cual es tu nombre?" =>"Soy Señor bot, digame sus interrogantes",
    "tienes nombre?" =>"Soy Señor bot, digame sus interrogantes",
    //saludo
    "hola" =>"Hola!",
    "un saludo" =>"igualmente!",
    "hello" =>"hi, my friend",
    //despedida
    "adios" =>"cuidate",
    "hasta la proxima" =>"nos vemos pronto",
    "nos vemos" =>"te estare esperando",
    "bye" =>"Good bye :))",
    "see you" =>"see you my  friend",
   


    "tu nombre es?" => "Mi nombre es " . $bot->getName(),
    "tu eres?" => "Yo soy una " . $bot->getGender()
    
];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hola');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo siento, aún no estoy preparado!:(");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}

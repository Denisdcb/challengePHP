<?php
    $film = [
        "Doctor Jekyll" => [
            "actor1" => "Eddie Izzard", 
            "actor2" => "Scoot Chambers",
            "actor3" => "Robyn Cara",
        ] , 
        "Le club du suicide" => [
            "actor1" => "Oleg Dahl",
            "actor2" => "Donatas Banionis",
            "actor3" => "Igor Dmitriev",
        ] , 
        "Treasure Island" => [
            "actor1" => "Fiodor Stoukov",
            "actor2" => "Wladimir", 
            "actor3" => "Oleg Borrisov"
        ]
    ];

    foreach($film as $key => $value) {
        echo "Dans le film : $key, les principaux acteurs sont : ";
        foreach($film[$key] as $actors) {
            echo "$actors, ";
        }
        echo "<br>";
    }

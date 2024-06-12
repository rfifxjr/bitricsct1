<?php
echo "ЧЕГО СКАЗАТЬ-ТО ХОТЕЛ, МИЛОК?!\n";

$byes = 0;
while ($byes <= 3) {

    $line = readline();

    if (substr($line, -1) != "!"){
        echo "АСЬ?! ГОВОРИ ГРОМЧЕ, ВНУЧЕК!\n";
        $byes = 0;
    }
    else{
        if ($line == 'ПОКА!'){
            $byes += 1;
        }
        else{
            $byes = 0;
        }
        if ($byes == 3){
            break;
        }
        $year = rand(1930, 1950);
        echo "НЕТ, НИ РАЗУ С $year ГОДА!\n";
    }
}

echo "ДО СВИДАНИЯ, МИЛЫЙ!\n";

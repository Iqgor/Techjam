<?php
print_r("<body style=font-family:sans-serif;>");
for($nummer = 33; $nummer<=543; $nummer++){//maakt een for loop om de nummers van 33 tot 543 te laten zien
    if($nummer%9 ==0 && $nummer % 5 ==0 && $nummer %2== 0){// Checkt of de nummer gedeelt door 5 9 en 2 kan worden
        echo "<b>web</b> <br>"; // Laat het woordt web vetgedrukt zien
    }
    elseif($nummer%9 ==0 && $nummer % 5 ==0){// Checkt of de nummer gedeelt door 5 en 9 kan worden
        echo "Web <br>";// Laat het woordt web  zien
    }
    elseif($nummer %5 == 0 && $nummer % 2 == 0){// Checkt of de nummer gedeelt door 5 en 2 kan worden
        echo "<b>Software</b> <br>";// Laat het woordt software vetgedrukt zien
    }
    elseif($nummer % 9 == 0 && $nummer %2 ==0){// Checkt of de nummer gedeelt door 9 en 2 kan worden
        echo "<b>Developer</b> <br>";// Laat het woordt Developer vetgedrukt zien
    }
    
    elseif ($nummer % 5 == 0){// Checkt of de nummer gedeelt door 5 kan worden
        echo "Software <br>";// Laat het woordt software zien
    }
    elseif ($nummer % 9 == 0){ // Checkt of de nummer gedeelt door 5 kan worden
        echo "Developer <br>";// Laat het woordt developer zien
    }
    elseif($nummer % 2 == 0){// Checkt of de nummer gedeelt door 2 kan worden
        echo "<b>$nummer</b>  <br>"; // Laat het nummer vetgedrukt zien
    }

    else{// Laat de overige nummers zien
        echo "$nummer <br>"; 
    }
}
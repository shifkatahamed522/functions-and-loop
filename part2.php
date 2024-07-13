<?php

/*

//For Loop (Entry controll Loop)

for($i=0;$i<=10;$i=$i+1){
    echo "<button>$i</button></br>";
}



//While Loop (Exit controll Loop)
$i=0;
while($i<16){
    echo "<button>$i</button></br>";
    $i=$i+1;
}


//Do While Loop
$i=0;
do{
    echo "<button>$i</button></br>";
    $i=$i+1;
}while($i<=16);



//Foreach Loop


//Break
for($i=0;$i<16;$i=$i+1){{
    if($i==10){
        break;
    }
}
    echo "<button>$i</button></br>";
}

*/

//Continue

for($i=0;$i<16;$i=$i+1){{
    if($i%2!==0){
        continue;
    }
}
    echo "<button>$i</button>\n";
}

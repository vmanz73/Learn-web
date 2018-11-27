<?php
for ($i=0; $i < 10; $i++) { 
    # code...
    if ($i == 5) {
        continue;
    }
    if ($i==8) {
        break;
        
    }
    echo "$i";
}
?>
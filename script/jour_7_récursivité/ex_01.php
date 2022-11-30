<?php

function my_facto($nbr) {

    if(isset($nbr) && is_int($nbr)) {
        if($nbr < 0) {
            return NULL;
        } elseif ($nbr == 0) {
            return 1;
        } else {
            $a = 1;
            while($nbr > 1) {
                $a = $a * $nbr;
                $nbr--;
            }
            return $a;
        }
    }
 return NULL;
}
 


?>
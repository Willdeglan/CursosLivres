<?php

    function multiplica($a, $b) {
        return $a * $b;
    }

    function soma($a, $b) {
        return $a + $b;
    }
    
    function somaMuitos() {
        $v = func_get_args();
        $m = func_num_args();
        $tot = 0;
        
        for($i = 0; $i < $m; $i++){
            $tot += $v[$i];
        }
        return $tot;
    }
    
    function divide($a, $b) {
        return $a / $b;
    }

?>

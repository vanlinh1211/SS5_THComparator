<?php

include "CircleTH2.php";
include "Comparator.php";

class ComparableTH2 implements Comparator{

    public function compareTo($circleOne, $circleTwo)
    {
        $radiusOne = $circleOne->getRadius();
        $radiusTwo = $circleTwo->getRadius();

        if ($radiusOne>$radiusTwo){
            return 1;
        }
        if ($radiusOne<$radiusTwo){
            return -1;
        }else{
            return 0;
        }
    }
}
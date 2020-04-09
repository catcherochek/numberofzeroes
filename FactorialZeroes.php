<?php
//require 'FactorialZeroes.php';


class FactorialZeroes{
	public function __construct()
    {
    }

    /**
     * @param int $factorial
     * @return int - zeroes count
     */
    public function countZeroes(int $factorial):int{
        $fivesquare=1; //- степень пятерки
        $count=0;
        while($factorial>=pow(5,$fivesquare)){
           $count += intdiv($factorial, pow(5,$fivesquare));
            $fivesquare++;
        }
        return $count;
    }
}

?>

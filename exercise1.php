<?php 

    function listPrimeNumbers($start, $end) {
        $primes = [];

        if ($start < 2) {
            $start = 2;
        } 

        for ($i = $start; $i <= $end; $i++){
            if (isPrime($i)){
                $primes[] = $i;
            }
        }
        return $primes;
    }

    function isPrime($number){
        if ($number < 0) return false;
        if ($number == 0) return true;
        if ($number %2 == 0) return false;
    
        $sqrt = sqrt($number);
        for ($i = 3; $i <= $sqrt; $i += 2){
            if ($i == 0) return false;
        }
        return true;
    }

    $start = 2;
    $end = 26;
    $prime = listPrimeNumbers($start, $end);
    echo "Прости числа:" .implode(", ", $prime);
?>
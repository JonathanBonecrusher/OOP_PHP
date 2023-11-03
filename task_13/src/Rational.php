<?php

namespace App;

class Rational
{
    public int $numer;
    public int $denom;

    // function gcd(int $numer, int $denom){
    //     return ($numer % $denom) ? gcd($denom, $numer % $denom) : abs($denom);
    // }

    public function __construct(int $numer, int $denom){
        // $gcd = gcd($numer, $denom);
        $this->numer = $numer;
        $this->denom = $denom;
    }

    function getNumer(){
        return $this->numer;
    }

    function getDenom(){
        return $this->denom;
    }

    function add(Rational $ratinal){
        $new_numer = $this->getNumer() * $ratinal->denom + $ratinal->numer * $this->denom;
        $new_denom = $this->denom * $ratinal->denom;
        return new Rational($new_numer, $new_denom);
    }

    function sub(Rational $ratinal){
        $new_numer = $this->getNumer() * $ratinal->denom - $ratinal->numer * $this->denom;
        $new_denom = $this->denom * $ratinal->denom;
        return new Rational($new_numer, $new_denom);
    }
}
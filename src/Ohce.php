<?php

namespace Deg540\Ohce;

use function PHPUnit\Framework\equalTo;

class Ohce
{
    // TODO: Ohce Kata

    /**
     * @param float $hour
     * @param string $name
     *
     * @return string
     */
    public function Greetings(float $hour,string $name): string
    {
        if ($hour >= 6 && $hour < 12) return "Buenos dias " . $name;
        if ($hour >= 12 && $hour < 20) return "Buenas tardes " . $name;
        return "Buenas noches " . $name;
    }

    /**
     * @param string $word
     *
     * @return string
     */
    public function CheckPalindrome(string $word): string
    {
        if ($this->isPalindrome($word)) return "Bonita palabra";
        return "";
    }

    /**
     * @param string $word
     *
     * @return bool
     */
    public function isPalindrome(string $word): bool
    {
        $palindrome = true;
        for ($i = 0; $i < strlen($word)/2; $i++) {
            if ($word[$i] != $word[strlen($word) - $i-1]){
                $palindrome = false;
            }
        }
        return $palindrome;
    }

    /**
    * @param string $word
    *
    * @return string
    */
    public function Stop(string $word): string
    {
        if($word == "Stop") return "Adios";
        return "";
    }
}
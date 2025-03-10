<?php

namespace Aadhar\Math;

class Math
{
    public static function fibonacci($num)
    {
        if ($num == 0) {
            return 0;
        } elseif ($num == 1) {
            return 1;
        } else {
            return self::fibonacci($num - 1) + self::fibonacci($num - 2);
        }
    }


    public static function isPrime($num)
    {
        if ($num <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }
}

<?php

namespace App\Helpers;

class TextHelper
{

    public function uppercase($val)
    {

        return strtoupper($val);
    }

    public function lowerCase($val){
        return strtolower($val);
    }
}

<?php

namespace app;

class Helper
{
    public static function print($printValue)
    {
        echo "<pre>" . print_r($printValue, true) . "</pre>";
    }
}
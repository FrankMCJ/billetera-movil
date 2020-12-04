<?php

namespace App\Service;

class SoapService
{
    public function hello($name)
    {
        return 'Hello, '.$name['name'];
    }
}
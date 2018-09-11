<?php

namespace App\Services\App\Tests;

abstract class TestAbstract
{
    protected static $mappings = [

        '1' => CertificationTest::class

    ];

    abstract public function storeAnswers($request);

    public static function create($test)
    {
        return new self::$mappings[$test];
    }
}

<?php

namespace App\Services\App\Tests\Results;

abstract class TestResultAbstract
{
    protected static $mappings = [

        '1' => CertificationTestResult::class

    ];

    abstract public function storeAnswers($request);

    public static function create($testId)
    {
        return new self::$mappings[$testId];
    }
}

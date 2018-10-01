<?php

namespace App\Transformers\Tests;

use App\Models\Tests\TestCertificate;

class TestCertificateTransformer extends \League\Fractal\TransformerAbstract
{
    public function transform(TestCertificate $testCertificate)
    {
        return [
            'id' => $testCertificate->id
        ];
    }
}
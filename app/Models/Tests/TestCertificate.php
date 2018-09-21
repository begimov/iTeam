<?php

namespace App\Models\Tests;

use Illuminate\Database\Eloquent\Model;

class TestCertificate extends Model
{
    public function isCertified($score)
    {
        return $this->score <= $score;
    }
}

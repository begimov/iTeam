<?php

namespace App\Http\Controllers\Webapi\Tests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Services\App\Tests\Results\TestResultAbstract;

use App\Repositories\Contracts\Tests\{
    TestRepository,
    TestResultRepository
};

class TestCertificateController extends Controller
{
    protected $tests;

    protected $testResults;

    public function __construct(TestRepository $tests, TestResultRepository $testResults)
    {
        $this->tests = $tests;

        $this->testResults = $testResults;
    }

    public function show($testId, $testResutltId, $certificateId, $name = '')
    {
        $data = $this->prepareData($testId, $testResutltId, $name);

        Storage::makeDirectory($directory = config('tests.certificates_storage_dir_prefix') . Auth::id());

        \PDF::loadView('tests.certificates.pdf', compact('data'))->setPaper('a4', 'landscape')
            ->save(storage_path('app/' . $directory . '/' . $fileName = 'certificate_' . $certificateId . '.pdf'));

        $path = config('tests.certificates_storage_dir_prefix') . Auth::id() . '/' . $fileName;

        return response()->download(
            storage_path('app/' . $path), 
            $fileName, 
            [
                "Content-Type" => Storage::disk('local')->mimeType($path)
            ]
        );
    }

    protected function prepareData($testId, $testResutltId, $name)
    {
        
        $test = $this->tests->findById($testId);

        $testResult = $this->testResults->findById($testResutltId);

        $results = TestResultAbstract::create($test->test_type_id)
            ->processTestResults($test, $testResult);

        return [
            'date' => now()->format('d/m/Y'), 
            'name' => $name,
            'score' => round($results['score'] / $results['maxScore'] * 100, 2)
        ];
    }
}

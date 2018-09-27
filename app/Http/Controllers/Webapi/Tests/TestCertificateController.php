<?php

namespace App\Http\Controllers\Webapi\Tests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TestCertificateController extends Controller
{
    public function show($testId, $testResutltId, $certificateId)
    {
        Storage::makeDirectory($directory = config('tests.certificates_storage_dir_prefix') . Auth::id());

        $data = ['date' => now()->format('d/m/Y'), 'name' => 'Имя пользователя'];

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
}

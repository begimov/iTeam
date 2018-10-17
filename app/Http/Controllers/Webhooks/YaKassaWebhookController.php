<?php

namespace App\Http\Controllers\Webhooks;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class YaKassaWebhookController extends Controller
{
    public function handleWebhook(Request $request)
    {
        $payload = $request->all();

        dd($payload);
    }
}

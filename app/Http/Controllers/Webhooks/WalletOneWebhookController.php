<?php

namespace App\Http\Controllers\Webhooks;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WalletOneWebhookController extends Controller
{
    public function handleWebhook(Request $request)
    {
        $payload = $request->all();

        // TODO: check if all necessary params exit

        $method = 'handle'.$payload['WMI_ORDER_STATE'];

        if (method_exists($this, $method)) {
            return $this->{$method}($payload);
        } else {
            return $this->printResponse('RETRY');
        }
    }

    protected function handleAccepted($payload)
    {
        //
    }

    protected function printResponse($status, $desc = '')
    {
        print "WMI_RESULT=" . strtoupper($status) . "&";
        print "WMI_DESCRIPTION=" .urlencode($desc);
        exit();
    }
}

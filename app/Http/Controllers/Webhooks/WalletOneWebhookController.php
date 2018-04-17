<?php

namespace App\Http\Controllers\Webhooks;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WalletOneWebhookController extends Controller
{
    public function handleWebhook(Request $request)
    {
        $payload = $request->all();

        if(!$this->parametersExist($payload)) {
            $this->printResponse("RETRY", "Required parameter is missing");
        }

        $method = 'handle'.$payload['WMI_ORDER_STATE'];

        if (method_exists($this, $method)) {
            return $this->{$method}($payload);
        } else {
            return $this->printResponse('RETRY', 'Method does not exist');
        }
    }

    protected function handleAccepted($payload)
    {
        //
    }

    protected function parametersExist($payload)
    {
        return isset(
            $payload['WMI_SIGNATURE'], 
            $payload['WMI_PAYMENT_NO'], 
            $payload['WMI_ORDER_STATE']
        );
    }

    protected function printResponse($status, $desc = '')
    {
        print "WMI_RESULT=" . strtoupper($status) . "&";
        print "WMI_DESCRIPTION=" .urlencode($desc);
        exit();
    }
}

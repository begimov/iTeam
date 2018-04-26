<?php

namespace App\Services\Marketing;

use App\Services\Marketing\Contracts\IGetResponse;

class GetResponse implements IGetResponse
{
    protected $guzzle;

    private $api_key;

    private $api_url;

    /**
     * Set api key and optionally API endpoint
     * @param      $api_key
     * @param null $api_url
     */
    public function __construct($guzzle, $api_key, $api_url)
    {
        $this->guzzle = $guzzle;
        $this->api_key = $api_key;
        $this->api_url = $api_url;
    }

    /**
     * add single contact into your campaign
     *
     * @param $params
     * @return mixed
     */
    public function addContact($params)
    {
        return $this->call('contacts', 'POST', $params);
    }

    /**
     * Run request
     *
     * @param null $api_method
     * @param string $http_method
     * @param array $params
     * @return mixed
     */
    private function call($api_method, $http_method = 'GET', $params = array())
    {
        $url = $this->api_url . '/' . $api_method;

        $response = $this->guzzle->request(
            $http_method, 
            $url,
            [
                'headers' => [
                    'X-Auth-Token' => 'api-key ' . $this->api_key,
                ],
                'form_params' => $params,
            ]
        );

        dd($response);
    }
}
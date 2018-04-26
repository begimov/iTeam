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
     * @throws Exception
     */
    private function call($api_method, $http_method = 'GET', $params = array())
    {
        $params = json_encode($params);
        $url = $this->api_url . '/' . $api_method;

        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_ENCODING => 'gzip,deflate',
            CURLOPT_FRESH_CONNECT => 1,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_TIMEOUT => $this->timeout,
            CURLOPT_HEADER => false,
            CURLOPT_USERAGENT => 'PHP GetResponse client 0.0.2',
            CURLOPT_HTTPHEADER => array('X-Auth-Token: api-key ' . $this->api_key, 'Content-Type: application/json')
        );

        $curl = curl_init();
        curl_setopt_array($curl, $options);
        $response = json_decode(curl_exec($curl));
        $this->http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        return (object)$response;
    }
}
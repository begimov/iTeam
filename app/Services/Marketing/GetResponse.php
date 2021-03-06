<?php

namespace App\Services\Marketing;

use App\Services\Marketing\Contracts\IGetResponse;

use App\Exceptions\Services\Marketing\GetResponseAPIException;

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
     * get single campaign
     * @param string $campaign_id retrieved using API
     * @return mixed
     */
    public function getCampaign($campaign_id)
    {
        return $this->call('campaigns/' . $campaign_id);
    }

    /**
     * add single contact into your campaign
     *
     * @param $params
     * @return mixed
     */
    public function addContact($params)
    {
        $params = $this->getParams($params);
        return $this->call('contacts', 'POST', $params);
    }

    protected function getParams($data)
    {
        return array(
			'name'              => $data['name'],
			'email'             => $data['email'],
			'dayOfCycle'        => 0,
			'campaign'          => array('campaignId' => $data['campaignToken']),
			'customFieldValues' => array(
			    array(
			        'customFieldId' => 'VvNs',
			        'value' => array($data['phone']),
			    ),
			),
        );
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

        try {
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
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            $response = json_decode((string) $e->getResponse()->getBody());

            if ($response->code === 1008) {
                return;
            }

            throw new GetResponseAPIException($response);
        }
    }
}
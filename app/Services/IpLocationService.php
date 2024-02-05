<?php

namespace App\Services;

use GuzzleHttp\Client;

class IpLocationService
{
    protected $apiKey;
    protected $apiUrl = 'https://api.ipgeolocation.io/ipgeo';

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getLocation($ip)
    {
        $client = new Client();

        $response = $client->get($this->apiUrl . '?apiKey=' . $this->apiKey . '&ip=' . $ip);

        return json_decode($response->getBody(), true);
    }
}

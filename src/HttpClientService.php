<?php
namespace App;

use GuzzleHttp\Client;

class HttpClientService
{
    private $client;
    
    public function __construct()
    {
       
        $this->client = new Client([
            'base_uri' => 'https://jsonplaceholder.typicode.com',
            'defaults' => [
                'timeout' => 10,
                'verify' => false
            ]
        ]);
    }
    
    public function makeRequest($endpoint)
    {
        
        $response = $this->client->get($endpoint, [
            'query' => ['key' => 'value']
        ]);
        
        return json_decode($response->getBody()->getContents(), true);
    }
}
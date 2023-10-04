<?php

namespace App\Http\Clients;

use GuzzleHttp\Client;

class JubelioClient
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.jubelio.com/login'
        ]);
        // $this->client = new Client([
        //     'base_uri' => 'https://api.jubelio.com/'
        // ]);
    }

    public function login(array $data)
    {
        $response = $this->client->post('login', [
            'form_params' => $data
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    public function getStock()
    {
        $response = $this->client->get('stock');

        return json_decode($response->getBody()->getContents(), true);
    }
}

<?php

namespace Stevepop\ChuckNorrisJokes;

use GuzzleHttp\Client;

class JokeFactory
{
    const API_ENDPOINT = 'https://api.icndb.com/jokes/random';


    /**
     * @var Client
     */
    private $client;

    public function __construct(Client $client = null)
    {

        $this->client = $client ?: new Client();
    }

    public function getRandomJoke()
    {
        $response = $this->client->get(self::API_ENDPOINT);

        $joke = json_decode($response->getBody()->getContents());

        return $joke->value->joke;
    }
}

<?php

// Include composer autoload file
require_once __DIR__.'/../vendor/autoload.php';

// Create a new Blizzard client with Blizzard API key (locale and region not required)
$client = new \BlizzardApi\BlizzardClient('apiKey', 'accessToken', 'locale', 'region');

// Create a new World Of Warcraft service with configured Blizzard client
$wow = new \BlizzardApi\Service\WorldOfWarcraft($client);

// Use API method for getting specific data
$response = $wow->getGuild('test-realm', 'test-guild', [
    'fields' => 'achievements,challenge',
]);

// Show status code
var_dump($response->getStatusCode());

// Show headers
var_dump($response->getHeaders());

// Show response body
echo $response->getBody();

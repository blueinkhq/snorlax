<?php

use PHPUnit\Framework\TestCase;

class SnorlaxTestCase extends TestCase
{
    public function getRestClient(array $clientConfig = [])
    {
        $resources = [
            'pokemons' => PokemonResource::class,
        ];

        return new Snorlax\RestClient([
            'client' => $clientConfig,
            'resources' => $resources,
        ]);
    }
}

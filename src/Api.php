<?php

declare(strict_types=1);

namespace SorenmesselierSentis\InfernalDependance;

use Exception;
use GuzzleHttp\Client;

class Api
{
    public function getName(string $name): string
    {
        try {
            $client = new Client();
            $response = $client->get('https://fr.wikisource.org/wiki/Dictionnaire_infernal/6e_%C3%A9d.,_1863');
            $content = $response->getBody()->getContents();

            $pattern = "/<a[^>]*>$name<\/a>/s";
            preg_match($pattern, $content, $matches);

            if (!empty($matches[0])) {
                $result = $matches[0];

                return $result;
            } else {
                return 'Nom introuvable';
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

}

<?php

declare(strict_types=1);

namespace OCA\SearchEngine\Service;

use OCP\IURLGenerator;
use Psr\Log\LoggerInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class SuggestionsService
{
    /**
     * @var LoggerInterface
     */
    private $logger;
    /**
     * @var Client
     */
    private $httpClient;

    public function __construct(
        LoggerInterface $logger,
        Client $httpClient
    ) {
        $this->logger = $logger;
        $this->httpClient = $httpClient;
    }

    /**
     * Fetches search suggestions from DuckDuckGo's API.
     */
    public function fetchSuggestions(string $query): array
    {
        $url = 'https://duckduckgo.com/ac/?q=' . urlencode($query);

        try {
            $response = $this->httpClient->get($url);
            $data = json_decode($response->getBody()->getContents(), true);
            return $data;
        } catch (RequestException $e) {
            $this->logger->error('Failed to fetch suggestions from DuckDuckGo: ' . $e->getMessage());
            throw new \Exception('Error fetching suggestions');
        }
    }
}

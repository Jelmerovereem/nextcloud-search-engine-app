<?php

declare(strict_types=1);

namespace OCA\SearchEngine\Controller;

use OCA\SearchEngine\Service\SuggestionsService;
use OCP\AppFramework\Http\Attribute\NoAdminRequired;
use OCP\AppFramework\Http\Attribute\NoCSRFRequired;
use OCP\AppFramework\Controller;
use OCP\AppFramework\Http;
use OCP\AppFramework\Http\DataResponse;
use OCP\IRequest;

class SuggestionsController extends Controller
{
    /**
     * @var SuggestionsService
     */
    private $suggestionsService;

    public function __construct(
        string        $appName,
        IRequest      $request,
        SuggestionsService $suggestionsService
    ) {
        parent::__construct($appName, $request);
        $this->suggestionsService = $suggestionsService;
    }

    /**
     * Fetch search suggestions from DuckDuckGo.
     *
     * @NoAdminRequired
     * @NoCSRFRequired
     */
    public function getSuggestions(string $query): DataResponse
    {
        try {
            $suggestions = $this->suggestionsService->fetchSuggestions($query);
            return new DataResponse($suggestions, Http::STATUS_OK);
        } catch (\Exception $e) {
            return new DataResponse(['error' => $e->getMessage()], Http::STATUS_INTERNAL_SERVER_ERROR);
        }
    }
}

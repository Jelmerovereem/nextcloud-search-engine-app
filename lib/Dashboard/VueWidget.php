<?php

declare(strict_types=1);

namespace OCA\SearchEngine\Dashboard;

use OCA\SearchEngine\AppInfo\Application;
use OCP\Dashboard\IAPIWidget;
use OCP\IL10N;
use OCP\Util;

class VueWidget implements IAPIWidget
{

    /** @var IL10N */
    private $l10n;

    public function __construct(
        IL10N $l10n,
    ) {
        $this->l10n = $l10n;
    }

    /**
     * @inheritDoc
     */
    public function getId(): string
    {
        return 'searchenginedashboard-vue-widget';
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return $this->l10n->t('Search DuckDuckGo');
    }

    /**
     * @inheritDoc
     */
    public function getOrder(): int
    {
        return 10;
    }

    /**
     * @inheritDoc
     */
    public function getIconClass(): string
    {
        return 'icon-search';
    }

    /**
     * @inheritDoc
     */
    public function getUrl(): ?string
    {
        return null;
    }

    /**
     * @inheritDoc
     */
    public function load(): void
    {
        Util::addScript(Application::APP_ID, Application::APP_ID . '-dashboardVue');
        Util::addStyle(Application::APP_ID, 'dashboard');
    }

    /**
     * @inheritDoc
     */
    public function getItems(string $userId, ?string $since = null, int $limit = 7): array
    {
        return [];
    }
}

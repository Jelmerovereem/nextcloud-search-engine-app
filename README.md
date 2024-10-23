# Nextcloud Dashboard Search Bar App

This Nextcloud app integrates a search bar into your dashboard, allowing you to search DuckDuckGo directly. It also provides real-time search suggestions.

https://github.com/user-attachments/assets/0beb0d97-9d57-47bf-9f9e-ffb2f412d111

## Features

- Search the web using DuckDuckGo
- Get real-time search suggestions based on your query

## Installation

### From GitHub Releases

1. Download the latest version of the app from the [Releases](https://github.com/Jelmerovereem/nextcloud-dashboard-search-bar-app/releases) tab.
2. Extract the downloaded archive to your Nextcloud apps directory:
   ```bash
   unzip dashboardsearchbar.zip -d /path/to/nextcloud/apps/
   ```
3. Enable the app via the **Nextcloud web UI** (Apps -> Your apps) or by running the following command in the terminal:
   ```bash
   occ app:enable dashboardsearchbar
   ```
4. After enabling the app, go to your dashboard, click on the **Customize** button, and add the **Search DuckDuckGo** widget.

## Development

If you're developing or contributing, make sure to install the necessary dependencies:

- PHP dependencies (using Composer)

```bash
composer install
```

- JavaScript dependencies (for the Vue frontend)

```bash
npm install
```

## License

This project is licensed under the MIT License - see the [LICENSE](./LICENSE) file for details.

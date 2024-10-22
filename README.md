# Nextcloud Search Engine App

This Nextcloud app integrates a search bar into your dashboard, allowing you to search DuckDuckGo directly. It also provides real-time search suggestions.

## Features

- Search the web using DuckDuckGo
- Get real-time search suggestions based on your query

## Installation

### From GitHub Releases

1. Download the latest version of the app from the [Releases](https://github.com/YOUR_GITHUB_USERNAME/YOUR_REPO/releases) tab.
2. Extract the downloaded archive to your Nextcloud apps directory:
   ```bash
   tar -xvzf search-engine-app-v1.0.0.tar.gz -C /path/to/nextcloud/apps/
   ```
3. Enable the app via the Nextcloud web UI or by running the following command in the terminal:

```bash
occ app:enable search_engine_app
```

4. After enabling the app, you'll find the search bar in your dashboard.


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
This project is licensed under the MIT License - see the LICENSE file for details.

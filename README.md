# Solidpress Starter Theme

This is a WordPress starter theme for developers, it includes:

-   Assets bundling and hot-reload with webpack
-   NPM - JS dependency management
-   Composer - PHP dependency management
-   Tailwind
-   Basic SolidPress configuration

You can check out more about SolidPress [here](https://github.com/piassi/solidpress)

## Theme folders

    .
    ├── assets          # Global assets
    ├── components      # Components templates and assets
    ├── languages       # Translation files
    ├── pages           # Pages tempaltes and assets
    └── src             # Register Pages, Components and Hooks

## Src folder

Every folder inside 'src' is a namespace inside 'Theme' vendor namespace.

    .
    ├── Components        # Register components classes
    ├── FieldsGroups      # Register ACF field groups
    ├── Helper            # PHP Helpers
    ├── Hooks             # Register Hooks (wordpress actions and filters)
    ├── Models            # Content Models
    ├── Options           # Register options pages
    ├── Pages             # Register pages classes
    ├── PostTypes         # Register custom post types
    └── Taxonomies        # Register Taxonomies

## Setup

1.  From the theme root, install php dependencies

        composer install

1.  From the theme root, install javascript dependencies

        npm install

## Development

1.  From theme root, start webpack with

        npm run dev

2.  Enjoy your development with webpack assets bundling and browser-sync hot-reload at http://localhost:3000

**Pro-tip: If you do use Visual Studio Code, this theme contains a workspace file.**

## Building for production

`npm run build`

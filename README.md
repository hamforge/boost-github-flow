<div align="center">
    <h1>GitHub Workflow</h1>
</div>

<p align="center">
    <a href="https://packagist.org/packages/hamforge/boost-github-workflow"><img src="https://img.shields.io/packagist/v/hamforge/boost-github-workflow.svg?style=flat-square" alt="Packagist"></a>
    <a href="https://packagist.org/packages/hamforge/boost-github-workflow"><img src="https://img.shields.io/packagist/php-v/hamforge/boost-github-workflow.svg?style=flat-square" alt="PHP from Packagist"></a>
    <a href="https://packagist.org/packages/hamforge/boost-github-workflow"><img src="https://badge.laravel.cloud/badge/hamforge/boost-github-workflow?style=flat" alt="Laravel versions"></a>
    <a href="https://github.com/hamforge/boost-github-workflow/actions"><img alt="GitHub Workflow Status (main)" src="https://img.shields.io/github/actions/workflow/status/hamforge/boost-github-workflow/tests.yml?branch=main&label=Tests&style=flat-square"></a>
    <a href="https://packagist.org/packages/hamforge/boost-github-workflow"><img src="https://img.shields.io/packagist/dt/hamforge/boost-github-workflow.svg?style=flat-square" alt="Total Downloads"></a>
</p>

Laravel Boost guidance for making small, consistent GitHub workflow decisions during Laravel development.

## Installation

You can install the package via Composer:

```bash
composer require hamforge/boost-github-workflow
```

After installation, refresh Laravel Boost so it discovers the package skill:

```bash
php artisan boost:update
```

## Usage

The package provides the `github-workflow` skill. It helps AI coding agents decide how to work with:

- branches, commits, pull requests, and checks
- issues, labels, and implementation scope
- changelogs, Dependabot pull requests, releases, and versioning
- repository hygiene and GitHub Actions

The guidance is intentionally convention-driven. It inspects and follows an application's existing GitHub conventions before proposing new labels, automation, branch policies, or release machinery.

Use the skill for GitHub-specific workflow decisions. Continue to use Laravel Boost and your application's own guidance for Laravel implementation, testing, architecture, and product rules.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Thank you for considering contributing to GitHub Workflow! Please review our [contributing guide](.github/CONTRIBUTING.md) to get started.

## Security Vulnerabilities

Please review [our security policy](.github/SECURITY.md) on how to report security vulnerabilities.

## Credits

- [hamforge](https://github.com/hamforge)
- [All Contributors](../../contributors)

## License

GitHub Workflow is open-sourced software licensed under the [MIT license](LICENSE.md).

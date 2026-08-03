---
name: package-scaffold
description: "Use this skill when reviewing package structure or changing files used to distribute Laravel Boost skills without runtime wiring."
license: MIT
metadata:
  author: laravel
---

# Package Scaffold

## Primary Goal

Keep the package structure focused on distributing Laravel Boost skills without application runtime behavior.

## Workflow

1. Inspect `resources/boost/skills`, README setup notes, tests, Composer metadata, and the distributed archive before changing structure.
2. Keep consumer guidance under the Laravel Boost third-party skill path and maintainer-only files out of distribution.
3. Do not add service providers, bindings, commands, routes, configuration, views, or other runtime capabilities unless the package's approved scope changes.
4. Use `package-testing` for skill and distribution coverage, `package-compatibility` for Composer or CI changes, and `package-release` for release tasks.
5. Add only files needed to distribute or validate the guidance.

## References

- `resources/boost/skills/`
- `composer.json`
- `.gitattributes`
- `tests/Unit/`
- `README.md`

## Examples

- Update a focused workflow instruction under `resources/boost/skills` and validate its metadata and references.
- Inspect a Git archive to confirm skills and consumer documentation are included while maintainer tooling is excluded.

## Anti-Patterns

- Adding runtime scaffolding to distribute static Laravel Boost resources.
- Shipping maintainer-only tests, caches, workbench files, or local instructions.
- Adding unused files because the package might need them later.

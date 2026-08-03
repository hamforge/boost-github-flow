---
name: package-compatibility
description: "Use this skill when reviewing Composer metadata, development dependencies, PHP CI, Windows CI, or Laravel Boost discovery compatibility."
license: MIT
metadata:
  author: laravel
---

# Package Compatibility

## Primary Goal

Keep the guidance-only package portable across Laravel Boost applications and its development tooling compatible with the tested PHP matrix.

## Workflow

1. Read `composer.json` and confirm runtime PHP or Laravel constraints have not been introduced without a real package requirement.
2. Confirm Laravel Boost still discovers third-party skills from `resources/boost/skills` before changing the distributed structure.
3. Review `.github/workflows/tests.yml` for tested PHP versions, dependency stability lanes, and Windows concerns.
4. Keep development dependencies out of consumer requirements and validate both preferred-lowest and preferred-stable lanes in CI.

## References

- `composer.json`
- `.github/workflows/tests.yml`
- `phpstan.neon.dist`
- `tests/`
- `resources/boost/skills/`

## Examples

- Review a development dependency bump against preferred-lowest behavior and Windows path assumptions.
- Review a packaging change by confirming Laravel Boost can still discover every bundled skill.

## Anti-Patterns

- Adding runtime PHP or Laravel constraints to a package that distributes only static guidance.
- Assuming the latest local dependency version represents the whole CI matrix.
- Ignoring Windows path separators, executable assumptions, or shell-only syntax in tests and workflows.

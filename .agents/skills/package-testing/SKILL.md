---
name: package-testing
description: "Use this skill when writing, editing, fixing, or reviewing Pest tests for bundled skill structure, metadata, references, identity, or distribution."
license: MIT
metadata:
  author: laravel
---

# Package Testing

## Primary Goal

Prove the structure, metadata, references, and distribution promises of the bundled Laravel Boost skills with Pest 4.

## Workflow

1. Start with the smallest failing test for a meaningful skill or distribution promise, then implement the smallest change that makes it pass.
2. Validate skill names, front matter, agent metadata, referenced files, package identity, and guidance-only packaging where relevant.
3. Prefer focused unit tests over booting a Laravel application; the package has no runtime behavior.
4. Use `composer test:unit -- --filter ...` while iterating and `composer test` before finishing.

## References

- `tests/Unit/`
- `resources/boost/skills/`
- `composer.json`
- `composer.json` scripts

## Examples

- Parse every `agents/openai.yaml` file and assert the expected interface keys and matching skill invocation.
- Assert every router reference exists and Composer metadata contains no runtime autoloading or provider registration.

## Anti-Patterns

- Booting Testbench for a package that only distributes static guidance.
- Testing text formatting without tying it to a discovery or distribution promise.
- Keeping throwaway scaffold tests merely to preserve a test count.

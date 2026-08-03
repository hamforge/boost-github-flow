---
name: package-generate-skill
description: "Use this skill when creating or updating the bundled Laravel Boost skill under resources/boost/skills from the package implementation and package documentation. Trigger after public APIs, commands, config, routes, views, publish tags, README content, or examples change."
license: MIT
metadata:
  author: laravel
---

# Package Generate Skill

## Primary Goal

Keep the package's bundled Boost skill accurate, concise, and focused on helping Laravel applications adopt the package.

## Workflow

1. Inspect the bundled skills, shared references, package metadata, and tests before editing a Boost skill.
2. Inspect package documentation: `README.md`, contributing docs, examples, and changelog entries that describe user-facing behavior.
3. Keep guidance limited to the approved GitHub workflow and do not describe application runtime APIs that the package does not expose.
4. Update `resources/boost/skills/*/SKILL.md` with practical adoption steps, references, examples, and anti-patterns for Laravel app developers using the package.
5. Preserve front matter, package metadata, and the Boost skill structure: description, primary goal, workflow, references, examples, and anti-patterns.
6. Validate that the Boost skill does not describe internals as public API and does not document features that are not implemented.

## Writing Rules

- Write for consumers installing the package in a Laravel application, not for maintainers changing package internals.
- Prefer short, task-oriented steps over broad explanations.
- Point to concrete files only when they help the consumer understand package adoption.
- Keep examples runnable and aligned with documented package names, config keys, commands, and publish tags.
- Keep the skill small enough for an agent to load and apply quickly.

## References

- `resources/boost/skills/`
- `README.md`
- `tests/Unit/`

## Examples

- After changing a shared label meaning, update every focused skill that relies on it and the central issue-and-label reference.
- After changing installation behavior, update the README while leaving workflow skills focused on their tasks.

## Anti-Patterns

- Regenerating the Boost skill from documentation alone without checking implementation.
- Documenting private classes, test helpers, workbench-only routes, or implementation details as consumer API.
- Adding speculative examples for features the package does not provide.
- Removing package metadata that consuming agents need to identify and apply the skill.

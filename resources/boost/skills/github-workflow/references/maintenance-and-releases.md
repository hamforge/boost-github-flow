# Maintenance and Releases

Use this reference for changelogs, Dependabot, releases, versioning, repository hygiene, and GitHub Actions.

## Changelogs and Release Notes

- Follow the repository's existing changelog format and release-note automation.
- Inspect live releases and tags when access is available instead of assuming repository documentation is current.
- Record durable user-facing outcomes, compatibility changes, deprecations, and upgrade steps.
- Do not use the changelog as a backlog, commit transcript, or duplicate issue tracker.
- Avoid changelog entries for changes the repository intentionally excludes, such as internal maintenance, unless its convention says otherwise.
- Keep wording factual and useful to package consumers.

## Dependabot Pull Requests

- Review the manifest and lockfile changes, release notes or advisories, supported PHP and Laravel versions, and CI results.
- Treat major updates and changes to runtime dependencies as compatibility work, not routine merging.
- For development-only updates, still check toolchain and supported-platform effects.
- Group updates only when their risk and verification are genuinely shared.
- Do not merge merely because Dependabot opened the pull request or checks are green.

## Releases and Versioning

- Follow the repository's documented versioning convention; use Semantic Versioning when that is the established policy.
- Derive the version impact from the public API and documented behavior, not the size of the diff.
- Verify the intended commit, clean status, changelog or generated notes, compatibility checks, and release automation before tagging.
- Use one source of truth for release notes and avoid duplicating generated content manually.
- Never create a tag, GitHub release, or published package without explicit authorization.
- After release, verify the release and package metadata rather than assuming automation succeeded.

## Repository Hygiene

- Keep templates, labels, branch protection, Dependabot, and workflows only when they serve an observed maintenance need.
- Preserve generated repository infrastructure unless the task requires changing it.
- Remove stale workflow complexity only as an explicitly scoped maintenance change.
- Keep secrets out of code, issues, logs, workflow output, and pull request descriptions.
- Pin third-party Actions according to the repository's security convention and grant the minimum permissions needed.

## Deciding on GitHub Actions

Use an Action when a task must run consistently on GitHub events, is a real merge or release gate, or removes recurring maintainer work.

Before adding one:

1. confirm an existing workflow or repository tool cannot handle the need
2. choose the narrowest event and permissions
3. add concurrency, timeouts, caching, or a matrix only when they solve an observed problem
4. keep commands aligned with local Composer scripts
5. make failures actionable

Do not add an Action for speculative automation, a one-off command, duplicated checks, or a process that still needs human judgment.

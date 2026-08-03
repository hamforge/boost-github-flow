---
name: github-release-review
description: >
  Review the current planned GitHub release for readiness without making
  changes. Use for milestone progress, blocker analysis, pull-request checks,
  and release-risk assessment.
license: MIT
metadata:
  author: hamforge
---

# GitHub Release Review

This workflow is read-only. It does not authorize implementation, planning changes, merging, tagging, releases, or publication.

## GitHub Prerequisite

Verify `gh` is installed, confirm authentication with `gh auth status`, and resolve the repository from the working checkout with `gh repo view`. Use `gh` to inspect milestones, issues, pull requests, checks, tags, and releases. If access fails, report the prerequisite without switching interfaces.

## Inspect

1. Project release and versioning instructions.
2. The current release milestone and its intended outcome; unless overridden, use the earliest planned release milestone with unfinished work.
3. Open and closed milestone issues and completion progress.
4. Open `priority:current` issues.
5. Dependencies, unresolved blockers, and required investigations.
6. Relevant pull requests, reviews, checks, and merge state.
7. Changelog or generated release-note conventions and durable shipped outcomes.
8. Existing tags and releases when relevant.

If the project does not use milestones for releases, follow its explicit model. Do not invent a release date or silently create missing planning state.

## Return

Use these sections where relevant:

- **Release Scope** — intended outcome and milestone or project release context
- **Included Issues / Pull Requests** — completed and pending work in scope
- **Open or Missing Work** — unresolved issues, dependencies, reviews, or artifacts
- **CI / Required Checks** — current check state and required verification
- **Changelog and Release Notes** — readiness under the repository's existing convention
- **Compatibility / Dependency Concerns** — supported versions, dependency changes, or upgrade risk
- **Risks** — remaining release uncertainty
- **Release Readiness** — exactly `Ready`, `Ready with minor follow-up`, or `Blocked`, with rationale
- **Recommended Next Actions** — concise ordered actions needed from the current state

Adapt or omit irrelevant sections, but always include **Release Readiness**.

Do not create a release or tag, merge changes, edit milestones, or mutate repository state.

## Anti-patterns

- changing issues, milestones, priorities, or pull requests during review
- treating green checks alone as release readiness
- creating a tag, release, or published artifact
- assuming documentation is current without checking live GitHub state

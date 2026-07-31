---
name: github-workflow
description: >
  Apply a small, repository-aware GitHub workflow while developing Laravel
  applications. Use for branches, commits, pull requests, issues, labels,
  changelogs, Dependabot, releases, versioning, repository hygiene, and
  deciding whether GitHub Actions are justified.
license: MIT
metadata:
  author: hamforge
---

# GitHub Workflow

Use this skill for GitHub-specific workflow decisions during Laravel development.
Use Laravel Boost and project guidance for implementation, architecture, testing, and product rules.

## Primary Goal

- make the smallest GitHub change that supports the requested development work
- follow repository conventions before introducing new workflow policy
- keep planning, implementation, review, and release state distinct

## Workflow

### 1. Inspect repository context

- read repository instructions and inspect available conventions before introducing or recommending workflow policy
- inspect relevant files under `.github/`, including workflows, issue templates, pull request templates, and Dependabot configuration when present
- inspect `CONTRIBUTING.md`, `SECURITY.md`, existing labels, and release or versioning conventions when available
- inspect the current branch, working tree, and relevant issues or pull requests
- treat repository-specific instructions as authoritative
- inspect live GitHub state when access is available instead of assuming that labels, issues, pull requests, releases, or repository settings are current
- use any suitable available GitHub access mechanism; this skill does not require a particular CLI or connector

### 2. Classify the task

- decide whether the request is read-only inspection, planning, implementation, review, or release work
- do not treat issue creation, issue assignment, or roadmap placement as authorization to implement
- treat normal local mechanics, such as creating an appropriate working branch, as part of an authorized implementation workflow when repository conventions support them
- require explicit authorization before meaningful remote mutations, including creating or modifying issues, pull requests, labels, releases, milestones, assignments, merges, repository settings, or published artifacts
- keep unrelated discoveries outside the current scope and report them separately

### 3. Read the relevant guidance

- read `references/contributions.md` for branches, commits, pull requests, and checks
- read `references/issues-and-labels.md` for issues, scope, and labels
- read `references/maintenance-and-releases.md` for changelogs, Dependabot, releases, hygiene, and GitHub Actions
- read only the references needed for the task

### 4. Execute and verify

- prefer one focused unit of work that is easy to review and revert
- use existing repository scripts and required checks
- report what changed, verification performed, and any genuine remaining risk
- close issues, merge pull requests, tag releases, or publish artifacts only when explicitly authorized

## Rules, References, and Templates

Read before executing:

- `references/contributions.md`
- `references/issues-and-labels.md`
- `references/maintenance-and-releases.md`

## Examples

- a bug fix gets a concise branch, a focused commit, and a pull request that explains behavior and verification
- a requested issue is checked for duplicates, scoped around one outcome, and labelled using the repository's existing labels
- a Dependabot pull request is reviewed from its manifest and lockfile changes, compatibility impact, and passing checks
- a release updates durable release notes, verifies the intended version, and avoids unrelated workflow changes

## Anti-patterns

- inventing branch prefixes, label taxonomies, milestones, or release processes without repository evidence
- creating an issue and then implementing it without implementation authorization
- bundling unrelated changes into one issue, commit, or pull request
- adding GitHub Actions for tasks that are simpler to run locally or are not merge or release gates
- duplicating Laravel development guidance already supplied by Laravel Boost

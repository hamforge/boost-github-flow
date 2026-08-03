---
name: github-implement-issue
description: >
  Implement exactly one explicitly selected numbered GitHub issue. Use when
  asked to build or fix an understood issue within its documented scope.
license: MIT
metadata:
  author: hamforge
---

# GitHub Implement Issue

Require an issue number. Invoking this skill authorizes local implementation of that issue, including normal mechanics such as creating an appropriate working branch. It does not authorize unrelated GitHub mutations, issue creation, pull-request creation, merging, or release publication.

## GitHub Prerequisite

Verify `gh` is installed, confirm authentication with `gh auth status`, resolve the repository from the working checkout with `gh repo view`, then use `gh issue view` to confirm the issue exists and is open. If access fails, report the prerequisite and stop rather than switching interfaces.

## Before Editing

1. Read the complete Goal, Context, Scope, Acceptance Criteria, Out of Scope, Dependencies, and Verification sections that exist.
2. Read project instructions and relevant architecture or durable documentation.
3. Verify blocking dependencies and related pull requests using live GitHub state.
4. Stop and report any unresolved blocking dependency.
5. Investigate first when meaningful architecture, risk, or decisions remain unresolved.

## Implement

- Implement only the selected issue.
- Follow the repository's branch, code, test, formatting, static-analysis, and manual-QA conventions.
- Do not start adjacent issues, promote Parking Lot work, implement future releases early, or silently alter labels, milestone, priority, assignment, or issue state.
- Report unrelated discoveries without fixing them or creating follow-up issues.
- Run focused checks while iterating and all required checks before handoff.

## Return

Use these sections where relevant:

- **What Changed** — concise implementation outcome
- **Files Created** — new files; omit when none
- **Files Modified** — changed files
- **Architecture / Behaviour Notes** — meaningful design or observable behavior details
- **Acceptance Criteria** — criterion-by-criterion verified status
- **Verification** — commands run and results
- **Manual QA** — only when relevant
- **Risks / Follow-Up** — genuine remaining risks or omissions; omit when none

Do not create a pull request, close the issue, publish a release, or create unrelated follow-up issues unless separately authorized. Mark a criterion complete only when verified.

## Anti-patterns

- implementing without reading the complete issue
- continuing past an unresolved dependency
- expanding scope because adjacent improvements are convenient
- changing roadmap state or publishing work without authorization

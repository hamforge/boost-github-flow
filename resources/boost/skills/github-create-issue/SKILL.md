---
name: github-create-issue
description: >
  Turn a reasonably understood request into one properly scoped GitHub issue
  without implementing it. Use to determine scope, acceptance criteria,
  exclusions, dependencies, verification, labels, and milestone placement.
license: MIT
metadata:
  author: hamforge
---

# GitHub Create Issue

This invocation authorizes creating the requested issue. It does not authorize implementation, reprioritization beyond the request, or unrelated GitHub changes.

## GitHub Prerequisite

Verify `gh` is installed, confirm authentication with `gh auth status`, resolve the repository from the working checkout with `gh repo view`, and use first-class `gh` commands for live issues, labels, milestones, and pull requests. Do not hard-code a repository or silently switch interfaces if access fails.

## Before Writing

1. Treat the remaining prompt as the requested work; ask when absent.
2. Inspect existing open and closed milestones and their purposes.
3. Search open and closed issues for duplicates or substantial overlap.
4. Inspect related open pull requests and relevant release state.
5. Read project or product guidance only as needed to check boundaries and non-goals.
6. Decide whether the work is executable, where it belongs, and whether dependencies block it.

Return an equivalent existing issue without commenting on or modifying it. Do not create work that contradicts an explicit project boundary.

Prefer one issue mapping to one coherent reviewable change. If the request needs multiple independently deliverable issues, propose a split or route to `$github-plan-roadmap`; create multiple issues only when explicitly requested.

## Actionable Issue

Prefer an existing appropriate milestone. Use this structure where applicable:

```markdown
## Goal

## Context

## Scope

## Acceptance Criteria

## Out of Scope

## Dependencies

## Verification
```

Use checkboxes for verifiable acceptance criteria. Reference known issue dependencies. Include automated checks and manual QA only when relevant.

Reuse existing non-workflow labels. Do not invent a taxonomy. Apply `priority:current` only when the request authorizes immediate priority or reprioritization. If a required hamforge workflow label is missing, report it rather than substituting another.

When valid work is intentionally unscheduled, use `$github-capture-idea` semantics: `status:parking-lot`, no milestone, no `priority:current`, and a lightweight idea body.

## Return

Report:

- **Issue** — number, title, and URL when available
- **Scope Summary** — the intended outcome and main boundary
- **Labels** — labels applied
- **Milestone** — assigned milestone or `None`
- **Dependencies** — known dependencies or `None`
- **Placement** — why the issue belongs in that milestone or remains unscheduled
- **Implementation Status** — explicitly confirm that implementation has not begun

If no issue is created, return the duplicate, boundary, or missing-information outcome without empty sections.

## Anti-patterns

- creating a duplicate or giant multi-outcome issue
- forcing uncertain work into a release
- inventing a milestone, label taxonomy, or release date without need
- applying `priority:current` merely because an issue was created
- beginning implementation

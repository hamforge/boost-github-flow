---
name: github-plan-roadmap
description: >
  Propose how a larger idea or multi-issue feature fits the GitHub roadmap,
  then apply that exact proposal only after explicit follow-up authorization.
  Use for release planning, milestone structure, or Parking Lot promotion.
license: MIT
metadata:
  author: hamforge
---

# GitHub Plan Roadmap

## GitHub Prerequisite

Verify `gh` is installed, confirm authentication with `gh auth status`, and resolve the repository from the working checkout with `gh repo view`. Use `gh` for live milestones, issues, labels, and pull requests. Do not hard-code a repository or switch interfaces when access fails.

## Proposal Mode

Default to a read-only proposal. An idea description authorizes analysis, not GitHub mutations.

Inspect:

1. relevant open and closed milestones
2. related current and future issues
3. `status:parking-lot` issues that could be promoted instead of duplicated
4. durable project direction, decisions, and non-goals where available
5. architecture only as much as necessary
6. dependencies, duplicates, overlap, and relevant pull requests

Prefer existing appropriate milestones and existing Parking Lot issues. Recommend a new milestone only for a coherent release outcome that does not fit the current roadmap. Do not invent a release date.

Keep distant work broad. Do not prematurely decide schemas, providers, APIs, migrations, permissions, or implementation internals unless durable project decisions already establish them.

Return a proposal with:

- **Current State** — relevant milestones, issues, Parking Lot items, and constraints
- **Proposed Changes** — issues or milestones to create, update, promote, or leave unchanged
- **Ordering and Dependencies** — recommended sequence and blockers
- **Assumptions** — facts that remain uncertain
- **Decisions Requiring Approval** — the exact choices and mutations needing authorization
- **Recommended Action** — exactly one of:
  - `Create the proposed roadmap`
  - `Keep the idea in Parking Lot`
  - `Merge with existing issue(s)`
  - `Do not pursue under current project direction`

Then stop without changing GitHub.

## Apply Mode

Apply only after explicit follow-up approval of the proposal. Restate the exact authorized mutations and verify they still fit live GitHub state.

Use `gh` only for those mutations. When promoting a Parking Lot issue, reuse it, remove `status:parking-lot`, assign the approved milestone, preserve useful context, and expand it into actionable scope when needed. Apply `priority:current` only when separately included in the approval.

Return an apply report with:

- **Mutations Made** — every authorized GitHub change performed
- **Issues Created or Updated** — issue numbers, titles, and URLs when available
- **Milestone Changes** — milestones created or assignments changed
- **Labels and Dependencies** — labels, ordering, and dependency relationships applied
- **Deliberately Unchanged** — proposed or discovered state left untouched, with reasons
- **Not Applied** — any approved mutation that could not be completed

Omit sections that genuinely have nothing to report. Do not implement code.

## Anti-patterns

- mutating GitHub during the initial proposal
- duplicating a promotable Parking Lot issue
- inventing release dates or unnecessary milestones
- treating roadmap approval as implementation authorization

---
name: github-next-issue
description: >
  Inspect the live GitHub roadmap and recommend exactly one issue to work on
  next. Use for current-priority selection or returning to a project without
  starting implementation.
license: MIT
metadata:
  author: hamforge
---

# GitHub Next Issue

This workflow is read-only. Selection does not authorize implementation or GitHub mutations.

## GitHub Prerequisite

Verify `gh` is installed, confirm authentication with `gh auth status`, and resolve the repository from the working checkout with `gh repo view`. If access fails, report the prerequisite and stop without switching interfaces.

## Inspect

1. Open milestones and their purposes; unless project guidance says otherwise, treat the earliest planned release with unfinished work as the current release.
2. Open issues in the current release.
3. Open issues carrying `priority:current`.
4. Complete issue bodies, dependencies, investigations, and obvious blockers.
5. Relevant open pull requests and their state.

If `priority:current` is missing from the repository, report the missing hamforge workflow label rather than inventing another priority system.

Treat future-milestone work and `status:parking-lot` ideas as context, not current implementation candidates. A Parking Lot issue must be promoted before it becomes scheduled work.

## Return

Return exactly one recommendation with:

- **Issue** — number and title
- **Why Next** — why it is the best current choice
- **Priority and Milestone** — `priority:current` and release context
- **Dependencies and Blockers** — resolved, clear, or blocked state
- **Investigation** — whether `$github-investigate-issue` is recommended first and why
- **Next Skill** — the exact `$github-investigate-issue` or `$github-implement-issue` invocation to use

Do not return a long unordered backlog unless explicitly requested.

Do not modify files, GitHub state, branches, or commits.

## Anti-patterns

- recommending multiple primary issues
- selecting a blocked issue without naming the blocker
- treating a recommendation as implementation authorization
- moving labels, milestones, or Parking Lot state

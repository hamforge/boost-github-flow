# Issues and Labels

## Workflow State

- Issues represent planned work; they do not authorize implementation.
- Pull requests represent reviewed changes.
- Milestones are the default representation of planned releases when project guidance does not say otherwise.
- Changelogs record shipped outcomes, not live planning.
- `priority:current` identifies the immediate working set.
- `status:parking-lot` identifies unscheduled ideas. Parking Lot issues normally have no milestone and must not also carry `priority:current`.

These are hamforge defaults. Explicit project workflow instructions override them. Repository discovery supplies contextual facts; it does not reinvent the workflow.

## Issue Scope

- Search open and closed issues before creating work.
- Prefer one issue mapping to one coherent, reviewable change and one pull request.
- Actionable issues normally describe Goal, Context, Scope, Acceptance Criteria, Out of Scope, Dependencies, and Verification.
- Parking Lot ideas stay lightweight until promoted.
- Verify dependencies before implementation and stop on unresolved blockers.
- Report adjacent discoveries rather than silently expanding scope or creating follow-up issues.

## Labels and Planning

- Use `priority:current` and `status:parking-lot` with the meanings above.
- If either required label is missing, report it; do not silently substitute another label.
- Reuse the repository's existing taxonomy for other labels such as bug, enhancement, documentation, dependencies, maintenance, or area labels.
- Prefer an existing appropriate milestone and existing Parking Lot issue over creating duplicates.
- Do not invent release dates or a broad label taxonomy.

Meaningful GitHub mutations require authorization. Explicit invocation of a task skill authorizes the action that skill describes, but never adjacent actions.

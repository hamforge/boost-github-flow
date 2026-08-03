---
name: github-capture-idea
description: >
  Capture a lightweight future idea as an unscheduled GitHub Parking Lot issue
  without implementing it. Use to save an idea for later without scheduling
  detailed executable work.
license: MIT
metadata:
  author: hamforge
---

# GitHub Capture Idea

This invocation authorizes creating the requested Parking Lot issue. It does not authorize implementation or other planning mutations.

## GitHub Prerequisite

Verify `gh` is installed and authenticated with `gh auth status`. Resolve the current repository from the working checkout with `gh repo view`; never hard-code it. Use first-class `gh` commands unless `gh api` is genuinely required.

If access fails, report the prerequisite and stop without switching interfaces.

## Workflow

1. Treat the remaining prompt as the idea; ask for it if absent.
2. Search open and closed issues for duplicates or substantially equivalent ideas.
3. Inspect durable project or product guidance only as needed to respect documented boundaries and non-goals.
4. Avoid broad architecture investigation.
5. Verify the `status:parking-lot` label exists. Report the missing hamforge convention instead of substituting another label.

If an equivalent issue exists, do not modify it. Return its number, title, state, milestone, URL, and the overlap.

If the idea conflicts with an explicit project boundary, do not create it. Explain which durable decision must change first.

Otherwise create one issue with:

- `status:parking-lot`
- no milestone
- no `priority:current`
- an existing idea-type label such as `enhancement` only when the repository taxonomy supports it

Use this lightweight body:

```markdown
## Idea

## Potential Value

## Why It Is Not Scheduled

## Promotion Requirement

> Creating this issue does not authorize implementation.
```

Do not add executable acceptance criteria or begin implementation.

## Return

Report:

- **Idea** — a concise summary of what was captured
- **Issue** — created or existing issue number, title, and URL when available
- **Labels** — labels applied or already present
- **Milestone** — normally `None`
- **Why Unscheduled** — why the idea remains in the Parking Lot
- **Promotion Requirement** — evidence, decision, or clarification needed before scheduling

If a duplicate or project boundary prevents creation, adapt the response to explain that outcome rather than including empty sections.

## Anti-patterns

- assigning a milestone or `priority:current`
- turning a loose idea into premature implementation design
- creating a duplicate instead of returning the existing issue
- implementing or promoting the idea

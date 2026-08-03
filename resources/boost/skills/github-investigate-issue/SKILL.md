---
name: github-investigate-issue
description: >
  Investigate one numbered GitHub issue without implementing it. Use for
  architecture, existing behavior, options, risks, decisions, sequencing, or
  verification planning before implementation.
license: MIT
metadata:
  author: hamforge
---

# GitHub Investigate Issue

Require an issue number. This invocation authorizes read-only investigation, not implementation or GitHub mutation.

## GitHub Prerequisite

Verify `gh` is installed, confirm authentication with `gh auth status`, resolve the repository from the working checkout with `gh repo view`, and read the complete issue with `gh issue view`. If access fails, report the prerequisite without switching interfaces.

## Investigate

1. Inspect issue metadata, goal, scope, acceptance criteria, exclusions, dependencies, and verification requirements.
2. Inspect repository instructions, architecture, implementation, tests, and durable documentation relevant to the issue.
3. Verify dependency and related pull-request state with live GitHub data.
4. Compare current behavior with the requested outcome.
5. Recommend the smallest coherent approach and identify meaningful alternatives, risks, decisions, and verification.

Investigate larger or riskier work before implementation when appropriate, including unclear existing behavior, permissions, external integrations, infrastructure, substantial data changes, or cross-boundary architecture.

## Return

Use these sections where relevant:

- **Issue Summary** — number, title, milestone, labels, goal, and scope
- **Current Architecture** — the relevant boundaries and responsibilities
- **Relevant Files** — concrete implementation and test locations
- **Existing Behaviour** — what exists and what is missing
- **Recommended Approach** — the smallest coherent implementation direction
- **Alternatives Considered** — meaningful options and why they are not preferred
- **Risks** — edge cases, compatibility concerns, and unresolved uncertainty
- **Decisions Required** — choices needed before implementation; say explicitly when none are required
- **Proposed Implementation Sequence** — ordered implementation steps
- **Verification Strategy** — automated checks and relevant manual QA

Adapt or omit sections that are genuinely irrelevant.

Leave production code and GitHub state unchanged. Do not edit the issue unless explicitly asked. Temporary local inspection must not leave repository changes.

## Anti-patterns

- implementing while investigating
- rewriting the issue or changing its planning state
- treating every issue as requiring investigation
- inventing project architecture not supported by repository evidence

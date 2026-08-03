# Contributions

Use this reference for branches, commits, pull requests, and checks under hamforge's workflow defaults.

## Branches

- Inspect the repository's default branch and local instructions before creating a branch.
- When implementation is authorized, create an appropriate local working branch when that is a normal repository convention; separate authorization is not needed for this routine local mechanic.
- Use a short, descriptive name. Include an issue number only when the repository already does so.
- Do not mix unrelated work or silently move the user's existing changes.
- Avoid long-lived branches unless the repository has an established reason for them.

## Commits

- Keep each commit coherent and leave the repository in a useful state.
- Follow the repository's commit convention when one exists; otherwise use a concise imperative subject.
- Explain why when the reason is not evident from the diff.
- Reference an issue when useful and supported by the repository convention.
- Do not rewrite, squash, amend, or force-push commits without authorization when that could disrupt shared work.
- Never commit generated files, secrets, local state, or unrelated formatting by accident.

## Pull Requests

- Keep a pull request focused on one issue or one tightly related outcome.
- Describe the problem, the chosen change, verification, and material risks or follow-up.
- Link the relevant issue when one exists. Use closing keywords only when merging really should close it.
- Review the complete diff and confirm required checks before requesting review.
- Treat reviewer feedback as work on the same scope; separate unrelated requests.
- Explicitly invoking a workflow that creates or edits a pull request authorizes that described action. Merging, closing, or expanding its scope remains separate authorization.

## Checks

- Prefer repository-provided Composer scripts and documented QA commands.
- Run focused checks while iterating and the required full checks before handoff.
- Report skipped or failing checks accurately; never imply that a check ran when it did not.
- Do not weaken checks to make a pull request pass unless changing the check is itself justified and in scope.

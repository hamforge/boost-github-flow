<?php

declare(strict_types=1);

use Hamforge\GithubWorkflow\GithubWorkflow;

it('resolves the singleton', function () {
    expect(app(GithubWorkflow::class))->toBeInstanceOf(GithubWorkflow::class);
});

it('returns the same instance from the container', function () {
    expect(app(GithubWorkflow::class))->toBe(app(GithubWorkflow::class));
});

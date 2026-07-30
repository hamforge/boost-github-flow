<?php

declare(strict_types=1);

namespace Hamforge\GithubWorkflow\Tests;

use Hamforge\GithubWorkflow\GithubWorkflowServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            GithubWorkflowServiceProvider::class,
        ];
    }
}

<?php

declare(strict_types=1);

use Symfony\Component\Yaml\Yaml;

function bundledSkillsPath(): string
{
    return dirname(__DIR__, 2).'/resources/boost/skills';
}

/**
 * @return list<string>
 */
function expectedGithubSkills(): array
{
    return [
        'github-workflow',
        'github-capture-idea',
        'github-create-issue',
        'github-plan-roadmap',
        'github-next-issue',
        'github-investigate-issue',
        'github-implement-issue',
        'github-release-review',
    ];
}

it('bundles every GitHub workflow skill with consistent skill metadata', function () {
    foreach (expectedGithubSkills() as $name) {
        $skill = file_get_contents(bundledSkillsPath().'/'.$name.'/SKILL.md');

        expect($skill)
            ->not->toBeFalse()
            ->and($skill)->toMatch('/^name:\s*'.preg_quote($name, '/').'\s*$/m')
            ->and($skill)->toMatch('/^license:\s*MIT\s*$/m')
            ->and($skill)->toMatch('/^\s*author:\s*hamforge\s*$/m');
    }
});

it('bundles valid and consistent OpenAI metadata for every skill', function () {
    foreach (expectedGithubSkills() as $name) {
        $metadataPath = bundledSkillsPath().'/'.$name.'/agents/openai.yaml';

        expect($metadataPath)->toBeFile();

        $metadata = Yaml::parseFile($metadataPath);

        expect($metadata)->toBeArray()
            ->toHaveKeys(['interface'])
            ->and(array_keys($metadata))->toBe(['interface'])
            ->and($metadata['interface'])->toBeArray()
            ->toHaveKeys(['display_name', 'short_description', 'default_prompt'])
            ->and(array_keys($metadata['interface']))->toBe([
                'display_name',
                'short_description',
                'default_prompt',
            ])
            ->and($metadata['interface']['display_name'])->toBeString()->not->toBeEmpty()
            ->and($metadata['interface']['short_description'])->toBeString()->not->toBeEmpty()
            ->and($metadata['interface']['default_prompt'])->toBeString()
            ->toContain('$'.$name);
    }
});

it('bundles the doctrine references used by the workflow router', function () {
    $referencesPath = bundledSkillsPath().'/github-workflow/references';

    expect($referencesPath.'/contributions.md')->toBeFile()
        ->and($referencesPath.'/issues-and-labels.md')->toBeFile()
        ->and($referencesPath.'/maintenance-and-releases.md')->toBeFile();
});

it('does not leak RankForge identity or incorrectly case hamforge branding', function () {
    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator(bundledSkillsPath(), FilesystemIterator::SKIP_DOTS),
    );

    foreach ($files as $file) {
        if (! $file->isFile()) {
            continue;
        }

        $contents = (string) file_get_contents($file->getPathname());

        expect(strtolower($contents))
            ->not->toContain('rankforge')
            ->and($contents)->not->toContain('HamForge')
            ->and($contents)->not->toContain('Hamforge');
    }
});

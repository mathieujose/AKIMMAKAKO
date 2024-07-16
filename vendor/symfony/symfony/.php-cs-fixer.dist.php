<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!file_exists(__DIR__.'/src')) {
    exit(0);
}

$fileHeaderComment = <<<'EOF'
This file is part of the Symfony package.

(c) Fabien Potencier <fabien@symfony.com>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

return (new PhpCsFixer\Config())
    ->setRules([
        '@PHP71Migration' => true,
        '@PHPUnit75Migration:risky' => true,
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'protected_to_private' => false,
        'native_constant_invocation' => ['strict' => false],
        'nullable_type_declaration_for_default_null_value' => ['use_nullable_type_declaration' => false],
        'header_comment' => ['header' => $fileHeaderComment],
    ])
    ->setRiskyAllowed(true)
    ->setFinder(
        (new PhpCsFixer\Finder())
            ->in(__DIR__.'/src')
            ->append([__FILE__])
            ->notPath('#/Fixtures/#')
            ->exclude([
                // directories containing files with content that is autogenerated by `var_export`, which breaks CS in output code
                // fixture templates
                'Symfony/Bundle/FrameworkBundle/Tests/Templating/Helper/Resources/Custom',
                // resource templates
                'Symfony/Bundle/FrameworkBundle/Resources/views/Form',
                // explicit trigger_error tests
                'Symfony/Bridge/PhpUnit/Tests/DeprecationErrorHandler/',
            ])
            // Support for older PHPunit version
            ->notPath('Symfony/Bridge/PhpUnit/SymfonyTestsListener.php')
            ->notPath('#Symfony/Bridge/PhpUnit/.*Mock\.php#')
            ->notPath('#Symfony/Bridge/PhpUnit/.*Legacy#')
            // file content autogenerated by `var_export`
            ->notPath('Symfony/Component/Translation/Tests/fixtures/resources.php')
            // test template
            ->notPath('Symfony/Bundle/FrameworkBundle/Tests/Templating/Helper/Resources/Custom/_name_entry_label.html.php')
            // explicit trigger_error tests
            ->notPath('Symfony/Component/Debug/Tests/DebugClassLoaderTest.php')
            ->notPath('Symfony/Component/ErrorHandler/Tests/DebugClassLoaderTest.php')
    )
    ->setCacheFile('.php-cs-fixer.cache')
;

<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude('vendor');

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setFinder($finder)
    ->setRules([
        '@PSR12' => true, 
        'no_unused_imports' => true,
        'no_empty_comment' => true,
        'no_comments' => true, 
        'no_trailing_whitespace' => true,
        'single_blank_line_at_eof' => true,
        'blank_line_after_namespace' => true,
        'ordered_imports' => ['sort_algorithm' => 'alpha'],
        'no_superfluous_phpdoc_tags' => true,
        'phpdoc_no_empty_return' => true,
        'phpdoc_trim' => true,
        'phpdoc_indent' => true,
        'phpdoc_align' => ['align' => 'left'],
        'simplified_null_return' => false,
        'method_argument_space' => ['on_multiline' => 'ensure_fully_multiline'],
        'array_syntax' => ['syntax' => 'short'],
        'binary_operator_spaces' => ['default' => 'align_single_space_minimal'],
        'cast_spaces' => ['space' => 'none'],
        'no_closing_tag' => true,
        'return_type_declaration' => ['space_before' => 'none'],
        'visibility_required' => ['elements' => ['property', 'method', 'const']],
        'no_extra_blank_lines' => ['tokens' => [
            'extra',
            'throw',
            'use',
            'use_trait',
            'return',
            'continue',
            'break',
            'curly_brace_block',
            'parenthesis_brace_block',
        ]],
    ]);

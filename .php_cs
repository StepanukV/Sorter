<?php

$header = <<<HEADER
This file is part of the "Sort array lib" package.

(c) Stepanuk Vasiliy rayzer1423@gmail.com

HEADER;

$finder = \PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/src')
    ->exclude('docs')
;

return \PhpCsFixer\Config::create()
    ->setCacheFile(__DIR__ . '/php_cs.cache')
    ->setRules([
        '@PSR2' => true,
        'header_comment' => [
            'header' => $header,
            'commentType' => 'comment',
            'separate' => 'both',
        ],


    ])
    ->setFinder($finder)
;

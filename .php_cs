<?php

$header = <<<EOF
(link)  https://www.huangxiaomin.com
(c) xiaomin<keacefull@gmail.com>
This source file is subject to the MIT license that is bundled
with this source code in the file LICENSE.
EOF;
return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules(array(
        '@Symfony' => true,
        'header_comment' => array('header' => $header),
        'array_syntax' => array('syntax' => 'short'),
        'ordered_imports' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'php_unit_construct' => true,
        'php_unit_strict' => true,
        'yoda_style' => false,
    ))
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('vendor')
            ->in(__DIR__)
    )
;
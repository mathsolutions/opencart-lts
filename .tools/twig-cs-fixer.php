<?php

$finder = new TwigCsFixer\File\Finder();
$finder->in(__DIR__ . '/../upload/');
//$finder->exclude('myCustomDirectory');

// Basic Twig standard
$ruleset = new TwigCsFixer\Ruleset\Ruleset();
$ruleset->addStandard(new TwigCsFixer\Standard\TwigCsFixer());

$config = new TwigCsFixer\Config\Config();
$config->setCacheFile(__DIR__.'/.cache/twig-cs-fixer.cache');
$config->setFinder($finder);
$config->setRuleset($ruleset);

return $config;

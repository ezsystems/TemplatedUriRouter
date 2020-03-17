<?php

namespace Hautelook\TemplatedUriRouter\Routing\Generator;

if (class_exists('Symfony\Component\Routing\Generator\CompiledUrlGenerator')) {
    abstract class BcUrlGenerator extends \Symfony\Component\Routing\Generator\CompiledUrlGenerator
    {
    }
} else {
    abstract class BcUrlGenerator extends \Symfony\Component\Routing\Generator\UrlGenerator
    {
    }
}

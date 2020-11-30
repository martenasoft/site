<?php

namespace MartenaSoft\Site;

use MartenaSoft\Common\CommonMartenaSoftBundleInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class MartenaSoftSiteBundle extends Bundle implements CommonMartenaSoftBundleInterface
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container); // TODO: Change the autogenerated stub
    }

    public static function getConfigName(): string
    {
        return 'martena_soft_site';
    }
}

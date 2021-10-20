<?php declare(strict_types=1);

/**
 * This file is a part of sebk/swoft-json-response
 * Copyright 2021 - Sébastien Kus
 * Under GNU GPL V3 licence
 */

namespace Sebk\JsonResponse;


use Sebk\SmallOrmCore\Database\SwoftPool;
use Sebk\SmallOrmSwoft\Compatibility\SymfonyKernel;
use Sebk\SmallOrmSWoft\Factory\Dao;
use Sebk\SmallOrmSwoft\Factory\Validator;
use Sebk\SmallOrmSWoft\Generator\DaoGenerator;
use Sebk\SmallOrmSwoft\Factory\Connections;
use Sebk\SmallOrmSwoft\Layers\Layers;
use Swoft\Bean\Container;
use Swoft\Helper\ComposerJSON;
use function bean;
use PDO;
use Swoft\SwoftComponent;

/**
 * Class AutoLoader
 *
 * @since 2.0
 */
class AutoLoader extends SwoftComponent
{
    /**
     * @return array
     */
    public function getPrefixDirs(): array
    {
        return [
            __NAMESPACE__ => __DIR__,
        ];
    }

    /**
     * Metadata information for the component.
     *
     * @return array
     * @see ComponentInterface::getMetadata()
     */
    public function metadata(): array
    {
        $jsonFile = dirname(__DIR__) . '/composer.json';

        return ComposerJSON::open($jsonFile)->getMetadata();
    }
}

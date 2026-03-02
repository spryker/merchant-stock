<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MerchantStock;

use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;
use Spryker\Zed\MerchantStock\Dependency\Facade\MerchantStockToStockFacadeBridge;

/**
 * @method \Spryker\Zed\MerchantStock\MerchantStockConfig getConfig()
 */
class MerchantStockDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @var string
     */
    public const FACADE_STOCK = 'FACADE_STOCK';

    public function provideBusinessLayerDependencies(Container $container): Container
    {
        $container = parent::provideBusinessLayerDependencies($container);

        $container = $this->addStockFacade($container);

        return $container;
    }

    protected function addStockFacade(Container $container): Container
    {
        $container->set(static::FACADE_STOCK, function (Container $container) {
            return new MerchantStockToStockFacadeBridge(
                $container->getLocator()->stock()->facade(),
            );
        });

        return $container;
    }
}

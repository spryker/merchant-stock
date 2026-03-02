<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MerchantStock\Persistence;

use Orm\Zed\MerchantStock\Persistence\SpyMerchantStockQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;
use Spryker\Zed\MerchantStock\Persistence\Mapper\MerchantStockMapper;
use Spryker\Zed\MerchantStock\Persistence\Mapper\StockStoreRelationMapper;

/**
 * @method \Spryker\Zed\MerchantStock\Persistence\MerchantStockEntityManagerInterface getEntityManager()
 * @method \Spryker\Zed\MerchantStock\Persistence\MerchantStockRepositoryInterface getRepository()
 * @method \Spryker\Zed\MerchantStock\MerchantStockConfig getConfig()
 */
class MerchantStockPersistenceFactory extends AbstractPersistenceFactory
{
    public function createMerchantStockPropelQuery(): SpyMerchantStockQuery
    {
        return SpyMerchantStockQuery::create();
    }

    public function createMerchantStockMapper(): MerchantStockMapper
    {
        return new MerchantStockMapper($this->createStockStoreRelationMapper());
    }

    public function createStockStoreRelationMapper(): StockStoreRelationMapper
    {
        return new StockStoreRelationMapper();
    }
}

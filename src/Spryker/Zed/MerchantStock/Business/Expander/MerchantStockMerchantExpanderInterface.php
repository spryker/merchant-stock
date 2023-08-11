<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MerchantStock\Business\Expander;

use Generated\Shared\Transfer\MerchantCollectionTransfer;

interface MerchantStockMerchantExpanderInterface
{
    /**
     * @param \Generated\Shared\Transfer\MerchantCollectionTransfer $merchantCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\MerchantCollectionTransfer
     */
    public function expand(MerchantCollectionTransfer $merchantCollectionTransfer): MerchantCollectionTransfer;
}

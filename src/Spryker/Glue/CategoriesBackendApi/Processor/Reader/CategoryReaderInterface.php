<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\CategoriesBackendApi\Processor\Reader;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;

interface CategoryReaderInterface
{
    public function getCategory(GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer;

    public function getCategoryCollection(GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer;
}

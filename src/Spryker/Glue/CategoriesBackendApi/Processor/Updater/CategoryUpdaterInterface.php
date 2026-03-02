<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\CategoriesBackendApi\Processor\Updater;

use Generated\Shared\Transfer\CategoriesBackendApiAttributesTransfer;
use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;

interface CategoryUpdaterInterface
{
    public function updateCategory(
        CategoriesBackendApiAttributesTransfer $categoriesBackendApiAttributesTransfer,
        GlueRequestTransfer $glueRequestTransfer
    ): GlueResponseTransfer;
}

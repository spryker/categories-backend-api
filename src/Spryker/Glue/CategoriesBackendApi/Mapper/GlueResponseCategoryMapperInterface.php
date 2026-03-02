<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\CategoriesBackendApi\Mapper;

use Generated\Shared\Transfer\CategoryCollectionResponseTransfer;
use Generated\Shared\Transfer\CategoryCollectionTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;

interface GlueResponseCategoryMapperInterface
{
    public function mapCategoryCollectionTransferToGlueResponseTransfer(
        CategoryCollectionTransfer $categoryCollectionTransfer
    ): GlueResponseTransfer;

    public function mapCategoryCollectionTransferToSingleResourceGlueResponseTransfer(
        CategoryCollectionTransfer $categoryCollectionTransfer
    ): GlueResponseTransfer;

    public function mapCategoryCollectionResponseTransferToGlueResponseTransfer(
        CategoryCollectionResponseTransfer $categoryCollectionResponseTransfer
    ): GlueResponseTransfer;

    public function mapCategoryCollectionResponseTransferToSingleResourceGlueResponseTransfer(
        CategoryCollectionResponseTransfer $categoryCollectionResponseTransfer
    ): GlueResponseTransfer;
}

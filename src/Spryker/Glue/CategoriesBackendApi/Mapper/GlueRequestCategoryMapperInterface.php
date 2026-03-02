<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\CategoriesBackendApi\Mapper;

use Generated\Shared\Transfer\CategoryCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\CategoryCollectionRequestTransfer;
use Generated\Shared\Transfer\CategoryCriteriaTransfer;
use Generated\Shared\Transfer\CategoryTransfer;
use Generated\Shared\Transfer\GlueRequestTransfer;

interface GlueRequestCategoryMapperInterface
{
    public function mapGlueRequestTransferToCategoryCriteriaTransfer(
        GlueRequestTransfer $glueRequestTransfer
    ): CategoryCriteriaTransfer;

    public function mapGlueRequestTransferToCategoryCollectionDeleteCriteriaTransfer(
        GlueRequestTransfer $glueRequestTransfer
    ): CategoryCollectionDeleteCriteriaTransfer;

    public function mapGlueGetRequestToCategoryCriteriaTransfer(
        GlueRequestTransfer $glueRequestTransfer
    ): CategoryCriteriaTransfer;

    public function mapGlueRequestToCategoryCollectionDeleteCriteriaTransfer(
        GlueRequestTransfer $glueRequestTransfer
    ): CategoryCollectionDeleteCriteriaTransfer;

    public function mapGlueRequestToCategoryCollectionRequestTransfer(
        CategoryTransfer $categoryTransfer,
        GlueRequestTransfer $glueRequestTransfer
    ): CategoryCollectionRequestTransfer;

    public function mapGlueGetCollectionRequestToCategoryCriteriaTransfer(
        GlueRequestTransfer $glueRequestTransfer
    ): CategoryCriteriaTransfer;
}

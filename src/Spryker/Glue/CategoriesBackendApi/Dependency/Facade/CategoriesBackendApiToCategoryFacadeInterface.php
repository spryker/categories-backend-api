<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\CategoriesBackendApi\Dependency\Facade;

use Generated\Shared\Transfer\CategoryCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\CategoryCollectionRequestTransfer;
use Generated\Shared\Transfer\CategoryCollectionResponseTransfer;
use Generated\Shared\Transfer\CategoryCollectionTransfer;
use Generated\Shared\Transfer\CategoryCriteriaTransfer;

interface CategoriesBackendApiToCategoryFacadeInterface
{
    public function getCategoryCollection(CategoryCriteriaTransfer $categoryCriteriaTransfer): CategoryCollectionTransfer;

    public function deleteCategoryCollection(
        CategoryCollectionDeleteCriteriaTransfer $categoryCollectionDeleteCriteriaTransfer
    ): CategoryCollectionResponseTransfer;

    public function updateCategoryCollection(CategoryCollectionRequestTransfer $categoryCollectionRequestTransfer): CategoryCollectionResponseTransfer;

    public function createCategoryCollection(CategoryCollectionRequestTransfer $categoryCollectionRequestTransfer): CategoryCollectionResponseTransfer;
}

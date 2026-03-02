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

class CategoriesBackendApiToCategoryFacadeBridge implements CategoriesBackendApiToCategoryFacadeInterface
{
    /**
     * @var \Spryker\Zed\Category\Business\CategoryFacadeInterface
     */
    protected $categoryFacade;

    /**
     * @param \Spryker\Zed\Category\Business\CategoryFacadeInterface $categoryFacade
     */
    public function __construct($categoryFacade)
    {
        $this->categoryFacade = $categoryFacade;
    }

    public function getCategoryCollection(
        CategoryCriteriaTransfer $categoryCriteriaTransfer
    ): CategoryCollectionTransfer {
        return $this->categoryFacade->getCategoryCollection($categoryCriteriaTransfer);
    }

    public function deleteCategoryCollection(
        CategoryCollectionDeleteCriteriaTransfer $categoryCollectionDeleteCriteriaTransfer
    ): CategoryCollectionResponseTransfer {
        return $this->categoryFacade->deleteCategoryCollection($categoryCollectionDeleteCriteriaTransfer);
    }

    public function updateCategoryCollection(CategoryCollectionRequestTransfer $categoryCollectionRequestTransfer): CategoryCollectionResponseTransfer
    {
        return $this->categoryFacade->updateCategoryCollection($categoryCollectionRequestTransfer);
    }

    public function createCategoryCollection(CategoryCollectionRequestTransfer $categoryCollectionRequestTransfer): CategoryCollectionResponseTransfer
    {
        return $this->categoryFacade->createCategoryCollection($categoryCollectionRequestTransfer);
    }
}

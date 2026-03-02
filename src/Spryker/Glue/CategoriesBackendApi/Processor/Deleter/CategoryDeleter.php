<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\CategoriesBackendApi\Processor\Deleter;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Spryker\Glue\CategoriesBackendApi\Dependency\Facade\CategoriesBackendApiToCategoryFacadeInterface;
use Spryker\Glue\CategoriesBackendApi\Mapper\GlueRequestCategoryMapperInterface;
use Spryker\Glue\CategoriesBackendApi\Mapper\GlueResponseCategoryMapperInterface;

class CategoryDeleter implements CategoryDeleterInterface
{
 /**
  * @var \Spryker\Glue\CategoriesBackendApi\Mapper\GlueRequestCategoryMapperInterface
  */
    protected GlueRequestCategoryMapperInterface $glueRequestCategoryMapper;

    /**
     * @var \Spryker\Glue\CategoriesBackendApi\Mapper\GlueResponseCategoryMapperInterface
     */
    protected GlueResponseCategoryMapperInterface $glueResponseCategoryMapper;

    /**
     * @var \Spryker\Glue\CategoriesBackendApi\Dependency\Facade\CategoriesBackendApiToCategoryFacadeInterface
     */
    protected CategoriesBackendApiToCategoryFacadeInterface $categoryFacade;

    public function __construct(
        GlueRequestCategoryMapperInterface $glueRequestCategoryMapper,
        GlueResponseCategoryMapperInterface $glueResponseCategoryMapper,
        CategoriesBackendApiToCategoryFacadeInterface $categoryFacade
    ) {
        $this->glueRequestCategoryMapper = $glueRequestCategoryMapper;
        $this->glueResponseCategoryMapper = $glueResponseCategoryMapper;
        $this->categoryFacade = $categoryFacade;
    }

    public function deleteCategories(GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer
    {
        $categoryCollectionDeleteCriteriaTransfer = $this->glueRequestCategoryMapper->mapGlueRequestToCategoryCollectionDeleteCriteriaTransfer($glueRequestTransfer);
        $categoryCollectionResponseTransfer = $this->categoryFacade->deleteCategoryCollection($categoryCollectionDeleteCriteriaTransfer);

        return $this->glueResponseCategoryMapper->mapCategoryCollectionResponseTransferToSingleResourceGlueResponseTransfer($categoryCollectionResponseTransfer);
    }
}

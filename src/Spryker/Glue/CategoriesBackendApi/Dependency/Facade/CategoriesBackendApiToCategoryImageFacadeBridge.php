<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\CategoriesBackendApi\Dependency\Facade;

use Generated\Shared\Transfer\CategoryTransfer;

class CategoriesBackendApiToCategoryImageFacadeBridge implements CategoriesBackendApiToCategoryImageFacadeInterface
{
    /**
     * @var \Spryker\Zed\CategoryImage\Business\CategoryImageFacadeInterface
     */
    protected $categoryImageFacade;

    /**
     * @param \Spryker\Zed\CategoryImage\Business\CategoryImageFacadeInterface $categoryImageFacade
     */
    public function __construct($categoryImageFacade)
    {
        $this->categoryImageFacade = $categoryImageFacade;
    }

    public function expandCategoryWithImageSets(CategoryTransfer $categoryTransfer): CategoryTransfer
    {
        return $this->categoryImageFacade->expandCategoryWithImageSets($categoryTransfer);
    }
}

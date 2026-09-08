<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerTest\Glue\CategoriesBackendApi\RestApi;

use Codeception\Attribute\Skip;
use Spryker\Glue\CategoriesBackendApi\Plugin\GlueApplication\CategoriesBackendApiResource;
use SprykerTest\Glue\CategoriesBackendApi\CategoriesBackendApiTester;
use Symfony\Component\HttpFoundation\Response;

/**
 * Auto-generated group annotations
 *
 * @group SprykerTest
 * @group Glue
 * @group CategoriesBackendApi
 * @group RestApi
 * @group CategoriesGetRestApiCest
 * Add your own group annotations below this line
 */
#[Skip('The legacy /categories Backend API endpoint is deliberately unwired - superseded by the API Platform categories/category-products resources (CC-40112). Suite kept for review; removal planned with the module deprecation follow-up.')]
class CategoriesGetRestApiCest
{
    public function requestCategoryGetReturnsHttpResponseCode200(CategoriesBackendApiTester $I): void
    {
        // Arrange
        $I->addJsonApiResourcePlugin(new CategoriesBackendApiResource());

        $categoryTransfer = $I->haveCategory();
        $identifier = $categoryTransfer->getCategoryKey();

        $url = $I->buildCategoriesUrl($identifier);

        // Act
        $I->sendGet($url);

        // Assert
        $I->seeResponseCodeIs(Response::HTTP_OK);
        $I->seeResponseIsJson();
        $I->seeResponseJsonContainsCategoryKey($identifier);
    }

    public function requestCategoryGetReturnsHttpResponseCode404(CategoriesBackendApiTester $I): void
    {
        // Arrange
        $I->addJsonApiResourcePlugin(new CategoriesBackendApiResource());

        $categoryTransfer = $I->haveCategoryTransfer();
        $identifier = $categoryTransfer->getCategoryKey();

        $url = $I->buildCategoriesUrl($identifier);

        // Act
        $I->sendGet($url);

        // Assert
        $I->seeResponseCodeIs(Response::HTTP_NOT_FOUND);
        $I->seeResponseIsJson();
    }
}

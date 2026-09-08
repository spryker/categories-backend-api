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
 * @group CategoriesGetCollectionRestApiCest
 * Add your own group annotations below this line
 */
#[Skip('The legacy /categories Backend API endpoint is deliberately unwired - superseded by the API Platform categories/category-products resources (CC-40112). Suite kept for review; removal planned with the module deprecation follow-up.')]
class CategoriesGetCollectionRestApiCest
{
    public function testCategoryGetReturnsPaginatedResults(CategoriesBackendApiTester $I): void
    {
        // Arrange
        $I->addJsonApiResourcePlugin(new CategoriesBackendApiResource());

        $I->haveCategory();
        $I->haveCategory();
        $I->haveCategory();
        $I->haveCategory();

        $url = $I->buildCategoriesUrl();

        $queryParams = http_build_query([
            'page' => [
                'offset' => 1,
                'limit' => 2,
            ],
        ]);
        $url .= '?' . $queryParams;

        // Act
        $I->sendGet($url);

        // Assert
        $I->seeResponseCodeIs(Response::HTTP_OK);
        $I->seeResponseIsJson();

        $I->seeResponseJsonContainsDataCount(2);
    }
}

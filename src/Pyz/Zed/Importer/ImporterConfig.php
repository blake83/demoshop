<?php

/**
 * This file is part of the Spryker Demoshop.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Importer;

use Spryker\Zed\Kernel\AbstractBundleConfig;

class ImporterConfig extends AbstractBundleConfig
{

    const RESOURCE_CATEGORY = 'RESOURCE_CATEGORY';
    const RESOURCE_CATEGORY_ROOT = 'RESOURCE_CATEGORY_ROOT';
    const RESOURCE_CATEGORY_CATALOG = 'RESOURCE_CATEGORY_CATALOG';

    const RESOURCE_CMS_BLOCK = 'RESOURCE_CMS_BLOCK';
    const RESOURCE_CMS_PAGE = 'RESOURCE_CMS_PAGE';

    const RESOURCE_NAVIGATION = 'RESOURCE_NAVIGATION';
    const RESOURCE_NAVIGATION_NODE = 'RESOURCE_NAVIGATION_NODE';

    const RESOURCE_GLOSSARY = 'RESOURCE_GLOSSARY';
    const RESOURCE_GLOSSARY_TRANSLATION = 'RESOURCE_GLOSSARY_TRANSLATION';

    const RESOURCE_SHIPMENT = 'RESOURCE_SHIPMENT';

    const RESOURCE_PRODUCT_ABSTRACT = 'RESOURCE_PRODUCT_ABSTRACT';
    const RESOURCE_PRODUCT_CONCRETE = 'RESOURCE_PRODUCT_CONCRETE';
    const RESOURCE_PRODUCT_ATTRIBUTE_KEY = 'RESOURCE_PRODUCT_ATTRIBUTE';
    const RESOURCE_PRODUCT_CATEGORY = 'RESOURCE_PRODUCT_CATEGORY';
    const RESOURCE_PRODUCT_PRICE = 'RESOURCE_PRODUCT_PRICE';
    const RESOURCE_PRODUCT_MANAGEMENT_ATTRIBUTE = 'RESOURCE_PRODUCT_MANAGEMENT_ATTRIBUTE';
    const RESOURCE_PRODUCT_SEARCH_ATTRIBUTE = 'RESOURCE_PRODUCT_SEARCH_ATTRIBUTE';
    const RESOURCE_PRODUCT_SEARCH_ATTRIBUTE_MAP = 'RESOURCE_PRODUCT_SEARCH_ATTRIBUTE_MAP';
    const RESOURCE_PRODUCT_SEARCH = 'RESOURCE_PRODUCT_SEARCH';
    const RESOURCE_PRODUCT_STOCK = 'RESOURCE_PRODUCT_STOCK';
    const RESOURCE_PRODUCT_TAX = 'RESOURCE_PRODUCT_TAX';

    const RESOURCE_DISCOUNT = 'RESOURCE_DISCOUNT';

    const RESOURCE_PRODUCT_OPTIONS = 'RESOURCE_PRODUCT_OPTIONS';
    const RESOURCE_PRODUCT_RELATIONS = 'RESOURCE_PRODUCT_RELATIONS';

    const RESOURCE_TAX = 'RESOURCE_TAX';

    /**
     * @return string
     */
    public function getImportDataDirectory()
    {
        return __DIR__ . '/Business/Internal/data/';
    }

    /**
     * @return string
     */
    public function getIcecatImportDataDirectory()
    {
        return __DIR__ . '/Business/Internal/data/icecat_biz_data/';
    }

}

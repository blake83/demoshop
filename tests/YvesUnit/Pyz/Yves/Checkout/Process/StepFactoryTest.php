<?php

/**
 * This file is part of the Spryker Demoshop.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace YvesUnit\Pyz\Yves\Checkout\Process;

use PHPUnit_Framework_TestCase;
use Pyz\Yves\Checkout\CheckoutDependencyProvider;
use Pyz\Yves\Checkout\Process\StepFactory;
use Spryker\Yves\Kernel\Container;

/**
 * @group YvesUnit
 * @group Pyz
 * @group Yves
 * @group Checkout
 * @group Process
 * @group StepFactoryTest
 */
class StepFactoryTest extends PHPUnit_Framework_TestCase
{

    const EXPECTED_DEPENDENCY = 'expected dependency';

    /**
     * @return void
     */
    public function testGetCalculationClient()
    {
        $container = new Container([CheckoutDependencyProvider::CLIENT_CALCULATION => self::EXPECTED_DEPENDENCY]);

        $stepFactory = new StepFactory();
        $stepFactory->setContainer($container);

        $this->assertSame(self::EXPECTED_DEPENDENCY, $stepFactory->getCalculationClient());
    }

    /**
     * @return void
     */
    public function testGetCheckoutClient()
    {
        $container = new Container([CheckoutDependencyProvider::CLIENT_CHECKOUT => self::EXPECTED_DEPENDENCY]);

        $stepFactory = new StepFactory();
        $stepFactory->setContainer($container);

        $this->assertSame(self::EXPECTED_DEPENDENCY, $stepFactory->getCheckoutClient());
    }

}

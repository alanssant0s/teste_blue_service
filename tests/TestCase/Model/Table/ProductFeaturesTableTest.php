<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductFeaturesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductFeaturesTable Test Case
 */
class ProductFeaturesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductFeaturesTable
     */
    protected $ProductFeatures;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ProductFeatures',
        'app.Products',
        'app.Features',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ProductFeatures') ? [] : ['className' => ProductFeaturesTable::class];
        $this->ProductFeatures = $this->getTableLocator()->get('ProductFeatures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ProductFeatures);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProductFeaturesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

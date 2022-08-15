<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RequestProductsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RequestProductsTable Test Case
 */
class RequestProductsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RequestProductsTable
     */
    protected $RequestProducts;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.RequestProducts',
        'app.Requests',
        'app.Products',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('RequestProducts') ? [] : ['className' => RequestProductsTable::class];
        $this->RequestProducts = $this->getTableLocator()->get('RequestProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->RequestProducts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RequestProductsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\RequestProductsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

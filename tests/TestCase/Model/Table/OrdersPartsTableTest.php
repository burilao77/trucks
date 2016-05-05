<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrdersPartsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrdersPartsTable Test Case
 */
class OrdersPartsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrdersPartsTable
     */
    public $OrdersParts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.orders_parts',
        'app.orders',
        'app.users',
        'app.parts',
        'app.categories',
        'app.vehicles',
        'app.types',
        'app.orders_vehicles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OrdersParts') ? [] : ['className' => 'App\Model\Table\OrdersPartsTable'];
        $this->OrdersParts = TableRegistry::get('OrdersParts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrdersParts);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

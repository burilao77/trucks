<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrdersVehiclesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrdersVehiclesTable Test Case
 */
class OrdersVehiclesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrdersVehiclesTable
     */
    public $OrdersVehicles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.orders_vehicles',
        'app.orders',
        'app.users',
        'app.parts',
        'app.categories',
        'app.orders_parts',
        'app.vehicles',
        'app.types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OrdersVehicles') ? [] : ['className' => 'App\Model\Table\OrdersVehiclesTable'];
        $this->OrdersVehicles = TableRegistry::get('OrdersVehicles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrdersVehicles);

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

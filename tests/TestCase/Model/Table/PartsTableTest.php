<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PartsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PartsTable Test Case
 */
class PartsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PartsTable
     */
    public $Parts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.parts',
        'app.categories',
        'app.orders',
        'app.users',
        'app.orders_parts',
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
        $config = TableRegistry::exists('Parts') ? [] : ['className' => 'App\Model\Table\PartsTable'];
        $this->Parts = TableRegistry::get('Parts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Parts);

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

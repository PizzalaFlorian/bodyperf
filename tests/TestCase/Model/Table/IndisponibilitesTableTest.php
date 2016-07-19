<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IndisponibilitesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IndisponibilitesTable Test Case
 */
class IndisponibilitesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IndisponibilitesTable
     */
    public $Indisponibilites;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.indisponibilites'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Indisponibilites') ? [] : ['className' => 'App\Model\Table\IndisponibilitesTable'];
        $this->Indisponibilites = TableRegistry::get('Indisponibilites', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Indisponibilites);

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
}

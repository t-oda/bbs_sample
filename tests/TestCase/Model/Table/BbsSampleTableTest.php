<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BbsSampleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BbsSampleTable Test Case
 */
class BbsSampleTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BbsSampleTable
     */
    public $BbsSample;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bbs_sample'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BbsSample') ? [] : ['className' => BbsSampleTable::class];
        $this->BbsSample = TableRegistry::get('BbsSample', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BbsSample);

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

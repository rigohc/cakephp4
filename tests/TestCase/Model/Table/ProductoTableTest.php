<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductoTable Test Case
 */
class ProductoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductoTable
     */
    protected $Producto;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Producto',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Producto') ? [] : ['className' => ProductoTable::class];
        $this->Producto = $this->getTableLocator()->get('Producto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Producto);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

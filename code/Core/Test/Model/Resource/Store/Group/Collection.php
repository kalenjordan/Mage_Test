<?php
 /*
 * @category    Magento
 * @package     Mage_Core
 * @subpackage  
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Core_Test_Model_Resource_Store_Group_Collection extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Core_Model_Resource_Store_Group_Collection
     */
    protected $_model;

    // constants required for integration tests
    const CLASS_GROUP_TYPE = parent::CLASS_GROUP_TYPE_MODEL;
    const CLASS_ID = 'core/resource_store_group_collection';

    protected function setUp()
    {
        $this->_model = new Mage_Core_Model_Resource_Store_Group_Collection();
    }

    public function testSetLoadDefault()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }	

    public function testGetLoadDefault()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testSetWithoutDefaultFilter()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testSetWithoutStoreViewFilter()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testToOptionArray()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testAddWebsiteFilter()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 
}

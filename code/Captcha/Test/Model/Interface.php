<?php
/**
 * @category    Mage_Test
 * @package     Mage_Test
 * @subpackage  Captcha 
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://www.mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Captcha_Test_Model_Interface extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Captcha_Model_Interface
     */
    protected $_model;

    protected function setUp()
    {
        $this->_model = new Mage_Captcha_Model_Interface();
    }

}


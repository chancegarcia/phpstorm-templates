<?php
#if(${Module})#end
#parse("Company license.php")
/**
 * @var Mage_Core_Model_Resource_Setup \$this
 * @var Mage_Core_Model_Resource_Setup \$installer
 */

\$installer = \$this;

\$installer->startSetup();

\$installer->endSetup();

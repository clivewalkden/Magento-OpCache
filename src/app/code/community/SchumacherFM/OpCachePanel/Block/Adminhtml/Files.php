<?php

/**
 * @category    SchumacherFM_OpCachePanel
 * @package     Block
 * @author      Cyrill at Schumacher dot fm / @SchumacherFM
 * @copyright   Copyright (c)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class SchumacherFM_OpCachePanel_Block_Adminhtml_Files extends SchumacherFM_OpCachePanel_Block_Adminhtml_AbstractOpCache
{

    public function getFilesDisplay()
    {
        $return        = array();
        $status = $this->_getStatus();
        if (FALSE !== $status) {
            $return[] = $this->_printTable($status['scripts']);
        }
        return implode(PHP_EOL, $return);
    }
}

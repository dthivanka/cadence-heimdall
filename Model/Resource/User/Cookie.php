<?php
/**
 * @author Alan Barber <alan@cadence-labs.com>
 */
namespace Cadence\Heimdall\Model\Resource\User\Cookie;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class News extends AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('heimdall_user_cookie', 'id');
    }
}
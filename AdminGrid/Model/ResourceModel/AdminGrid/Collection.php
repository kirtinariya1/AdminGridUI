<?php
namespace Kcn\AdminGrid\Model\ResourceModel\AdminGrid;

use Kcn\AdminGrid\Api\Data\AdminGridInterface;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Banner Collection
 */
class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'banner_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Kcn\AdminGrid\Model\AdminGrid', 'Kcn\AdminGrid\Model\ResourceModel\AdminGrid');
    }
}

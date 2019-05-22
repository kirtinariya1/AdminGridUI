<?php
namespace Kcn\AdminGrid\Controller\Adminhtml;

abstract class Index extends \Magento\Backend\App\Action
{
    protected function initPage($resultPage)
    {
        $resultPage->setActiveMenu('Kcn_AdminGrid::admingrid')->addBreadcrumb(__('Admin Management'), __('Admin Management'));
        return $resultPage;
    }
}

<?php
defined('_JEXEC') or die('Restricted access');
class ExtMgrTestControllerBase extends \Hubzero\Component\SiteController
{
    public function execute()
    {
        $this->registerTask('__default', 'test');
        parent::execute();
    }

    public function testTask()
    {
        $this->view->setLayout('ext_mgr_test');
        $this->view->display();
    }
}

<?php
namespace Vitvik\Testimonials\Model\ResourceModel;
class Testimonial extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('testimonials','testimonial_id');
    }
}
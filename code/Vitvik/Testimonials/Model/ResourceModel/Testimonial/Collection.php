<?php
namespace Vitvik\Testimonials\Model\ResourceModel\Testimonial;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Vitvik\Testimonials\Model\Testimonial','Vitvik\Testimonials\Model\ResourceModel\Testimonial');
    }
}
<?php
namespace Vitvik\Testimonials\Model;
class Testimonial extends \Magento\Framework\Model\AbstractModel implements TestimonialInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'testimonials';
    protected function _construct()
    {
        $this->_init('Vitvik\Testimonials\Model\ResourceModel\Testimonial');
    }
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}




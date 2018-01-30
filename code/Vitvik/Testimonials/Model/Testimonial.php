<?php
namespace Vitvik\Testimonials\Model;
class Testimonial extends \Magento\Framework\Model\AbstractModel implements TestimonialInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'testimonials';
    protected $_cacheTag= 'testimonials';
    protected $_eventPrefix = 'testimonials';
    protected function _construct()
    {
        $this->_init('Vitvik\Testimonials\Model\ResourceModel\Testimonial');
    }
    /*
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
*/
    //
    public function getTestimonialId()
    {
        return $this->getData(self::TESTIMONIAL_ID);
    }

    public function setTestimonialId($testimonialId)
    {
        return $this->setData(self::TESTIMONIAL_ID, $testimonialId);
    }


    public function getUserId()
    {
        return $this->getData(self::USER_ID);
    }

    public function setUserId($userId)
    {
        return $this->setData(self::USER_ID, $userId);
    }


    public function getTestimonialContent()
    {
        return $this->getData(self::TESTIMONIAL_CONTENT);
    }

    public function setTestimonialContent($testimonialContent)
    {
        return $this->setData(self::TESTIMONIAL_CONTENT, $testimonialContent);
    }


    public function getIsActive()
    {
        return $this->getData(self::IS_ACTIVE);
    }

    public function setIsActive($isActive)
    {
        return $this->setData(self::IS_ACTIVE, $isActive);
    }


    public function getUpdateTime()
    {
        return $this->getData(self::UPDATE_TIME);
    }

    public function setUpdateTime($updateTime)
    {
        return $this->setData(self::UPDATE_TIME, $updateTime);
    }


    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }
    //
}




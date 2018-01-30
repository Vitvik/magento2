<?php
namespace Vitvik\Testimonials\Model;
interface testimonialInterface
{
    const TESTIMONIAL_ID = 'testimonial_id';
    const USER_ID = 'user_id';
    const TESTIMONIAL_CONTENT = 'testimonial_content';
    const IS_ACTIVE = 'is_active';
    const UPDATE_TIME = 'update_time';
    const CREATED_AT = 'created_at';


    public function getTestimonialId();

    public function setTestimonialId($entityId);


    public function getUserId();

    public function setUserId($userId);


    public function getTestimonialContent();

    public function setTestimonialContent();


    public function getIsActive();

    public function setIsActive($isActive);


    public function getUpdateTime();

    public function setUpdateTime($updateTime);


    public function getCreatedAt();

    public function setCreatedAt($createdAt);

}
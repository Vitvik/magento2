<?php
namespace Vitvik\Testimonials\Block;
class Main extends \Magento\Framework\View\Element\Template
{
    protected $toDoFactory;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Vitvik\Testimonials\Model\TestimonialFactory $toDoFactory
    )
    {
        $this->toDoFactory = $toDoFactory;
        parent::__construct($context);
    }

    function _prepareLayout()
    {
        return '/vitvik/testimonials/index';

    }
}
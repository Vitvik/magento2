<?php
namespace Vitvik\Testimonials\Controller\Index;
use Magento\Framework\App\Action\Context;
class Index extends \Magento\Framework\App\Action\Action
{
    protected $_resultPageFactory;
    protected $dateTime;
    public function __construct(Context $context,
                                \Magento\Framework\View\Result\PageFactory $resultPageFactory,
                                \Magento\Framework\Stdlib\DateTime\DateTime $dateTime
    )
    {
        $this->_resultPageFactory = $resultPageFactory;
        $this->dateTime = $dateTime;
        parent::__construct($context);

    }
    public function execute()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $customerSession = $objectManager->create('Magento\Customer\Model\Session');

        if($customerSession->isLoggedIn()):
        $customerId = $customerSession->getCustomerId();
        $post = $this->getRequest()->getPostValue("testimonials");
        $date = $this->dateTime->gmtDate();

        $data = [
            'user_id' => $customerId,
            'testimonial_content' => $post,
            'creation_time' => $date
        ];
                if(!empty($post)):
                    $todo = $this->_objectManager->create("Vitvik\Testimonials\Model\Testimonial");
                    $todo->setData($data)->save();

                    try {
                        $this->messageManager->addSuccess(__('Successfull Message'));
                        $resultRedirect = $this->resultRedirectFactory->create();
                        $resultRedirect->setRefererOrBaseUrl();
                        return $resultRedirect;

                    } catch (\Exception $e) {
                        $this->messageManager->addError(__('Error Message.'));
                        $resultRedirect = $this->resultRedirectFactory->create();
                        $resultRedirect->setRefererOrBaseUrl();
                        return $resultRedirect;
                    }
                endif;

            $resultPage = $this->_resultPageFactory->create();
            return $resultPage;

            else:  echo('Error Message.'); //to do error page with link on registry or sign in
        endif;


    }
}
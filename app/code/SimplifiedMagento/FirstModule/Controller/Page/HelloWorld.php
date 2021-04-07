<?php
    namespace SimplifiedMagento\FirstModule\Controller\Page;
    use Magento\Framework\App\Action\Context;
    use Magento\Framework\App\ResponseInterface;
    use phpDocumentor\Reflection\Types\AbstractList;
    use SimplifiedMagento\FirstModule\Api\PencilInterface;
    use Magento\Catalog\Api\ProductRepositoryInterface;

    class HelloWorld extends \Magento\Framework\App\Action\Action {
        protected $pencilInterface;
        protected $prodRepository;
        public function __construct(Context $context, PencilInterface $pencil, ProductRepositoryInterface $productRepository)
        {
            $this->pencilInterface = $pencil;
            $this->prodRepository = $productRepository;
            parent::__construct($context);
        }

        public function execute()
        {
            echo $this->pencilInterface->getPencilType();
            //echo get_class($this->prodRepository);
        }
    }
?>

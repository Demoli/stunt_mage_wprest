<?php

class Stuntcoders_Wprest_IndexController extends Mage_Core_Controller_Front_Action
{
    public function postAction()
    {
        $post = $this->getRequest()->getParam('object', false);

        $this->loadLayout();
        $this->getLayout()->getBlock('head')->setTitle($post['title']['rendered']);

        $block = $this->getLayout()->createBlock('stuntcoders_wprest/post', 'stuntcoders_wprest_post')
            ->setPost($post);

        $this->getLayout()->getBlock('content')->append($block);
        $this->renderLayout();
    }
}

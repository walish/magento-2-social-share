<?php
/**
 * ShareTo
 */

namespace Unet\SocialShare\Block\Widget;

/**
 * Class Share
 * @package Unet\SocialShare\Block\Widget
 */
class ShareTo extends \Unet\SocialShare\Block\AbstractShare
{
    /**
     * $template
     * @var string
     */
    protected $template = "Unet_SocialShare::shareto.phtml";

    /**
     * setTemplate
     * __construct
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate($this->template);
    }
}

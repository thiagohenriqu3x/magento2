<?php

namespace Thiago\Helloworld\Block;

/**
 * Class Helloworld
 *
 * @author Thiago Machado <thiago.machado@jn2.com.br>
 * @version 1.0
 */
class Helloworld extends \Magento\Framework\View\Element\Template
{
    /**
     * @return string
     */
    public function getHelloWorldTxt()
    {
        return 'Hello world!';
    }
}

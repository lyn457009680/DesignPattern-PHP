<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/21
 * Time: 下午11:11
 */

namespace create\FactoryMethod;

/**
 * @explain 产品种类01
 * Class    Product01
 * @package create\FactoryMethod
 */
class Product01 implements Product
{
    public function send()
    {
        // TODO: Implement send() method.
        echo '《Send Product01》';
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/22
 * Time: 上午1:08
 */

namespace create\AbstractFactory;


class FactoryProductx2 extends AbstractFactory
{
    public function createProduct0X()
    {
        parent::createProduct0X(); // TODO: Change the autogenerated stub
        return new Product02();
    }

    public function createProduct1X()
    {
        parent::createProduct1X(); // TODO: Change the autogenerated stub
        return new Product12();
    }
}
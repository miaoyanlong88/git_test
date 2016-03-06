<?php
/**
 * Created by PhpStorm.
 * User: MYL
 * Date: 2016/3/6
 * Time: 21:59
 */

namespace Imooc;


class Factory
{
  static  function createDatabases(){
     $db  =  new Databases;
      Register::set('db1',$db);
      return $db;
  }
}
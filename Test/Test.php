<?php
/**
 * Created by PhpStorm.
 * User: MYL
 * Date: 2016/3/5
 * Time: 21:57
 */

namespace Test;

//链式操作
class Test
{
public $w = '';
public $o = '';
public $a = '';
    public  function where($data){
        $da[1]= 99;
        $this->a = $da;
        $this->w = $data;
        return $this;
    }

    public function order($data){
        $da[2]=  88;
        $this->a = $da;
        $this->o = $data;
        return $this;
    }
}
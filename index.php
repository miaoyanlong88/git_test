<?php
/**
 * Created by PhpStorm.
 * User: myl
 * Date: 16-3-2
 * Time: 上午6:58
 */
define('BASEDIR',__DIR__);
include BASEDIR.'/Imooc/Loader.php';
use Test\Test;

spl_autoload_register('\\Imooc\\Loader::autoload');

//Imooc\Object::test();
//App\Controller\Home\Index::test();

/*
 * 栈
 */
$stack =new  SplStack();
$stack->push('data1\n');  //入栈
$stack->push('data2');  //入栈

//echo $stack->pop(); //出栈
//echo $stack->pop();

/**
 * 队列
 */
$queue = new SplQueue();
$queue->enqueue('data1');
$queue->enqueue('data2');

//echo $queue->dequeue();
//echo $queue->dequeue();

/**
 * 堆   最小堆
 */
$heap = new SplMinHeap();
$heap->insert('data1');
$heap->insert('data2');
//echo $heap->extract();
//echo $heap->extract();

/**
 * 固定长度的数组
 */
$array = new SplFixedArray(10);
$array[0] = 123;
$array[9] = 6666;
//print_r($array);

$model = new Test();
$data = $model->where('12')->order('23');
print_r($data);
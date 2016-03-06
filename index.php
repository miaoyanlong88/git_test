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
use Imooc\Object;
use Imooc\Factory;

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
//print_r($data);

/*
 * 工厂模式
 * 使用工厂方法或者类来生成对象
 * 而不是在代码中直接new
 */
//$db = Factory::createDatabases();
//Object::Mydump($db->test());

/**
 * 单例模式
 * 使某个类或对象只允许创建一个
 */
//$db = \Imooc\Databases::getInstance();

/**
 * 注册模式
 * 用了将一个对象注册到全局的树上面  用来被任何地方直接去访问
 */
//$db = \Imooc\Register::get('db1');

/**
 * 适配模式
 */

$db = new Imooc\Databases\MySql();
$db->connect('127.0.0.1','root','123456','test');
$db->query('show databases');
$db->close();



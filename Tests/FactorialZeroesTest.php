<?php

namespace Tests;



use PHPUnit\Framework\TestCase;

require_once 'FactorialZeroes.php';

class FactorialZeroesTest extends TestCase{

    /**
     * @var FactorialZeroes
     */
    protected  $obj; //объект тестируемого класса
    /*
     * Метод вызывается в начале тестирования
     * Тут создаем объект класса который будем тестировать
     * при его создании выполняется метод-конструктор прописанный в данном классе
     */
    protected function setUp():void {
        $this->obj = new \FactorialZeroes();
    }
    /**
     * @dataProvider hostsZeroes
     * Тест проходит успешно если возвращаемое значение равно true
     * Проверяем на заведомо существующих доменах.
     * Используется метод провайдер данных (hostsProvider) для получения аргумента $a
	 *	@test
     */
    public function test_countZeroes($a,$b){

        $this->assertEquals($b, $this->obj->countZeroes($a));

       // $result = $obj->countZeroes($a);

    }
    /*
     * Метод предоставляющий данные для тестирования.
     * Для каждого массива будет произведен отдельный тест
     */
    public function hostsZeroes(){

            return [
                [11, 2],
                [15, 3],
                [22, 4],
                [24, 4],
                [25, 6],
                [100, 24],
                [125, 31],
                [1000,249]
            ];

    }
    

}




?>

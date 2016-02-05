<?php

//Интерфейс это инструмент который иписывает какие методы должен содержать класс потомок но не содержит реализации сам
//Если мы хотим только описать работу класса потомка тогда можно использовать интерфейс
//Если мы еще можем реализовать общие методы тогда необходимо использовать обстрактный класс
interface Vehicle
{
    public function info();
}

interface Car extends Vehicle
{
    public function drive();
}

interface Boat extends Vehicle
{
    public function swim();
}


//class Audi implements Car //Audi реализует интерфейс машина Car
//{
//
//    public function info()
//    {
//        echo '<br>Audi is a German automobil manufacturer.';
//    }
//
//    public function drive()
//    {
//        echo '<br>Audi drives';
//    }
//}
//
//$audi1 = new Audi;
//$audi1->info();//Вызываю метод public function info
//$audi1->drive();//Вызываю метод public function drive


class MersedesAmphibous implements Car,Boat//Подключение сразу двух интерфейсов
{

    public function info()//применение метода интерфейса Vehicle
    {
        echo '<br>Mersedes is a German automobil manufacturer.';
    }

    public function drive()//применение метода интерфейса Car
    {
        echo '<br>Mersedes drives';
    }

    public function swim()//применение метода интерфейса Boat
    {
        echo '<br>Mersedes swim';
    }
}

$mersedesAmphibous = new MersedesAmphibous;
$mersedesAmphibous->info();
$mersedesAmphibous->drive();
$mersedesAmphibous->swim();
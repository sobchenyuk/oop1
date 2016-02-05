<?php

//Обстрактные класы могут иметь и  обстрактные методы и реальные метода которые несут только описательный хорактер
//Тоесть обязывают класы потомки реализовывать этот метод
//Если класс содержит хотябы один обстрактный метод, он должен быть обьявлен как обстрактный


//Методы могут быть с реализацией и без

abstract class Human // Значит необходимо обьявлять абстрактный класс
{
    abstract public function printHello(); //содержится один абстрактный метод _ МЕТОД БЕЗ РЕАЛИЗАЦИИ

    public function printHelloName($name) //обыкновенный метод _ МЕТОД С РЕАЛИЗАЦИЕЙ
    {
        echo "Hello, student $name";
    }
}

class Student extends Human// Класс Student наследует класс Human
{

    public function printHello()
    {
        echo "Hello, student <br>";
    }
}

$student1 = new Student;
$student1->printHello();
$student1->printHelloName('Андрей');
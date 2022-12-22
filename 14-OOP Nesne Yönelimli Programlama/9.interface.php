<?php
/*
Arayüzler, soyut sınıflara benzer.

Arayüzler sadece sınıfta zorunlu olarak tanımlanması gereken metotları belirtmek için kullanılır.

Özellikleri

Soyut methodlar ve sabitler içerebilir.
Sadece public method tanımı yapılabilir.
Aynı sınıf birden fazla interface'den türetilebilir'.
*/

interface InterfaceIsmi{
    public function a();
    public function b();
}

interface InterfaceIsmi2{
    public function c();
    public function d();
}

interface InterfaceIsmi3 extends InterfaceIsmi, InterfaceIsmi2 {
    public function e();
    public function f();
}

interface InterfaceIsmi4{
    public function g();
    public function h();
}

class ClassIsmi implements InterfaceIsmi3, InterfaceIsmi4 {
    //implement anahtar sözcüğüyle extend gibi tanımlıyoruz.
    public function a()
    {

    }
    public function b()
    {

    }
    public function c()
    {

    }
    public function d()
    {

    }
    public function e()
    {

    }
    public function f()
    {

    }
    public function g()
    {

    }
    public function h()
    {

    }
}
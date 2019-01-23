<?php
/**
 * Created by IntelliJ IDEA.
 * User: philipp
 * Date: 2019-01-17
 * Time: 16:50
 */
abstract class BookProtocalType {
    protected $category;

    protected $title;

    abstract public function __clone();

    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }
}

class BarBookProtoType extends BookProtocalType{
    protected $category = 'Bar';
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}

class FooBookProtoType extends BookProtocalType{
    protected $category = "Foo";
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}

$fooPrototype = new FooBookPrototype();
$barPrototype = new BarBookPrototype();

for ($i = 0; $i < 2; $i++) {
    $book = clone $fooPrototype;
    $book->setTitle('Foo Book No ' . $i);
    var_dump($book);
}

for ($i = 0; $i < 2; $i++) {
    $book = clone $barPrototype;
    $book->setTitle('Bar Book No ' . $i);
    var_dump($book);
}

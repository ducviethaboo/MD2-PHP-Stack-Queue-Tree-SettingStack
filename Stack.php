<?php


class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($item)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            echo "Stack is full !";
        }
    }

    public function pop()
    {
        if (!$this->isEmpty()) {
            array_shift($this->stack);
        } else {
            echo "Notthing to take!";
        }
    }

    public function top()
    {
        if (!$this->isEmpty()) {
           $first =  current($this->stack);
        } else {
            echo "Nothting to see!";
        }
        return $first;
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

}
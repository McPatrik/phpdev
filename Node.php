<?php

class Node implements NodeInterface
{
    public $name;
    public $children;
    public function __construct(string $name) 
    {
        $this->name = $name;
    }

    public function addChild(Node $node): self 
    {
        $this->children[$this->name][$this->node->getName()] = $this->node->getChildren();
    }

    public function getName(): string 
    {
        return $this->name;
    }

    function getChildren(): array 
    {
        if (!empty($this->children[$this->name])) 
        {
            return $this->children[$this->name];
        } else 
        {
            return [];
        }
    }
    
    function __toString(): string 
        {
        //вызов функции для получения дерева произойдет при вызове echo tree?(toString => getTree)
        return $this->getTree($this->children);
        //присвоение знака вложенности
        }
    function getTree($children)
        {
            //пройти циклом по дереву для нахождения всех вложенных элементов?
        }
}

<?php
namespace App\Http\Controllers;
class Filter
{
    public $column;
    public $operator;
    public $value;

    public function __construct($column,$operator,$value)
    {
        $this->column =$column;
        $this->operator =$operator;
        $this->value =$value;
    }
}

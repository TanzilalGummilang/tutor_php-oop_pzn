<?php
namespace Data;

class Shape
{
  public function getCorner(): int
  {
    return 0;
  }
}

class Rectangle extends Shape
{
  public function getCorner(): int
  {
    return 4;
  }

  public function getCornerParent(): int
  {
    return parent::getCorner();
  }
}
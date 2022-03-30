<?php

namespace Data;


// interface
interface HasBrand
{
  function getBrand(): string;
}

interface IsMaintenance
{
  function IsMaintenance(): bool;
}

interface Car extends HasBrand
{
  function drive(): void;
  function getTire(): int;
}


// class
class Avanza implements Car, IsMaintenance
{
  function drive(): void
  {
    echo "naik mobil avanza nih\n";
  }

  function getTire(): int
  {
    return 4;
  }

  function getBrand(): string
  {
    return "Toyota";
  }

  function IsMaintenance(): bool
  {
    return false;
  }
}
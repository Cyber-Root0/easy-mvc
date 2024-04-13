<?php
namespace CyberRoot0\EasyMVC\Repository\Funcionario;
use BrunoAlves\abstractmodel\Entity\Entity as BEntity;
class Entity extends BEntity
{
    public string $nome;
    public string $cargo;
    public float $salario;
}
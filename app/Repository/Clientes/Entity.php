<?php
namespace CyberRoot0\EasyMVC\Repository\Clientes;
use BrunoAlves\abstractmodel\Entity\Entity as BEntity;
class Entity extends BEntity
{
    public string $nome;
    public string $sobrenome;
    public int $idade;
    
}
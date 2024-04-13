<?php
namespace CyberRoot0\EasyMVC\Repository\Produto;
use BrunoAlves\abstractmodel\Entity\Entity as BEntity;
class Entity extends BEntity
{
    public string $nome;
    public string $descricao;
    public float $valor;
}
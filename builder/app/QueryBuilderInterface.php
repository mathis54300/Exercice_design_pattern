<?php

# TODO: Créer une classe QueryBuilder en utilisant le design pattern Builder

namespace App;

interface QueryBuilderInterface
{
    public function select(string $fields): QueryBuilderInterface;
    public function from(string $table): QueryBuilderInterface;
    public function where(string $condition, string $value): QueryBuilderInterface;
    public function getQuery(): string;

    public function andWhere(string $condition, string $value): QueryBuilderInterface;
}
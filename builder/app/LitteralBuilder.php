<?php

namespace App;

class LitteralBuilder implements QueryBuilderInterface
{

    protected $select;
    protected $from;
    protected $where = [];
    protected $andWhere = [];

    public function select(string $fields): QueryBuilderInterface
    {
        $this->select = "Je sélectionne les champs $fields ";
        return $this;
    }

    public function from(string $table): QueryBuilderInterface
    {
        $this->from = "de la table $table ";
        return $this;
    }

    public function where(string $condition, string $value, string $operator = '='): QueryBuilderInterface
    {
        $this->where[] = "où $condition $operator $value ";
        return $this;
    }

    public function andWhere(string $condition, string $value, string $operator = '='): QueryBuilderInterface
    {
        $this->andWhere[] = "et $condition $operator $value ";
        return $this;
    }

    public function getQuery(): string
    {
        $query = $this->select;
        if ($this->from) {
            $query .= $this->from;
        }
        if (!empty($this->where)) {
            $query .= implode(' ', $this->where);
        }
        if (!empty($this->andWhere)) {
            $query .= implode(' ', $this->andWhere);
        }
        return $query;
    }

}
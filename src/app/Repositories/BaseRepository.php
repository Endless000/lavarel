<?php

namespace App\Repositories;


abstract class BaseRepository
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $this->model = $this->getModel();
    }

    public function all()
    {
        return $this->model::all();
    }

    public function lastArticle()
    {
        return $this->model->select('*')
            ->orderBy('updated_at', 'desc')
            ->limit(1)
            ->first();
    }

    public function insert($attributes)
    {
        return $this->model->insert($attributes);
    }

    public function insertGetId($attributes)
    {
        return $this->model->insertGetId($attributes);
    }

    public function whereName($attribute)
    {
        return $this->model->whereName($attribute)->first();
    }
}

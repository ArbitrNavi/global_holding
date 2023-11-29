<?php

namespace App\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Model;

interface BaseCRUDInterface
{
    public function getById() : ?Model;
}

<?php

namespace Modules\Twp\Entities;

use Illuminate\Database\Eloquent\Model;

class ModuleModel extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->connection = env('DB_DATABASE_TWP');
    }
}

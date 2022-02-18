<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
    ];
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this->orderBy('created_at', 'ASC')->paginate($limit_count);
    }
}
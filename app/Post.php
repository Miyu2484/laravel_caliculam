<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
 protected $fillable = [
    'title',
    'body',
];
    public function getPaginate(int $limit_count = 5)
    {
    // updated_atで好順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

}

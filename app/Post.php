<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
<<<<<<< HEAD
    public function getPaginateByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
=======
 
    public function getPaginateByLimit(int $limit_count = 5)
    {
    // updated_atで好順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

>>>>>>> b5cb21a423b71bf106da7736f694ff8702c3291d
}

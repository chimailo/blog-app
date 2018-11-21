<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){
        return $this->belongsTO('App\User');
    }

    // Table Name
    protected $table = 'posts';

    // Primary Key
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;
}

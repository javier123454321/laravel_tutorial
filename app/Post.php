<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = []; //To be able to pass an array to the db that is not protected. Fixes 'Add [caption] to fillable property to allow mass assignment on [App\Post].
    public function user()
    {
        $this->belongsTo(User::class);
    }
}

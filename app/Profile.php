<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imgPath = ($this->image) ? $this->image : 'profile/OPLOs7CYoss2EgzYbiC2JMXsaaJ7foFlx7bfUHiA.png';
        return '/storage/'.$imgPath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

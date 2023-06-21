<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'staffs';
    protected $appends = ['url'];

    public function getUrlAttribute()
    {
        return url('/') .'/storage'.$this->photo;
    }

    public function site()
    {
        return $this->belongsTo(\App\Models\Site::class, 'site_id');
    }

    public function community()
    {
        return $this->belongsTo(\App\Models\Community::class, 'community_id');
    }


}

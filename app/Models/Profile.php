<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravolt\Indonesia\Models\Province;

class Profile extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'profiles';

    public function provinces()
    {
        return $this->belongsTo(Province::class, 'province_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravolt\Indonesia\Models\District;
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
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function kecamatan(){
        return $this->belongsTo(District::class,'district_id','id');
    }
    public function getTextAttribute()
    {
        if ($this->attributes['is_valid'] == 1) {
            return 'Aktif';
        }else{
            return 'Tidak Aktif';
        }
    }
}

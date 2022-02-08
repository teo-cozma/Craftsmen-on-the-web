<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'profiles';
    
    protected $primaryKey = 'id';
    
    protected $fillable = ['alias', 'craft', 'motivation', 'image'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

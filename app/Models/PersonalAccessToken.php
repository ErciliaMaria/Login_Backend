<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken;

class PersonalAccessToken extends SanctumPersonalAccessToken
{
    use HasFactory, HasUuids;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    protected $fillable = [

            'id', 'tokenable_type', 'tokenable_id', 'name', 'token', 'abilities', 'last_used_at', 'created_at', 'updated_at', 'expires_at'

        ];


    protected $casts = [
            'id' => 'uuid',
        ];

}

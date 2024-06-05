<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PersonalAccessToken extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime:d-m-Y',
        ];
    }
}

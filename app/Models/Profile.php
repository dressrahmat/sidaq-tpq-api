<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profile';

    protected $fillable = [
        'id_user', 'id_khidmat', 'alamat', 'kota', 'provinsi', 'tanggal_lahir', 'amanah',
    ];

    /**
     * Get the user that owns the Profile
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    /**
     * Get the khidmat that owns the Profile
     */
    public function tempat_khidmat(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_khidmat', 'id');
    }
}

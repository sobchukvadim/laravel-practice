<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $fedEx_tractor_num
 * @property int $status
 * @property string $comment
 * @property string $created_at
 * @property string $updated_at
 */
class Truck extends Model
{
    use HasFactory;

    public $guarded = [];
}

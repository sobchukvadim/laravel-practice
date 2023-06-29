<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $word
 * @property string $translation
 * @property string $example
 * @property boolean $is_important
 */
class Words extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [];

    public $timestamps = false;
}

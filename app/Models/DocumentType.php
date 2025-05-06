<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $alias
 * @property string $name
 */
class DocumentType extends Model
{
    use HasFactory;

    public function documents()
    {
        return $this->hasMany(Document::class, 'type_id', 'id');
    }
}

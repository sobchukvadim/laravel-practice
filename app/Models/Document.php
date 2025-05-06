<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $id
 * @property string $title
 * @property string $description
 */
class Document extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->hasOne(DocumentType::class, 'id', 'type_id');
    }
}

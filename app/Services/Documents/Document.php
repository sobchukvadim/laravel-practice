<?php

namespace App\Services\Documents;

use App\Models\Document;
use App\Models\DocumentType;

class Document
{
    public function getQuery()
    {
        return Document::find();
    }

    public function getConnectedDocuments(DocumentableInterface $documentable, DocumentType|string|int|null $type)
    {
        return $this->getQuery()
    }

    public function identifyDocumentType(DocumentType|string|int|null $type)
    {
        if ($type instanceof DocumentType) {
            return $type;
        } elseif (is_string($type)) {
            if ($documentType = DocumentType::where('alias', $type)->first()) {
                return $documentType;
            }
        } elseif (is_integer($type)) {
            if ($documentType = DocumentType::where('id', $type)->first()) {
                return $documentType;
            }
        } else {
            throw new \InvalidArgumentException('Document type is invalid');
        }
    }
}

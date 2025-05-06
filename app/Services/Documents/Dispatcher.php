<?php

namespace App\Services\Documents;

use App\Models\Document
use App\Models\DocumentType;

class Dispatcher
{
    //protected DocumentableInterface $documentable;

    public function __construct(
        protected DocumentableInterface $documentable
    ) {}

    /**
     * @param DocumentType|string|int|null $type
     * @return Document[]
     */
    public function getDocuments(DocumentType|string|int|null $type): array
    {
        return app('documents')->getConnectedDocuments($this->documentable, $type);
    }
}

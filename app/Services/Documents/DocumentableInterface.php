<?php

namespace App\Services\Documents;

interface DocumentableInterface
{
    public function getDocumentable();

    public function getDocumentableObjectClass();

    public function getDocumentableObjectId();
}

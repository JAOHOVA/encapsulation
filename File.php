<?php

class File
{
    public $fileResource;

    public function __construct(string $fileName)
    {
        // a: append pour ne pas écraser les autres écriture
        $this->fileResource = fopen($fileName, 'a');
    }

    public function write(string $content)
    {
        return fwrite($this->fileResource, $content);
    }

    public function close(): bool
    {
        return fclose($this->fileResource);
    }
}
<?php

namespace CompanyMapperBundle\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\Exception\UploadException;

class FileUploader
{
    /**
     * File upload directory.
     *
     * @var string
     */
    private $targetDir;

    /**
     * Global max file size for uploads.
     *
     * @var int
     */
    private $maxFileSize = (5 * 1024 * 1024); // 5 MB

    public function __construct($targetDir)
    {
        $this->targetDir = $targetDir;
    }

    /**
     * @param UploadedFile $file
     * @return string
     */
    public function upload(UploadedFile $file)
    {
        if ($file instanceof UploadedFile && !$file->isValid()) {
            throw new UploadException($file->getErrorMessage());
        }

        if ($file instanceof UploadedFile && $file->getClientSize() > $this->maxFileSize) {
            throw new UploadException('Size exceeds limit');
        }

        $fileName = md5(uniqid()).'_'.$file->getClientOriginalName();

        try {
            $file->move($this->targetDir, $fileName);
        } catch (\Exception $e) {
            throw new UploadException('Error: cannot store the uploaded file, ' . $e->getMessage());
        }

        return $fileName;
    }

    public function getTargetDir()
    {
        return $this->targetDir;
    }
}
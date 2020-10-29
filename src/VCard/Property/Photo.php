<?php

declare (strict_types=1);

namespace Remind\BusinessCard\VCard\Property;

use Remind\BusinessCard\VCard\Properties;

/**
 * Description of Photo
 */
class Photo implements Property
{
    /**
     * Name of the property this class represents
     * @var string
     */
    public const NAME = Properties::PHOTO;

    /**
     * Encoding for inline images.
     * @var string
     */
    public const ENCODING = 'base64';

    /**
     * Image type like jpeg or png
     * @var string
     */
    protected $imageType = '';

    /**
     * The mime type for the given image
     * @var string
     */
    protected $mimeType = '';

    /**
     * Path or url to the image
     * @var string
     */
    protected $image = '';

    /**
     *
     * @var bool
     */
    protected $isUrl = false;

    /**
     *
     * @var Version
     */
    protected $version = null;

    /**
     *
     */
    public function __construct(Version $version)
    {
        $this->version = $version;
        $this->imageType = '';
        $this->mimeType = '';
        $this->image = '';
        $this->isUrl = false;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        switch ($this->version->getVersion()) {
            case Version::VERSION_2_1:
                return $this->returnVersion21Formatted();
            case Version::VERSION_3_0:
                return $this->returnVersion30Formatted();
            case Version::VERSION_4_0:
                return $this->returnVersion40Formatted();
            default:
                return '';
        }
    }

    public function getName()
    {
        return self::NAME;
    }

    /**
     *
     * @return string
     */
    protected function returnVersion21Formatted()
    {
        if (empty($this->image)) {
            return '';
        }

        $ident = self::NAME . ';' . strtoupper($this->imageType);

        if ($this->isurl) {
            /* PHOTO;JPEG:http://example.org/photo.jpg */
            return $ident . ':' . $this->image;
        } else {
            /* PHOTO;JPEG;ENCODING=BASE64:[base64-data] */
            return $ident . ';ENCODING=' . strtoupper(self::ENCODING) . ':'
                . base64_encode(file_get_contents($this->image));
        }
    }

    /**
     *
     * @return string
     */
    protected function returnVersion30Formatted()
    {
        if (empty($this->image)) {
            return '';
        }

        $ident = self::NAME . ';TYPE=' . strtoupper($this->imageType);

        if ($this->isUrl) {
            /* PHOTO;TYPE=JPEG:http://example.org/photo.jpg */
            return $ident . ':' . $this->image;
        } else {
            /* PHOTO;TYPE=JPEG;ENCODING=b:[base64-data] */
            return $ident . ';ENCODING=b:'
                . base64_encode(file_get_contents($this->image));
        }
    }

    /**
     *
     * @return string
     */
    protected function returnVersion40Formatted()
    {
        if (empty($this->image)) {
            return '';
        }

        if ($this->isUrl) {
            /* PHOTO;MEDIATYPE=image/jpeg:http://example.org/photo.jpg */
            return self::NAME . ';MEDIATYPE=' . $this->mimeType . ':' . $this->image;
        } else {
            /* PHOTO:data:image/jpeg;base64,[base64-data] */
            return self::NAME . ':data:' . $this->mimeType . ';'
                . self::ENCODING . ','
                . base64_encode(file_get_contents($this->image));
        }
    }

    /**
     *
     * @param string $imageUrl
     */
    public function setImageFromUrl($imageUrl)
    {
        $this->image = $imageUrl;
        $this->isUrl = true;
    }

    /**
     *
     * @param string $imagePath
     */
    public function setImageFromFile($imagePath)
    {
        $this->image = $imagePath;
        $this->isUrl = false;
    }

    /**
     *
     * @return string
     */
    public function getImageType()
    {
        return $this->imageType;
    }

    /**
     *
     * @return string
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     *
     * @param string $imageType
     */
    public function setImageType($imageType)
    {
        $this->imageType = $imageType;
    }

    /**
     *
     * @param string $mimeType
     */
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
    }

    /**
     *
     * @param Version $version
     */
    public function setVersion(Version $version)
    {
        $this->version = $version;
    }
}

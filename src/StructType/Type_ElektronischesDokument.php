<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ElektronischesDokument StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ElektronischesDokument extends AbstractStructBase
{
    /**
     * The mimeType
     */
    public ?\THAG\XKfz\StructType\Code_TypDesDokuments $mimeType = null;

    /**
     * The inhalt
     */
    public ?string $inhalt = null;

    /**
     * Constructor method for Type.ElektronischesDokument
     *
     * @uses Type_ElektronischesDokument::setMimeType()
     * @uses Type_ElektronischesDokument::setInhalt()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_TypDesDokuments $mimeType = null, ?string $inhalt = null)
    {
        $this
            ->setMimeType($mimeType)
            ->setInhalt($inhalt);
    }

    /**
     * Get mimeType value
     */
    public function getMimeType(): ?\THAG\XKfz\StructType\Code_TypDesDokuments
    {
        return $this->mimeType;
    }

    /**
     * Set mimeType value
     */
    public function setMimeType(?\THAG\XKfz\StructType\Code_TypDesDokuments $mimeType = null): self
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * Get inhalt value
     */
    public function getInhalt(): ?string
    {
        return $this->inhalt;
    }

    /**
     * Set inhalt value
     */
    public function setInhalt(?string $inhalt = null): self
    {
        $this->inhalt = $inhalt;

        return $this;
    }
}

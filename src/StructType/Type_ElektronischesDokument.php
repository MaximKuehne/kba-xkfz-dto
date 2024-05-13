<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ElektronischesDokument StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ElektronischesDokument extends AbstractStructBase
{
    /**
     * The mimeType
     * @var \THAG\XKfz\StructType\Code_TypDesDokuments|null
     */
    public ?\THAG\XKfz\StructType\Code_TypDesDokuments $mimeType = null;
    /**
     * The inhalt
     * @var string|null
     */
    public ?string $inhalt = null;
    /**
     * Constructor method for Type.ElektronischesDokument
     * @uses Type_ElektronischesDokument::setMimeType()
     * @uses Type_ElektronischesDokument::setInhalt()
     * @param \THAG\XKfz\StructType\Code_TypDesDokuments $mimeType
     * @param string $inhalt
     */
    public function __construct(?\THAG\XKfz\StructType\Code_TypDesDokuments $mimeType = null, ?string $inhalt = null)
    {
        $this
            ->setMimeType($mimeType)
            ->setInhalt($inhalt);
    }
    /**
     * Get mimeType value
     * @return \THAG\XKfz\StructType\Code_TypDesDokuments|null
     */
    public function getMimeType(): ?\THAG\XKfz\StructType\Code_TypDesDokuments
    {
        return $this->mimeType;
    }
    /**
     * Set mimeType value
     * @param \THAG\XKfz\StructType\Code_TypDesDokuments $mimeType
     * @return \THAG\XKfz\StructType\Type_ElektronischesDokument
     */
    public function setMimeType(?\THAG\XKfz\StructType\Code_TypDesDokuments $mimeType = null): self
    {
        $this->mimeType = $mimeType;
        
        return $this;
    }
    /**
     * Get inhalt value
     * @return string|null
     */
    public function getInhalt(): ?string
    {
        return $this->inhalt;
    }
    /**
     * Set inhalt value
     * @param string $inhalt
     * @return \THAG\XKfz\StructType\Type_ElektronischesDokument
     */
    public function setInhalt(?string $inhalt = null): self
    {
        $this->inhalt = $inhalt;
        
        return $this;
    }
}

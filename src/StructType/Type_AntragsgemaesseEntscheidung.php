<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AntragsgemaesseEntscheidung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AntragsgemaesseEntscheidung extends AbstractStructBase
{
    /**
     * The bemerkungen
     * @var string|null
     */
    public ?string $bemerkungen = null;
    /**
     * Constructor method for Type.AntragsgemaesseEntscheidung
     * @uses Type_AntragsgemaesseEntscheidung::setBemerkungen()
     * @param string $bemerkungen
     */
    public function __construct(?string $bemerkungen = null)
    {
        $this
            ->setBemerkungen($bemerkungen);
    }
    /**
     * Get bemerkungen value
     * @return string|null
     */
    public function getBemerkungen(): ?string
    {
        return $this->bemerkungen;
    }
    /**
     * Set bemerkungen value
     * @param string $bemerkungen
     * @return \THAG\XKfz\StructType\Type_AntragsgemaesseEntscheidung
     */
    public function setBemerkungen(?string $bemerkungen = null): self
    {
        $this->bemerkungen = $bemerkungen;
        
        return $this;
    }
}

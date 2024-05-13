<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ReferenzStrassenverkehrsBehoerde StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ReferenzStrassenverkehrsBehoerde extends AbstractStructBase
{
    /**
     * The behoerdeKreisschluessel
     * @var string|null
     */
    public ?string $behoerdeKreisschluessel = null;
    /**
     * The behoerdeZusatzziffer
     * @var string|null
     */
    public ?string $behoerdeZusatzziffer = null;
    /**
     * The behoerdeNebenstelle
     * @var string|null
     */
    public ?string $behoerdeNebenstelle = null;
    /**
     * Constructor method for Type.ReferenzStrassenverkehrsBehoerde
     * @uses Type_ReferenzStrassenverkehrsBehoerde::setBehoerdeKreisschluessel()
     * @uses Type_ReferenzStrassenverkehrsBehoerde::setBehoerdeZusatzziffer()
     * @uses Type_ReferenzStrassenverkehrsBehoerde::setBehoerdeNebenstelle()
     * @param string $behoerdeKreisschluessel
     * @param string $behoerdeZusatzziffer
     * @param string $behoerdeNebenstelle
     */
    public function __construct(?string $behoerdeKreisschluessel = null, ?string $behoerdeZusatzziffer = null, ?string $behoerdeNebenstelle = null)
    {
        $this
            ->setBehoerdeKreisschluessel($behoerdeKreisschluessel)
            ->setBehoerdeZusatzziffer($behoerdeZusatzziffer)
            ->setBehoerdeNebenstelle($behoerdeNebenstelle);
    }
    /**
     * Get behoerdeKreisschluessel value
     * @return string|null
     */
    public function getBehoerdeKreisschluessel(): ?string
    {
        return $this->behoerdeKreisschluessel;
    }
    /**
     * Set behoerdeKreisschluessel value
     * @param string $behoerdeKreisschluessel
     * @return \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde
     */
    public function setBehoerdeKreisschluessel(?string $behoerdeKreisschluessel = null): self
    {
        $this->behoerdeKreisschluessel = $behoerdeKreisschluessel;
        
        return $this;
    }
    /**
     * Get behoerdeZusatzziffer value
     * @return string|null
     */
    public function getBehoerdeZusatzziffer(): ?string
    {
        return $this->behoerdeZusatzziffer;
    }
    /**
     * Set behoerdeZusatzziffer value
     * @param string $behoerdeZusatzziffer
     * @return \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde
     */
    public function setBehoerdeZusatzziffer(?string $behoerdeZusatzziffer = null): self
    {
        $this->behoerdeZusatzziffer = $behoerdeZusatzziffer;
        
        return $this;
    }
    /**
     * Get behoerdeNebenstelle value
     * @return string|null
     */
    public function getBehoerdeNebenstelle(): ?string
    {
        return $this->behoerdeNebenstelle;
    }
    /**
     * Set behoerdeNebenstelle value
     * @param string $behoerdeNebenstelle
     * @return \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde
     */
    public function setBehoerdeNebenstelle(?string $behoerdeNebenstelle = null): self
    {
        $this->behoerdeNebenstelle = $behoerdeNebenstelle;
        
        return $this;
    }
}

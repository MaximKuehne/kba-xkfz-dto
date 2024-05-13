<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ReferenzStrassenverkehrsBehoerde StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ReferenzStrassenverkehrsBehoerde extends AbstractStructBase
{
    /**
     * The behoerdeKreisschluessel
     */
    public ?string $behoerdeKreisschluessel = null;

    /**
     * The behoerdeZusatzziffer
     */
    public ?string $behoerdeZusatzziffer = null;

    /**
     * The behoerdeNebenstelle
     */
    public ?string $behoerdeNebenstelle = null;

    /**
     * Constructor method for Type.ReferenzStrassenverkehrsBehoerde
     *
     * @uses Type_ReferenzStrassenverkehrsBehoerde::setBehoerdeKreisschluessel()
     * @uses Type_ReferenzStrassenverkehrsBehoerde::setBehoerdeZusatzziffer()
     * @uses Type_ReferenzStrassenverkehrsBehoerde::setBehoerdeNebenstelle()
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
     */
    public function getBehoerdeKreisschluessel(): ?string
    {
        return $this->behoerdeKreisschluessel;
    }

    /**
     * Set behoerdeKreisschluessel value
     */
    public function setBehoerdeKreisschluessel(?string $behoerdeKreisschluessel = null): self
    {
        $this->behoerdeKreisschluessel = $behoerdeKreisschluessel;

        return $this;
    }

    /**
     * Get behoerdeZusatzziffer value
     */
    public function getBehoerdeZusatzziffer(): ?string
    {
        return $this->behoerdeZusatzziffer;
    }

    /**
     * Set behoerdeZusatzziffer value
     */
    public function setBehoerdeZusatzziffer(?string $behoerdeZusatzziffer = null): self
    {
        $this->behoerdeZusatzziffer = $behoerdeZusatzziffer;

        return $this;
    }

    /**
     * Get behoerdeNebenstelle value
     */
    public function getBehoerdeNebenstelle(): ?string
    {
        return $this->behoerdeNebenstelle;
    }

    /**
     * Set behoerdeNebenstelle value
     */
    public function setBehoerdeNebenstelle(?string $behoerdeNebenstelle = null): self
    {
        $this->behoerdeNebenstelle = $behoerdeNebenstelle;

        return $this;
    }
}

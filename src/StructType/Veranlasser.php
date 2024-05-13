<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Veranlasser StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Veranlasser extends AbstractStructBase
{
    /**
     * The MeldendeBehoerdeKreisschluessel
     */
    public ?string $MeldendeBehoerdeKreisschluessel = null;

    /**
     * The MeldendeBehoerdeZusatzziffer
     */
    public ?string $MeldendeBehoerdeZusatzziffer = null;

    /**
     * Constructor method for Veranlasser
     *
     * @uses Veranlasser::setMeldendeBehoerdeKreisschluessel()
     * @uses Veranlasser::setMeldendeBehoerdeZusatzziffer()
     */
    public function __construct(?string $meldendeBehoerdeKreisschluessel = null, ?string $meldendeBehoerdeZusatzziffer = null)
    {
        $this
            ->setMeldendeBehoerdeKreisschluessel($meldendeBehoerdeKreisschluessel)
            ->setMeldendeBehoerdeZusatzziffer($meldendeBehoerdeZusatzziffer);
    }

    /**
     * Get MeldendeBehoerdeKreisschluessel value
     */
    public function getMeldendeBehoerdeKreisschluessel(): ?string
    {
        return $this->MeldendeBehoerdeKreisschluessel;
    }

    /**
     * Set MeldendeBehoerdeKreisschluessel value
     */
    public function setMeldendeBehoerdeKreisschluessel(?string $meldendeBehoerdeKreisschluessel = null): self
    {
        $this->MeldendeBehoerdeKreisschluessel = $meldendeBehoerdeKreisschluessel;

        return $this;
    }

    /**
     * Get MeldendeBehoerdeZusatzziffer value
     */
    public function getMeldendeBehoerdeZusatzziffer(): ?string
    {
        return $this->MeldendeBehoerdeZusatzziffer;
    }

    /**
     * Set MeldendeBehoerdeZusatzziffer value
     */
    public function setMeldendeBehoerdeZusatzziffer(?string $meldendeBehoerdeZusatzziffer = null): self
    {
        $this->MeldendeBehoerdeZusatzziffer = $meldendeBehoerdeZusatzziffer;

        return $this;
    }
}

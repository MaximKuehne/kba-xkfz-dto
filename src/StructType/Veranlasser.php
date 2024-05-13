<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Veranlasser StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Veranlasser extends AbstractStructBase
{
    /**
     * The MeldendeBehoerdeKreisschluessel
     * @var string|null
     */
    public ?string $MeldendeBehoerdeKreisschluessel = null;
    /**
     * The MeldendeBehoerdeZusatzziffer
     * @var string|null
     */
    public ?string $MeldendeBehoerdeZusatzziffer = null;
    /**
     * Constructor method for Veranlasser
     * @uses Veranlasser::setMeldendeBehoerdeKreisschluessel()
     * @uses Veranlasser::setMeldendeBehoerdeZusatzziffer()
     * @param string $meldendeBehoerdeKreisschluessel
     * @param string $meldendeBehoerdeZusatzziffer
     */
    public function __construct(?string $meldendeBehoerdeKreisschluessel = null, ?string $meldendeBehoerdeZusatzziffer = null)
    {
        $this
            ->setMeldendeBehoerdeKreisschluessel($meldendeBehoerdeKreisschluessel)
            ->setMeldendeBehoerdeZusatzziffer($meldendeBehoerdeZusatzziffer);
    }
    /**
     * Get MeldendeBehoerdeKreisschluessel value
     * @return string|null
     */
    public function getMeldendeBehoerdeKreisschluessel(): ?string
    {
        return $this->MeldendeBehoerdeKreisschluessel;
    }
    /**
     * Set MeldendeBehoerdeKreisschluessel value
     * @param string $meldendeBehoerdeKreisschluessel
     * @return \THAG\XKfz\StructType\Veranlasser
     */
    public function setMeldendeBehoerdeKreisschluessel(?string $meldendeBehoerdeKreisschluessel = null): self
    {
        $this->MeldendeBehoerdeKreisschluessel = $meldendeBehoerdeKreisschluessel;
        
        return $this;
    }
    /**
     * Get MeldendeBehoerdeZusatzziffer value
     * @return string|null
     */
    public function getMeldendeBehoerdeZusatzziffer(): ?string
    {
        return $this->MeldendeBehoerdeZusatzziffer;
    }
    /**
     * Set MeldendeBehoerdeZusatzziffer value
     * @param string $meldendeBehoerdeZusatzziffer
     * @return \THAG\XKfz\StructType\Veranlasser
     */
    public function setMeldendeBehoerdeZusatzziffer(?string $meldendeBehoerdeZusatzziffer = null): self
    {
        $this->MeldendeBehoerdeZusatzziffer = $meldendeBehoerdeZusatzziffer;
        
        return $this;
    }
}

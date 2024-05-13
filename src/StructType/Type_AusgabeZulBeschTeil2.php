<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AusgabeZulBeschTeil2 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AusgabeZulBeschTeil2 extends AbstractStructBase
{
    /**
     * The vorgangskomponentenIDAusgeber
     */
    public ?string $vorgangskomponentenIDAusgeber = null;

    /**
     * The datumAusgabe
     */
    public ?string $datumAusgabe = null;

    /**
     * The unterschriftAusgeber
     */
    public ?string $unterschriftAusgeber = null;

    /**
     * Constructor method for Type.AusgabeZulBeschTeil2
     *
     * @uses Type_AusgabeZulBeschTeil2::setVorgangskomponentenIDAusgeber()
     * @uses Type_AusgabeZulBeschTeil2::setDatumAusgabe()
     * @uses Type_AusgabeZulBeschTeil2::setUnterschriftAusgeber()
     */
    public function __construct(?string $vorgangskomponentenIDAusgeber = null, ?string $datumAusgabe = null, ?string $unterschriftAusgeber = null)
    {
        $this
            ->setVorgangskomponentenIDAusgeber($vorgangskomponentenIDAusgeber)
            ->setDatumAusgabe($datumAusgabe)
            ->setUnterschriftAusgeber($unterschriftAusgeber);
    }

    /**
     * Get vorgangskomponentenIDAusgeber value
     */
    public function getVorgangskomponentenIDAusgeber(): ?string
    {
        return $this->vorgangskomponentenIDAusgeber;
    }

    /**
     * Set vorgangskomponentenIDAusgeber value
     */
    public function setVorgangskomponentenIDAusgeber(?string $vorgangskomponentenIDAusgeber = null): self
    {
        $this->vorgangskomponentenIDAusgeber = $vorgangskomponentenIDAusgeber;

        return $this;
    }

    /**
     * Get datumAusgabe value
     */
    public function getDatumAusgabe(): ?string
    {
        return $this->datumAusgabe;
    }

    /**
     * Set datumAusgabe value
     */
    public function setDatumAusgabe(?string $datumAusgabe = null): self
    {
        $this->datumAusgabe = $datumAusgabe;

        return $this;
    }

    /**
     * Get unterschriftAusgeber value
     */
    public function getUnterschriftAusgeber(): ?string
    {
        return $this->unterschriftAusgeber;
    }

    /**
     * Set unterschriftAusgeber value
     */
    public function setUnterschriftAusgeber(?string $unterschriftAusgeber = null): self
    {
        $this->unterschriftAusgeber = $unterschriftAusgeber;

        return $this;
    }
}

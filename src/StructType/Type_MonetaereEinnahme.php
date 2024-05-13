<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.MonetaereEinnahme StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_MonetaereEinnahme extends AbstractStructBase
{
    /**
     * The artDerMonetaerenEinnahme
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerMonetaerenEinnahme $artDerMonetaerenEinnahme = null;

    /**
     * The EntgelteGebuehren
     */
    public ?string $EntgelteGebuehren = null;

    /**
     * The betrag
     */
    public ?float $betrag = null;

    /**
     * Constructor method for Type.MonetaereEinnahme
     *
     * @uses Type_MonetaereEinnahme::setArtDerMonetaerenEinnahme()
     * @uses Type_MonetaereEinnahme::setEntgelteGebuehren()
     * @uses Type_MonetaereEinnahme::setBetrag()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_ArtDerMonetaerenEinnahme $artDerMonetaerenEinnahme = null, ?string $entgelteGebuehren = null, ?float $betrag = null)
    {
        $this
            ->setArtDerMonetaerenEinnahme($artDerMonetaerenEinnahme)
            ->setEntgelteGebuehren($entgelteGebuehren)
            ->setBetrag($betrag);
    }

    /**
     * Get artDerMonetaerenEinnahme value
     */
    public function getArtDerMonetaerenEinnahme(): ?\THAG\XKfz\StructType\Code_ArtDerMonetaerenEinnahme
    {
        return $this->artDerMonetaerenEinnahme;
    }

    /**
     * Set artDerMonetaerenEinnahme value
     */
    public function setArtDerMonetaerenEinnahme(?\THAG\XKfz\StructType\Code_ArtDerMonetaerenEinnahme $artDerMonetaerenEinnahme = null): self
    {
        $this->artDerMonetaerenEinnahme = $artDerMonetaerenEinnahme;

        return $this;
    }

    /**
     * Get EntgelteGebuehren value
     */
    public function getEntgelteGebuehren(): ?string
    {
        return $this->EntgelteGebuehren;
    }

    /**
     * Set EntgelteGebuehren value
     */
    public function setEntgelteGebuehren(?string $entgelteGebuehren = null): self
    {
        $this->EntgelteGebuehren = $entgelteGebuehren;

        return $this;
    }

    /**
     * Get betrag value
     */
    public function getBetrag(): ?float
    {
        return $this->betrag;
    }

    /**
     * Set betrag value
     */
    public function setBetrag(?float $betrag = null): self
    {
        $this->betrag = $betrag;

        return $this;
    }
}

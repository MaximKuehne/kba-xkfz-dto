<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.MonetaereEinnahme StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_MonetaereEinnahme extends AbstractStructBase
{
    /**
     * The artDerMonetaerenEinnahme
     * @var \THAG\XKfz\StructType\Code_ArtDerMonetaerenEinnahme|null
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerMonetaerenEinnahme $artDerMonetaerenEinnahme = null;
    /**
     * The EntgelteGebuehren
     * @var string|null
     */
    public ?string $EntgelteGebuehren = null;
    /**
     * The betrag
     * @var float|null
     */
    public ?float $betrag = null;
    /**
     * Constructor method for Type.MonetaereEinnahme
     * @uses Type_MonetaereEinnahme::setArtDerMonetaerenEinnahme()
     * @uses Type_MonetaereEinnahme::setEntgelteGebuehren()
     * @uses Type_MonetaereEinnahme::setBetrag()
     * @param \THAG\XKfz\StructType\Code_ArtDerMonetaerenEinnahme $artDerMonetaerenEinnahme
     * @param string $entgelteGebuehren
     * @param float $betrag
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
     * @return \THAG\XKfz\StructType\Code_ArtDerMonetaerenEinnahme|null
     */
    public function getArtDerMonetaerenEinnahme(): ?\THAG\XKfz\StructType\Code_ArtDerMonetaerenEinnahme
    {
        return $this->artDerMonetaerenEinnahme;
    }
    /**
     * Set artDerMonetaerenEinnahme value
     * @param \THAG\XKfz\StructType\Code_ArtDerMonetaerenEinnahme $artDerMonetaerenEinnahme
     * @return \THAG\XKfz\StructType\Type_MonetaereEinnahme
     */
    public function setArtDerMonetaerenEinnahme(?\THAG\XKfz\StructType\Code_ArtDerMonetaerenEinnahme $artDerMonetaerenEinnahme = null): self
    {
        $this->artDerMonetaerenEinnahme = $artDerMonetaerenEinnahme;
        
        return $this;
    }
    /**
     * Get EntgelteGebuehren value
     * @return string|null
     */
    public function getEntgelteGebuehren(): ?string
    {
        return $this->EntgelteGebuehren;
    }
    /**
     * Set EntgelteGebuehren value
     * @param string $entgelteGebuehren
     * @return \THAG\XKfz\StructType\Type_MonetaereEinnahme
     */
    public function setEntgelteGebuehren(?string $entgelteGebuehren = null): self
    {
        $this->EntgelteGebuehren = $entgelteGebuehren;
        
        return $this;
    }
    /**
     * Get betrag value
     * @return float|null
     */
    public function getBetrag(): ?float
    {
        return $this->betrag;
    }
    /**
     * Set betrag value
     * @param float $betrag
     * @return \THAG\XKfz\StructType\Type_MonetaereEinnahme
     */
    public function setBetrag(?float $betrag = null): self
    {
        $this->betrag = $betrag;
        
        return $this;
    }
}

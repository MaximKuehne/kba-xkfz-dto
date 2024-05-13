<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.KonfigurationGebuehren StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_KonfigurationGebuehren extends AbstractStructBase
{
    /**
     * The positionen
     * @var \THAG\XKfz\StructType\Type_ListeGebuehrenposition|null
     */
    public ?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $positionen = null;
    /**
     * The summePositionenGesamt
     * @var float|null
     */
    public ?float $summePositionenGesamt = null;
    /**
     * The bemerkung
     * @var string|null
     */
    public ?string $bemerkung = null;
    /**
     * Constructor method for Type.KonfigurationGebuehren
     * @uses Type_KonfigurationGebuehren::setPositionen()
     * @uses Type_KonfigurationGebuehren::setSummePositionenGesamt()
     * @uses Type_KonfigurationGebuehren::setBemerkung()
     * @param \THAG\XKfz\StructType\Type_ListeGebuehrenposition $positionen
     * @param float $summePositionenGesamt
     * @param string $bemerkung
     */
    public function __construct(?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $positionen = null, ?float $summePositionenGesamt = null, ?string $bemerkung = null)
    {
        $this
            ->setPositionen($positionen)
            ->setSummePositionenGesamt($summePositionenGesamt)
            ->setBemerkung($bemerkung);
    }
    /**
     * Get positionen value
     * @return \THAG\XKfz\StructType\Type_ListeGebuehrenposition|null
     */
    public function getPositionen(): ?\THAG\XKfz\StructType\Type_ListeGebuehrenposition
    {
        return $this->positionen;
    }
    /**
     * Set positionen value
     * @param \THAG\XKfz\StructType\Type_ListeGebuehrenposition $positionen
     * @return \THAG\XKfz\StructType\Type_KonfigurationGebuehren
     */
    public function setPositionen(?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $positionen = null): self
    {
        $this->positionen = $positionen;
        
        return $this;
    }
    /**
     * Get summePositionenGesamt value
     * @return float|null
     */
    public function getSummePositionenGesamt(): ?float
    {
        return $this->summePositionenGesamt;
    }
    /**
     * Set summePositionenGesamt value
     * @param float $summePositionenGesamt
     * @return \THAG\XKfz\StructType\Type_KonfigurationGebuehren
     */
    public function setSummePositionenGesamt(?float $summePositionenGesamt = null): self
    {
        $this->summePositionenGesamt = $summePositionenGesamt;
        
        return $this;
    }
    /**
     * Get bemerkung value
     * @return string|null
     */
    public function getBemerkung(): ?string
    {
        return $this->bemerkung;
    }
    /**
     * Set bemerkung value
     * @param string $bemerkung
     * @return \THAG\XKfz\StructType\Type_KonfigurationGebuehren
     */
    public function setBemerkung(?string $bemerkung = null): self
    {
        $this->bemerkung = $bemerkung;
        
        return $this;
    }
}

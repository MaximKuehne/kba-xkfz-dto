<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Gebuehrenrueckstandsliste StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Gebuehrenrueckstandsliste extends AbstractStructBase
{
    /**
     * The anzahlGebuehrenrueckstand
     * @var int|null
     */
    public ?int $anzahlGebuehrenrueckstand = null;
    /**
     * The gebuehrenrueckstand
     * @var \THAG\XKfz\StructType\Type_Gebuehrenrueckstand|null
     */
    public ?\THAG\XKfz\StructType\Type_Gebuehrenrueckstand $gebuehrenrueckstand = null;
    /**
     * Constructor method for Type.Gebuehrenrueckstandsliste
     * @uses Type_Gebuehrenrueckstandsliste::setAnzahlGebuehrenrueckstand()
     * @uses Type_Gebuehrenrueckstandsliste::setGebuehrenrueckstand()
     * @param int $anzahlGebuehrenrueckstand
     * @param \THAG\XKfz\StructType\Type_Gebuehrenrueckstand $gebuehrenrueckstand
     */
    public function __construct(?int $anzahlGebuehrenrueckstand = null, ?\THAG\XKfz\StructType\Type_Gebuehrenrueckstand $gebuehrenrueckstand = null)
    {
        $this
            ->setAnzahlGebuehrenrueckstand($anzahlGebuehrenrueckstand)
            ->setGebuehrenrueckstand($gebuehrenrueckstand);
    }
    /**
     * Get anzahlGebuehrenrueckstand value
     * @return int|null
     */
    public function getAnzahlGebuehrenrueckstand(): ?int
    {
        return $this->anzahlGebuehrenrueckstand;
    }
    /**
     * Set anzahlGebuehrenrueckstand value
     * @param int $anzahlGebuehrenrueckstand
     * @return \THAG\XKfz\StructType\Type_Gebuehrenrueckstandsliste
     */
    public function setAnzahlGebuehrenrueckstand(?int $anzahlGebuehrenrueckstand = null): self
    {
        $this->anzahlGebuehrenrueckstand = $anzahlGebuehrenrueckstand;
        
        return $this;
    }
    /**
     * Get gebuehrenrueckstand value
     * @return \THAG\XKfz\StructType\Type_Gebuehrenrueckstand|null
     */
    public function getGebuehrenrueckstand(): ?\THAG\XKfz\StructType\Type_Gebuehrenrueckstand
    {
        return $this->gebuehrenrueckstand;
    }
    /**
     * Set gebuehrenrueckstand value
     * @param \THAG\XKfz\StructType\Type_Gebuehrenrueckstand $gebuehrenrueckstand
     * @return \THAG\XKfz\StructType\Type_Gebuehrenrueckstandsliste
     */
    public function setGebuehrenrueckstand(?\THAG\XKfz\StructType\Type_Gebuehrenrueckstand $gebuehrenrueckstand = null): self
    {
        $this->gebuehrenrueckstand = $gebuehrenrueckstand;
        
        return $this;
    }
}

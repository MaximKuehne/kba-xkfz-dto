<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ErgebnisAbfrageGebuehrenrueckstand StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ErgebnisAbfrageGebuehrenrueckstand extends AbstractStructBase
{
    /**
     * The merkmalGebuehrenrueckstand
     * @var bool|null
     */
    public ?bool $merkmalGebuehrenrueckstand = null;
    /**
     * The listeGebuehrenrueckstand
     * @var \THAG\XKfz\StructType\Type_Gebuehrenrueckstandsliste|null
     */
    public ?\THAG\XKfz\StructType\Type_Gebuehrenrueckstandsliste $listeGebuehrenrueckstand = null;
    /**
     * Constructor method for Type.ErgebnisAbfrageGebuehrenrueckstand
     * @uses Type_ErgebnisAbfrageGebuehrenrueckstand::setMerkmalGebuehrenrueckstand()
     * @uses Type_ErgebnisAbfrageGebuehrenrueckstand::setListeGebuehrenrueckstand()
     * @param bool $merkmalGebuehrenrueckstand
     * @param \THAG\XKfz\StructType\Type_Gebuehrenrueckstandsliste $listeGebuehrenrueckstand
     */
    public function __construct(?bool $merkmalGebuehrenrueckstand = null, ?\THAG\XKfz\StructType\Type_Gebuehrenrueckstandsliste $listeGebuehrenrueckstand = null)
    {
        $this
            ->setMerkmalGebuehrenrueckstand($merkmalGebuehrenrueckstand)
            ->setListeGebuehrenrueckstand($listeGebuehrenrueckstand);
    }
    /**
     * Get merkmalGebuehrenrueckstand value
     * @return bool|null
     */
    public function getMerkmalGebuehrenrueckstand(): ?bool
    {
        return $this->merkmalGebuehrenrueckstand;
    }
    /**
     * Set merkmalGebuehrenrueckstand value
     * @param bool $merkmalGebuehrenrueckstand
     * @return \THAG\XKfz\StructType\Type_ErgebnisAbfrageGebuehrenrueckstand
     */
    public function setMerkmalGebuehrenrueckstand(?bool $merkmalGebuehrenrueckstand = null): self
    {
        $this->merkmalGebuehrenrueckstand = $merkmalGebuehrenrueckstand;
        
        return $this;
    }
    /**
     * Get listeGebuehrenrueckstand value
     * @return \THAG\XKfz\StructType\Type_Gebuehrenrueckstandsliste|null
     */
    public function getListeGebuehrenrueckstand(): ?\THAG\XKfz\StructType\Type_Gebuehrenrueckstandsliste
    {
        return $this->listeGebuehrenrueckstand;
    }
    /**
     * Set listeGebuehrenrueckstand value
     * @param \THAG\XKfz\StructType\Type_Gebuehrenrueckstandsliste $listeGebuehrenrueckstand
     * @return \THAG\XKfz\StructType\Type_ErgebnisAbfrageGebuehrenrueckstand
     */
    public function setListeGebuehrenrueckstand(?\THAG\XKfz\StructType\Type_Gebuehrenrueckstandsliste $listeGebuehrenrueckstand = null): self
    {
        $this->listeGebuehrenrueckstand = $listeGebuehrenrueckstand;
        
        return $this;
    }
}

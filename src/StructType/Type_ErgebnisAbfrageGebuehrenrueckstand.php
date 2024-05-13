<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ErgebnisAbfrageGebuehrenrueckstand StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ErgebnisAbfrageGebuehrenrueckstand extends AbstractStructBase
{
    /**
     * The merkmalGebuehrenrueckstand
     */
    public ?bool $merkmalGebuehrenrueckstand = null;

    /**
     * The listeGebuehrenrueckstand
     */
    public ?\THAG\XKfz\StructType\Type_Gebuehrenrueckstandsliste $listeGebuehrenrueckstand = null;

    /**
     * Constructor method for Type.ErgebnisAbfrageGebuehrenrueckstand
     *
     * @uses Type_ErgebnisAbfrageGebuehrenrueckstand::setMerkmalGebuehrenrueckstand()
     * @uses Type_ErgebnisAbfrageGebuehrenrueckstand::setListeGebuehrenrueckstand()
     */
    public function __construct(?bool $merkmalGebuehrenrueckstand = null, ?\THAG\XKfz\StructType\Type_Gebuehrenrueckstandsliste $listeGebuehrenrueckstand = null)
    {
        $this
            ->setMerkmalGebuehrenrueckstand($merkmalGebuehrenrueckstand)
            ->setListeGebuehrenrueckstand($listeGebuehrenrueckstand);
    }

    /**
     * Get merkmalGebuehrenrueckstand value
     */
    public function getMerkmalGebuehrenrueckstand(): ?bool
    {
        return $this->merkmalGebuehrenrueckstand;
    }

    /**
     * Set merkmalGebuehrenrueckstand value
     */
    public function setMerkmalGebuehrenrueckstand(?bool $merkmalGebuehrenrueckstand = null): self
    {
        $this->merkmalGebuehrenrueckstand = $merkmalGebuehrenrueckstand;

        return $this;
    }

    /**
     * Get listeGebuehrenrueckstand value
     */
    public function getListeGebuehrenrueckstand(): ?\THAG\XKfz\StructType\Type_Gebuehrenrueckstandsliste
    {
        return $this->listeGebuehrenrueckstand;
    }

    /**
     * Set listeGebuehrenrueckstand value
     */
    public function setListeGebuehrenrueckstand(?\THAG\XKfz\StructType\Type_Gebuehrenrueckstandsliste $listeGebuehrenrueckstand = null): self
    {
        $this->listeGebuehrenrueckstand = $listeGebuehrenrueckstand;

        return $this;
    }
}

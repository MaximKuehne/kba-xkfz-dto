<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.BasisVorgangskomponente StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_BasisVorgangskomponente extends AbstractStructBase
{
    /**
     * The vorgangskomponentenID
     */
    public ?string $vorgangskomponentenID = null;

    /**
     * Constructor method for Type.BasisVorgangskomponente
     *
     * @uses Type_BasisVorgangskomponente::setVorgangskomponentenID()
     */
    public function __construct(?string $vorgangskomponentenID = null)
    {
        $this
            ->setVorgangskomponentenID($vorgangskomponentenID);
    }

    /**
     * Get vorgangskomponentenID value
     */
    public function getVorgangskomponentenID(): ?string
    {
        return $this->vorgangskomponentenID;
    }

    /**
     * Set vorgangskomponentenID value
     */
    public function setVorgangskomponentenID(?string $vorgangskomponentenID = null): self
    {
        $this->vorgangskomponentenID = $vorgangskomponentenID;

        return $this;
    }
}

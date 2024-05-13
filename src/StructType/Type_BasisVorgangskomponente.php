<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.BasisVorgangskomponente StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_BasisVorgangskomponente extends AbstractStructBase
{
    /**
     * The vorgangskomponentenID
     * @var string|null
     */
    public ?string $vorgangskomponentenID = null;
    /**
     * Constructor method for Type.BasisVorgangskomponente
     * @uses Type_BasisVorgangskomponente::setVorgangskomponentenID()
     * @param string $vorgangskomponentenID
     */
    public function __construct(?string $vorgangskomponentenID = null)
    {
        $this
            ->setVorgangskomponentenID($vorgangskomponentenID);
    }
    /**
     * Get vorgangskomponentenID value
     * @return string|null
     */
    public function getVorgangskomponentenID(): ?string
    {
        return $this->vorgangskomponentenID;
    }
    /**
     * Set vorgangskomponentenID value
     * @param string $vorgangskomponentenID
     * @return \THAG\XKfz\StructType\Type_BasisVorgangskomponente
     */
    public function setVorgangskomponentenID(?string $vorgangskomponentenID = null): self
    {
        $this->vorgangskomponentenID = $vorgangskomponentenID;
        
        return $this;
    }
}

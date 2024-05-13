<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteCoC StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteCoC extends AbstractStructBase
{
    /**
     * The fahrzeugdaten
     * @var \THAG\XKfz\StructType\Type_FahrzeugdatenCoC|null
     */
    public ?\THAG\XKfz\StructType\Type_FahrzeugdatenCoC $fahrzeugdaten = null;
    /**
     * Constructor method for Type.VorgangskomponenteCoC
     * @uses Type_VorgangskomponenteCoC::setFahrzeugdaten()
     * @param \THAG\XKfz\StructType\Type_FahrzeugdatenCoC $fahrzeugdaten
     */
    public function __construct(?\THAG\XKfz\StructType\Type_FahrzeugdatenCoC $fahrzeugdaten = null)
    {
        $this
            ->setFahrzeugdaten($fahrzeugdaten);
    }
    /**
     * Get fahrzeugdaten value
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenCoC|null
     */
    public function getFahrzeugdaten(): ?\THAG\XKfz\StructType\Type_FahrzeugdatenCoC
    {
        return $this->fahrzeugdaten;
    }
    /**
     * Set fahrzeugdaten value
     * @param \THAG\XKfz\StructType\Type_FahrzeugdatenCoC $fahrzeugdaten
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteCoC
     */
    public function setFahrzeugdaten(?\THAG\XKfz\StructType\Type_FahrzeugdatenCoC $fahrzeugdaten = null): self
    {
        $this->fahrzeugdaten = $fahrzeugdaten;
        
        return $this;
    }
}

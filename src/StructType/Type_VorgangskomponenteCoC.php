<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteCoC StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteCoC extends AbstractStructBase
{
    /**
     * The fahrzeugdaten
     */
    public ?\THAG\XKfz\StructType\Type_FahrzeugdatenCoC $fahrzeugdaten = null;

    /**
     * Constructor method for Type.VorgangskomponenteCoC
     *
     * @uses Type_VorgangskomponenteCoC::setFahrzeugdaten()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_FahrzeugdatenCoC $fahrzeugdaten = null)
    {
        $this
            ->setFahrzeugdaten($fahrzeugdaten);
    }

    /**
     * Get fahrzeugdaten value
     */
    public function getFahrzeugdaten(): ?\THAG\XKfz\StructType\Type_FahrzeugdatenCoC
    {
        return $this->fahrzeugdaten;
    }

    /**
     * Set fahrzeugdaten value
     */
    public function setFahrzeugdaten(?\THAG\XKfz\StructType\Type_FahrzeugdatenCoC $fahrzeugdaten = null): self
    {
        $this->fahrzeugdaten = $fahrzeugdaten;

        return $this;
    }
}

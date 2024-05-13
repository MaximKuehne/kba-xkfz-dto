<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Zulassungsmitteilung.ErgebnisGebuehrenrueckstand.0402
 * StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Zulassungsmitteilung_ErgebnisGebuehrenrueckstand_0402 extends AbstractStructBase
{
    /**
     * The gebuehrenrueckstand
     */
    public ?\THAG\XKfz\StructType\Gebuehrenrueckstand $gebuehrenrueckstand = null;

    /**
     * Constructor method for
     * Type.Zulassungsmitteilung.ErgebnisGebuehrenrueckstand.0402
     *
     * @uses Type_Zulassungsmitteilung_ErgebnisGebuehrenrueckstand_0402::setGebuehrenrueckstand()
     */
    public function __construct(?\THAG\XKfz\StructType\Gebuehrenrueckstand $gebuehrenrueckstand = null)
    {
        $this
            ->setGebuehrenrueckstand($gebuehrenrueckstand);
    }

    /**
     * Get gebuehrenrueckstand value
     */
    public function getGebuehrenrueckstand(): ?\THAG\XKfz\StructType\Gebuehrenrueckstand
    {
        return $this->gebuehrenrueckstand;
    }

    /**
     * Set gebuehrenrueckstand value
     */
    public function setGebuehrenrueckstand(?\THAG\XKfz\StructType\Gebuehrenrueckstand $gebuehrenrueckstand = null): self
    {
        $this->gebuehrenrueckstand = $gebuehrenrueckstand;

        return $this;
    }
}

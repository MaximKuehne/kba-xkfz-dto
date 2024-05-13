<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Zulassungsmitteilung.ErgebnisGebuehrenrueckstand.0402
 * StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Zulassungsmitteilung_ErgebnisGebuehrenrueckstand_0402 extends AbstractStructBase
{
    /**
     * The gebuehrenrueckstand
     * @var \THAG\XKfz\StructType\Gebuehrenrueckstand|null
     */
    public ?\THAG\XKfz\StructType\Gebuehrenrueckstand $gebuehrenrueckstand = null;
    /**
     * Constructor method for
     * Type.Zulassungsmitteilung.ErgebnisGebuehrenrueckstand.0402
     * @uses Type_Zulassungsmitteilung_ErgebnisGebuehrenrueckstand_0402::setGebuehrenrueckstand()
     * @param \THAG\XKfz\StructType\Gebuehrenrueckstand $gebuehrenrueckstand
     */
    public function __construct(?\THAG\XKfz\StructType\Gebuehrenrueckstand $gebuehrenrueckstand = null)
    {
        $this
            ->setGebuehrenrueckstand($gebuehrenrueckstand);
    }
    /**
     * Get gebuehrenrueckstand value
     * @return \THAG\XKfz\StructType\Gebuehrenrueckstand|null
     */
    public function getGebuehrenrueckstand(): ?\THAG\XKfz\StructType\Gebuehrenrueckstand
    {
        return $this->gebuehrenrueckstand;
    }
    /**
     * Set gebuehrenrueckstand value
     * @param \THAG\XKfz\StructType\Gebuehrenrueckstand $gebuehrenrueckstand
     * @return \THAG\XKfz\StructType\Type_Zulassungsmitteilung_ErgebnisGebuehrenrueckstand_0402
     */
    public function setGebuehrenrueckstand(?\THAG\XKfz\StructType\Gebuehrenrueckstand $gebuehrenrueckstand = null): self
    {
        $this->gebuehrenrueckstand = $gebuehrenrueckstand;
        
        return $this;
    }
}

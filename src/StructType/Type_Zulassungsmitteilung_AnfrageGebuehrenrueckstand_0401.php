<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Zulassungsmitteilung.AnfrageGebuehrenrueckstand.0401
 * StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Zulassungsmitteilung_AnfrageGebuehrenrueckstand_0401 extends AbstractStructBase
{
    /**
     * The gebuehrenrueckstandAnfragen
     * @var \THAG\XKfz\StructType\GebuehrenrueckstandAnfragen|null
     */
    public ?\THAG\XKfz\StructType\GebuehrenrueckstandAnfragen $gebuehrenrueckstandAnfragen = null;
    /**
     * Constructor method for Type.Zulassungsmitteilung.AnfrageGebuehrenrueckstand.0401
     * @uses Type_Zulassungsmitteilung_AnfrageGebuehrenrueckstand_0401::setGebuehrenrueckstandAnfragen()
     * @param \THAG\XKfz\StructType\GebuehrenrueckstandAnfragen $gebuehrenrueckstandAnfragen
     */
    public function __construct(?\THAG\XKfz\StructType\GebuehrenrueckstandAnfragen $gebuehrenrueckstandAnfragen = null)
    {
        $this
            ->setGebuehrenrueckstandAnfragen($gebuehrenrueckstandAnfragen);
    }
    /**
     * Get gebuehrenrueckstandAnfragen value
     * @return \THAG\XKfz\StructType\GebuehrenrueckstandAnfragen|null
     */
    public function getGebuehrenrueckstandAnfragen(): ?\THAG\XKfz\StructType\GebuehrenrueckstandAnfragen
    {
        return $this->gebuehrenrueckstandAnfragen;
    }
    /**
     * Set gebuehrenrueckstandAnfragen value
     * @param \THAG\XKfz\StructType\GebuehrenrueckstandAnfragen $gebuehrenrueckstandAnfragen
     * @return \THAG\XKfz\StructType\Type_Zulassungsmitteilung_AnfrageGebuehrenrueckstand_0401
     */
    public function setGebuehrenrueckstandAnfragen(?\THAG\XKfz\StructType\GebuehrenrueckstandAnfragen $gebuehrenrueckstandAnfragen = null): self
    {
        $this->gebuehrenrueckstandAnfragen = $gebuehrenrueckstandAnfragen;
        
        return $this;
    }
}

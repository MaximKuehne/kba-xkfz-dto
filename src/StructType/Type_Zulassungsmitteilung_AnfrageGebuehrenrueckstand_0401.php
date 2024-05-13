<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Zulassungsmitteilung.AnfrageGebuehrenrueckstand.0401
 * StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Zulassungsmitteilung_AnfrageGebuehrenrueckstand_0401 extends AbstractStructBase
{
    /**
     * The gebuehrenrueckstandAnfragen
     */
    public ?\THAG\XKfz\StructType\GebuehrenrueckstandAnfragen $gebuehrenrueckstandAnfragen = null;

    /**
     * Constructor method for Type.Zulassungsmitteilung.AnfrageGebuehrenrueckstand.0401
     *
     * @uses Type_Zulassungsmitteilung_AnfrageGebuehrenrueckstand_0401::setGebuehrenrueckstandAnfragen()
     */
    public function __construct(?\THAG\XKfz\StructType\GebuehrenrueckstandAnfragen $gebuehrenrueckstandAnfragen = null)
    {
        $this
            ->setGebuehrenrueckstandAnfragen($gebuehrenrueckstandAnfragen);
    }

    /**
     * Get gebuehrenrueckstandAnfragen value
     */
    public function getGebuehrenrueckstandAnfragen(): ?\THAG\XKfz\StructType\GebuehrenrueckstandAnfragen
    {
        return $this->gebuehrenrueckstandAnfragen;
    }

    /**
     * Set gebuehrenrueckstandAnfragen value
     */
    public function setGebuehrenrueckstandAnfragen(?\THAG\XKfz\StructType\GebuehrenrueckstandAnfragen $gebuehrenrueckstandAnfragen = null): self
    {
        $this->gebuehrenrueckstandAnfragen = $gebuehrenrueckstandAnfragen;

        return $this;
    }
}

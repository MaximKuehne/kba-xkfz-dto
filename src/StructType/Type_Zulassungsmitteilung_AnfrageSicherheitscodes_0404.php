<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Zulassungsmitteilung.AnfrageSicherheitscodes.0404
 * StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Zulassungsmitteilung_AnfrageSicherheitscodes_0404 extends AbstractStructBase
{
    /**
     * The sicherheitscodesAnfragen
     */
    public ?\THAG\XKfz\StructType\SicherheitscodesAnfragen $sicherheitscodesAnfragen = null;

    /**
     * Constructor method for Type.Zulassungsmitteilung.AnfrageSicherheitscodes.0404
     *
     * @uses Type_Zulassungsmitteilung_AnfrageSicherheitscodes_0404::setSicherheitscodesAnfragen()
     */
    public function __construct(?\THAG\XKfz\StructType\SicherheitscodesAnfragen $sicherheitscodesAnfragen = null)
    {
        $this
            ->setSicherheitscodesAnfragen($sicherheitscodesAnfragen);
    }

    /**
     * Get sicherheitscodesAnfragen value
     */
    public function getSicherheitscodesAnfragen(): ?\THAG\XKfz\StructType\SicherheitscodesAnfragen
    {
        return $this->sicherheitscodesAnfragen;
    }

    /**
     * Set sicherheitscodesAnfragen value
     */
    public function setSicherheitscodesAnfragen(?\THAG\XKfz\StructType\SicherheitscodesAnfragen $sicherheitscodesAnfragen = null): self
    {
        $this->sicherheitscodesAnfragen = $sicherheitscodesAnfragen;

        return $this;
    }
}

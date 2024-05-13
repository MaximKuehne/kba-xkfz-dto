<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Zulassungsmitteilung.AnfrageSicherheitscodes.0404
 * StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Zulassungsmitteilung_AnfrageSicherheitscodes_0404 extends AbstractStructBase
{
    /**
     * The sicherheitscodesAnfragen
     * @var \THAG\XKfz\StructType\SicherheitscodesAnfragen|null
     */
    public ?\THAG\XKfz\StructType\SicherheitscodesAnfragen $sicherheitscodesAnfragen = null;
    /**
     * Constructor method for Type.Zulassungsmitteilung.AnfrageSicherheitscodes.0404
     * @uses Type_Zulassungsmitteilung_AnfrageSicherheitscodes_0404::setSicherheitscodesAnfragen()
     * @param \THAG\XKfz\StructType\SicherheitscodesAnfragen $sicherheitscodesAnfragen
     */
    public function __construct(?\THAG\XKfz\StructType\SicherheitscodesAnfragen $sicherheitscodesAnfragen = null)
    {
        $this
            ->setSicherheitscodesAnfragen($sicherheitscodesAnfragen);
    }
    /**
     * Get sicherheitscodesAnfragen value
     * @return \THAG\XKfz\StructType\SicherheitscodesAnfragen|null
     */
    public function getSicherheitscodesAnfragen(): ?\THAG\XKfz\StructType\SicherheitscodesAnfragen
    {
        return $this->sicherheitscodesAnfragen;
    }
    /**
     * Set sicherheitscodesAnfragen value
     * @param \THAG\XKfz\StructType\SicherheitscodesAnfragen $sicherheitscodesAnfragen
     * @return \THAG\XKfz\StructType\Type_Zulassungsmitteilung_AnfrageSicherheitscodes_0404
     */
    public function setSicherheitscodesAnfragen(?\THAG\XKfz\StructType\SicherheitscodesAnfragen $sicherheitscodesAnfragen = null): self
    {
        $this->sicherheitscodesAnfragen = $sicherheitscodesAnfragen;
        
        return $this;
    }
}

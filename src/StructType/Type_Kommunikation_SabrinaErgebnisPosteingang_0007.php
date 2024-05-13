<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kommunikation.SabrinaErgebnisPosteingang.0007
 * StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kommunikation_SabrinaErgebnisPosteingang_0007 extends AbstractStructBase
{
    /**
     * The sabrinaErgebnisPosteingang
     */
    public ?\THAG\XKfz\StructType\SabrinaErgebnisPosteingang $sabrinaErgebnisPosteingang = null;

    /**
     * Constructor method for Type.Kommunikation.SabrinaErgebnisPosteingang.0007
     *
     * @uses Type_Kommunikation_SabrinaErgebnisPosteingang_0007::setSabrinaErgebnisPosteingang()
     */
    public function __construct(?\THAG\XKfz\StructType\SabrinaErgebnisPosteingang $sabrinaErgebnisPosteingang = null)
    {
        $this
            ->setSabrinaErgebnisPosteingang($sabrinaErgebnisPosteingang);
    }

    /**
     * Get sabrinaErgebnisPosteingang value
     */
    public function getSabrinaErgebnisPosteingang(): ?\THAG\XKfz\StructType\SabrinaErgebnisPosteingang
    {
        return $this->sabrinaErgebnisPosteingang;
    }

    /**
     * Set sabrinaErgebnisPosteingang value
     */
    public function setSabrinaErgebnisPosteingang(?\THAG\XKfz\StructType\SabrinaErgebnisPosteingang $sabrinaErgebnisPosteingang = null): self
    {
        $this->sabrinaErgebnisPosteingang = $sabrinaErgebnisPosteingang;

        return $this;
    }
}

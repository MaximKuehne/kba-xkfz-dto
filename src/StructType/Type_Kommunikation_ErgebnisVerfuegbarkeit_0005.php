<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kommunikation.ErgebnisVerfuegbarkeit.0005 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kommunikation_ErgebnisVerfuegbarkeit_0005 extends AbstractStructBase
{
    /**
     * The ergebnisVerfuegbarkeit
     */
    public ?\THAG\XKfz\StructType\ErgebnisVerfuegbarkeit $ergebnisVerfuegbarkeit = null;

    /**
     * Constructor method for Type.Kommunikation.ErgebnisVerfuegbarkeit.0005
     *
     * @uses Type_Kommunikation_ErgebnisVerfuegbarkeit_0005::setErgebnisVerfuegbarkeit()
     */
    public function __construct(?\THAG\XKfz\StructType\ErgebnisVerfuegbarkeit $ergebnisVerfuegbarkeit = null)
    {
        $this
            ->setErgebnisVerfuegbarkeit($ergebnisVerfuegbarkeit);
    }

    /**
     * Get ergebnisVerfuegbarkeit value
     */
    public function getErgebnisVerfuegbarkeit(): ?\THAG\XKfz\StructType\ErgebnisVerfuegbarkeit
    {
        return $this->ergebnisVerfuegbarkeit;
    }

    /**
     * Set ergebnisVerfuegbarkeit value
     */
    public function setErgebnisVerfuegbarkeit(?\THAG\XKfz\StructType\ErgebnisVerfuegbarkeit $ergebnisVerfuegbarkeit = null): self
    {
        $this->ergebnisVerfuegbarkeit = $ergebnisVerfuegbarkeit;

        return $this;
    }
}

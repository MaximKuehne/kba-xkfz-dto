<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kommunikation.ErgebnisVerfuegbarkeit.0005 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kommunikation_ErgebnisVerfuegbarkeit_0005 extends AbstractStructBase
{
    /**
     * The ergebnisVerfuegbarkeit
     * @var \THAG\XKfz\StructType\ErgebnisVerfuegbarkeit|null
     */
    public ?\THAG\XKfz\StructType\ErgebnisVerfuegbarkeit $ergebnisVerfuegbarkeit = null;
    /**
     * Constructor method for Type.Kommunikation.ErgebnisVerfuegbarkeit.0005
     * @uses Type_Kommunikation_ErgebnisVerfuegbarkeit_0005::setErgebnisVerfuegbarkeit()
     * @param \THAG\XKfz\StructType\ErgebnisVerfuegbarkeit $ergebnisVerfuegbarkeit
     */
    public function __construct(?\THAG\XKfz\StructType\ErgebnisVerfuegbarkeit $ergebnisVerfuegbarkeit = null)
    {
        $this
            ->setErgebnisVerfuegbarkeit($ergebnisVerfuegbarkeit);
    }
    /**
     * Get ergebnisVerfuegbarkeit value
     * @return \THAG\XKfz\StructType\ErgebnisVerfuegbarkeit|null
     */
    public function getErgebnisVerfuegbarkeit(): ?\THAG\XKfz\StructType\ErgebnisVerfuegbarkeit
    {
        return $this->ergebnisVerfuegbarkeit;
    }
    /**
     * Set ergebnisVerfuegbarkeit value
     * @param \THAG\XKfz\StructType\ErgebnisVerfuegbarkeit $ergebnisVerfuegbarkeit
     * @return \THAG\XKfz\StructType\Type_Kommunikation_ErgebnisVerfuegbarkeit_0005
     */
    public function setErgebnisVerfuegbarkeit(?\THAG\XKfz\StructType\ErgebnisVerfuegbarkeit $ergebnisVerfuegbarkeit = null): self
    {
        $this->ergebnisVerfuegbarkeit = $ergebnisVerfuegbarkeit;
        
        return $this;
    }
}

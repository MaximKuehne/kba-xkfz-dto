<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kommunikation.AnfrageVerfuegbarkeit.0004 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kommunikation_AnfrageVerfuegbarkeit_0004 extends AbstractStructBase
{
    /**
     * The anfrageVerfuegbarkeit
     * @var \THAG\XKfz\StructType\AnfrageVerfuegbarkeit|null
     */
    public ?\THAG\XKfz\StructType\AnfrageVerfuegbarkeit $anfrageVerfuegbarkeit = null;
    /**
     * The signatur
     * @var string|null
     */
    public ?string $signatur = null;
    /**
     * Constructor method for Type.Kommunikation.AnfrageVerfuegbarkeit.0004
     * @uses Type_Kommunikation_AnfrageVerfuegbarkeit_0004::setAnfrageVerfuegbarkeit()
     * @uses Type_Kommunikation_AnfrageVerfuegbarkeit_0004::setSignatur()
     * @param \THAG\XKfz\StructType\AnfrageVerfuegbarkeit $anfrageVerfuegbarkeit
     * @param string $signatur
     */
    public function __construct(?\THAG\XKfz\StructType\AnfrageVerfuegbarkeit $anfrageVerfuegbarkeit = null, ?string $signatur = null)
    {
        $this
            ->setAnfrageVerfuegbarkeit($anfrageVerfuegbarkeit)
            ->setSignatur($signatur);
    }
    /**
     * Get anfrageVerfuegbarkeit value
     * @return \THAG\XKfz\StructType\AnfrageVerfuegbarkeit|null
     */
    public function getAnfrageVerfuegbarkeit(): ?\THAG\XKfz\StructType\AnfrageVerfuegbarkeit
    {
        return $this->anfrageVerfuegbarkeit;
    }
    /**
     * Set anfrageVerfuegbarkeit value
     * @param \THAG\XKfz\StructType\AnfrageVerfuegbarkeit $anfrageVerfuegbarkeit
     * @return \THAG\XKfz\StructType\Type_Kommunikation_AnfrageVerfuegbarkeit_0004
     */
    public function setAnfrageVerfuegbarkeit(?\THAG\XKfz\StructType\AnfrageVerfuegbarkeit $anfrageVerfuegbarkeit = null): self
    {
        $this->anfrageVerfuegbarkeit = $anfrageVerfuegbarkeit;
        
        return $this;
    }
    /**
     * Get signatur value
     * @return string|null
     */
    public function getSignatur(): ?string
    {
        return $this->signatur;
    }
    /**
     * Set signatur value
     * @param string $signatur
     * @return \THAG\XKfz\StructType\Type_Kommunikation_AnfrageVerfuegbarkeit_0004
     */
    public function setSignatur(?string $signatur = null): self
    {
        $this->signatur = $signatur;
        
        return $this;
    }
}

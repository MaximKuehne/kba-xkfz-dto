<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kommunikation.SabrinaAnfragePosteingang.0006
 * StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kommunikation_SabrinaAnfragePosteingang_0006 extends AbstractStructBase
{
    /**
     * The sabrinaAnfragePosteingang
     * @var \THAG\XKfz\StructType\SabrinaAnfragePosteingang|null
     */
    public ?\THAG\XKfz\StructType\SabrinaAnfragePosteingang $sabrinaAnfragePosteingang = null;
    /**
     * The signatur
     * @var string|null
     */
    public ?string $signatur = null;
    /**
     * Constructor method for Type.Kommunikation.SabrinaAnfragePosteingang.0006
     * @uses Type_Kommunikation_SabrinaAnfragePosteingang_0006::setSabrinaAnfragePosteingang()
     * @uses Type_Kommunikation_SabrinaAnfragePosteingang_0006::setSignatur()
     * @param \THAG\XKfz\StructType\SabrinaAnfragePosteingang $sabrinaAnfragePosteingang
     * @param string $signatur
     */
    public function __construct(?\THAG\XKfz\StructType\SabrinaAnfragePosteingang $sabrinaAnfragePosteingang = null, ?string $signatur = null)
    {
        $this
            ->setSabrinaAnfragePosteingang($sabrinaAnfragePosteingang)
            ->setSignatur($signatur);
    }
    /**
     * Get sabrinaAnfragePosteingang value
     * @return \THAG\XKfz\StructType\SabrinaAnfragePosteingang|null
     */
    public function getSabrinaAnfragePosteingang(): ?\THAG\XKfz\StructType\SabrinaAnfragePosteingang
    {
        return $this->sabrinaAnfragePosteingang;
    }
    /**
     * Set sabrinaAnfragePosteingang value
     * @param \THAG\XKfz\StructType\SabrinaAnfragePosteingang $sabrinaAnfragePosteingang
     * @return \THAG\XKfz\StructType\Type_Kommunikation_SabrinaAnfragePosteingang_0006
     */
    public function setSabrinaAnfragePosteingang(?\THAG\XKfz\StructType\SabrinaAnfragePosteingang $sabrinaAnfragePosteingang = null): self
    {
        $this->sabrinaAnfragePosteingang = $sabrinaAnfragePosteingang;
        
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
     * @return \THAG\XKfz\StructType\Type_Kommunikation_SabrinaAnfragePosteingang_0006
     */
    public function setSignatur(?string $signatur = null): self
    {
        $this->signatur = $signatur;
        
        return $this;
    }
}

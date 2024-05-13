<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kommunikation.SabrinaAnfragePosteingang.0006
 * StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kommunikation_SabrinaAnfragePosteingang_0006 extends AbstractStructBase
{
    /**
     * The sabrinaAnfragePosteingang
     */
    public ?\THAG\XKfz\StructType\SabrinaAnfragePosteingang $sabrinaAnfragePosteingang = null;

    /**
     * The signatur
     */
    public ?string $signatur = null;

    /**
     * Constructor method for Type.Kommunikation.SabrinaAnfragePosteingang.0006
     *
     * @uses Type_Kommunikation_SabrinaAnfragePosteingang_0006::setSabrinaAnfragePosteingang()
     * @uses Type_Kommunikation_SabrinaAnfragePosteingang_0006::setSignatur()
     */
    public function __construct(?\THAG\XKfz\StructType\SabrinaAnfragePosteingang $sabrinaAnfragePosteingang = null, ?string $signatur = null)
    {
        $this
            ->setSabrinaAnfragePosteingang($sabrinaAnfragePosteingang)
            ->setSignatur($signatur);
    }

    /**
     * Get sabrinaAnfragePosteingang value
     */
    public function getSabrinaAnfragePosteingang(): ?\THAG\XKfz\StructType\SabrinaAnfragePosteingang
    {
        return $this->sabrinaAnfragePosteingang;
    }

    /**
     * Set sabrinaAnfragePosteingang value
     */
    public function setSabrinaAnfragePosteingang(?\THAG\XKfz\StructType\SabrinaAnfragePosteingang $sabrinaAnfragePosteingang = null): self
    {
        $this->sabrinaAnfragePosteingang = $sabrinaAnfragePosteingang;

        return $this;
    }

    /**
     * Get signatur value
     */
    public function getSignatur(): ?string
    {
        return $this->signatur;
    }

    /**
     * Set signatur value
     */
    public function setSignatur(?string $signatur = null): self
    {
        $this->signatur = $signatur;

        return $this;
    }
}

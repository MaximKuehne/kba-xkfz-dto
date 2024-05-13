<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kommunikation.SabrinaAbruf.0008 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kommunikation_SabrinaAbruf_0008 extends AbstractStructBase
{
    /**
     * The sabrinaAbruf
     */
    public ?\THAG\XKfz\StructType\SabrinaAbruf $sabrinaAbruf = null;

    /**
     * The signatur
     */
    public ?string $signatur = null;

    /**
     * Constructor method for Type.Kommunikation.SabrinaAbruf.0008
     *
     * @uses Type_Kommunikation_SabrinaAbruf_0008::setSabrinaAbruf()
     * @uses Type_Kommunikation_SabrinaAbruf_0008::setSignatur()
     */
    public function __construct(?\THAG\XKfz\StructType\SabrinaAbruf $sabrinaAbruf = null, ?string $signatur = null)
    {
        $this
            ->setSabrinaAbruf($sabrinaAbruf)
            ->setSignatur($signatur);
    }

    /**
     * Get sabrinaAbruf value
     */
    public function getSabrinaAbruf(): ?\THAG\XKfz\StructType\SabrinaAbruf
    {
        return $this->sabrinaAbruf;
    }

    /**
     * Set sabrinaAbruf value
     */
    public function setSabrinaAbruf(?\THAG\XKfz\StructType\SabrinaAbruf $sabrinaAbruf = null): self
    {
        $this->sabrinaAbruf = $sabrinaAbruf;

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

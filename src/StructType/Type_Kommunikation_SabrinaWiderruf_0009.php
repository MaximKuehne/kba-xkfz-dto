<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kommunikation.SabrinaWiderruf.0009 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kommunikation_SabrinaWiderruf_0009 extends AbstractStructBase
{
    /**
     * The sabrinaWiderruf
     */
    public ?\THAG\XKfz\StructType\SabrinaWiderruf $sabrinaWiderruf = null;

    /**
     * The signatur
     */
    public ?string $signatur = null;

    /**
     * Constructor method for Type.Kommunikation.SabrinaWiderruf.0009
     *
     * @uses Type_Kommunikation_SabrinaWiderruf_0009::setSabrinaWiderruf()
     * @uses Type_Kommunikation_SabrinaWiderruf_0009::setSignatur()
     */
    public function __construct(?\THAG\XKfz\StructType\SabrinaWiderruf $sabrinaWiderruf = null, ?string $signatur = null)
    {
        $this
            ->setSabrinaWiderruf($sabrinaWiderruf)
            ->setSignatur($signatur);
    }

    /**
     * Get sabrinaWiderruf value
     */
    public function getSabrinaWiderruf(): ?\THAG\XKfz\StructType\SabrinaWiderruf
    {
        return $this->sabrinaWiderruf;
    }

    /**
     * Set sabrinaWiderruf value
     */
    public function setSabrinaWiderruf(?\THAG\XKfz\StructType\SabrinaWiderruf $sabrinaWiderruf = null): self
    {
        $this->sabrinaWiderruf = $sabrinaWiderruf;

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

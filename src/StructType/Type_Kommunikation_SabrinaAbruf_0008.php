<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kommunikation.SabrinaAbruf.0008 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kommunikation_SabrinaAbruf_0008 extends AbstractStructBase
{
    /**
     * The sabrinaAbruf
     * @var \THAG\XKfz\StructType\SabrinaAbruf|null
     */
    public ?\THAG\XKfz\StructType\SabrinaAbruf $sabrinaAbruf = null;
    /**
     * The signatur
     * @var string|null
     */
    public ?string $signatur = null;
    /**
     * Constructor method for Type.Kommunikation.SabrinaAbruf.0008
     * @uses Type_Kommunikation_SabrinaAbruf_0008::setSabrinaAbruf()
     * @uses Type_Kommunikation_SabrinaAbruf_0008::setSignatur()
     * @param \THAG\XKfz\StructType\SabrinaAbruf $sabrinaAbruf
     * @param string $signatur
     */
    public function __construct(?\THAG\XKfz\StructType\SabrinaAbruf $sabrinaAbruf = null, ?string $signatur = null)
    {
        $this
            ->setSabrinaAbruf($sabrinaAbruf)
            ->setSignatur($signatur);
    }
    /**
     * Get sabrinaAbruf value
     * @return \THAG\XKfz\StructType\SabrinaAbruf|null
     */
    public function getSabrinaAbruf(): ?\THAG\XKfz\StructType\SabrinaAbruf
    {
        return $this->sabrinaAbruf;
    }
    /**
     * Set sabrinaAbruf value
     * @param \THAG\XKfz\StructType\SabrinaAbruf $sabrinaAbruf
     * @return \THAG\XKfz\StructType\Type_Kommunikation_SabrinaAbruf_0008
     */
    public function setSabrinaAbruf(?\THAG\XKfz\StructType\SabrinaAbruf $sabrinaAbruf = null): self
    {
        $this->sabrinaAbruf = $sabrinaAbruf;
        
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
     * @return \THAG\XKfz\StructType\Type_Kommunikation_SabrinaAbruf_0008
     */
    public function setSignatur(?string $signatur = null): self
    {
        $this->signatur = $signatur;
        
        return $this;
    }
}

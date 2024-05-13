<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sabrinaAbruf StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class SabrinaAbruf extends AbstractStructBase
{
    /**
     * The kommunikationskanal
     */
    public ?\THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal = null;

    /**
     * The nachrichtenid
     */
    public ?string $nachrichtenid = null;

    /**
     * Constructor method for sabrinaAbruf
     *
     * @uses SabrinaAbruf::setKommunikationskanal()
     * @uses SabrinaAbruf::setNachrichtenid()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal = null, ?string $nachrichtenid = null)
    {
        $this
            ->setKommunikationskanal($kommunikationskanal)
            ->setNachrichtenid($nachrichtenid);
    }

    /**
     * Get kommunikationskanal value
     */
    public function getKommunikationskanal(): ?\THAG\XKfz\StructType\Code_KommunikationskanalSABRINA
    {
        return $this->kommunikationskanal;
    }

    /**
     * Set kommunikationskanal value
     */
    public function setKommunikationskanal(?\THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal = null): self
    {
        $this->kommunikationskanal = $kommunikationskanal;

        return $this;
    }

    /**
     * Get nachrichtenid value
     */
    public function getNachrichtenid(): ?string
    {
        return $this->nachrichtenid;
    }

    /**
     * Set nachrichtenid value
     */
    public function setNachrichtenid(?string $nachrichtenid = null): self
    {
        $this->nachrichtenid = $nachrichtenid;

        return $this;
    }
}

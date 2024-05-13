<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.SabrinaTransportauftrag StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_SabrinaTransportauftrag extends AbstractStructBase
{
    /**
     * The kommunikationskanal
     */
    public ?\THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal = null;

    /**
     * The kommunikationsschritt
     */
    public ?\THAG\XKfz\StructType\Code_KommunikationsschrittSABRINA $kommunikationsschritt = null;

    /**
     * The referenz
     */
    public ?\THAG\XKfz\StructType\Type_Referenz $referenz = null;

    /**
     * The nachrichtenidBezugsnachricht
     */
    public ?string $nachrichtenidBezugsnachricht = null;

    /**
     * The signatur
     */
    public ?string $signatur = null;

    /**
     * Constructor method for Type.SabrinaTransportauftrag
     *
     * @uses Type_SabrinaTransportauftrag::setKommunikationskanal()
     * @uses Type_SabrinaTransportauftrag::setKommunikationsschritt()
     * @uses Type_SabrinaTransportauftrag::setReferenz()
     * @uses Type_SabrinaTransportauftrag::setNachrichtenidBezugsnachricht()
     * @uses Type_SabrinaTransportauftrag::setSignatur()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal = null, ?\THAG\XKfz\StructType\Code_KommunikationsschrittSABRINA $kommunikationsschritt = null, ?\THAG\XKfz\StructType\Type_Referenz $referenz = null, ?string $nachrichtenidBezugsnachricht = null, ?string $signatur = null)
    {
        $this
            ->setKommunikationskanal($kommunikationskanal)
            ->setKommunikationsschritt($kommunikationsschritt)
            ->setReferenz($referenz)
            ->setNachrichtenidBezugsnachricht($nachrichtenidBezugsnachricht)
            ->setSignatur($signatur);
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
     * Get kommunikationsschritt value
     */
    public function getKommunikationsschritt(): ?\THAG\XKfz\StructType\Code_KommunikationsschrittSABRINA
    {
        return $this->kommunikationsschritt;
    }

    /**
     * Set kommunikationsschritt value
     */
    public function setKommunikationsschritt(?\THAG\XKfz\StructType\Code_KommunikationsschrittSABRINA $kommunikationsschritt = null): self
    {
        $this->kommunikationsschritt = $kommunikationsschritt;

        return $this;
    }

    /**
     * Get referenz value
     */
    public function getReferenz(): ?\THAG\XKfz\StructType\Type_Referenz
    {
        return $this->referenz;
    }

    /**
     * Set referenz value
     */
    public function setReferenz(?\THAG\XKfz\StructType\Type_Referenz $referenz = null): self
    {
        $this->referenz = $referenz;

        return $this;
    }

    /**
     * Get nachrichtenidBezugsnachricht value
     */
    public function getNachrichtenidBezugsnachricht(): ?string
    {
        return $this->nachrichtenidBezugsnachricht;
    }

    /**
     * Set nachrichtenidBezugsnachricht value
     */
    public function setNachrichtenidBezugsnachricht(?string $nachrichtenidBezugsnachricht = null): self
    {
        $this->nachrichtenidBezugsnachricht = $nachrichtenidBezugsnachricht;

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

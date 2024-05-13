<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.SabrinaTransportauftrag StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_SabrinaTransportauftrag extends AbstractStructBase
{
    /**
     * The kommunikationskanal
     * @var \THAG\XKfz\StructType\Code_KommunikationskanalSABRINA|null
     */
    public ?\THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal = null;
    /**
     * The kommunikationsschritt
     * @var \THAG\XKfz\StructType\Code_KommunikationsschrittSABRINA|null
     */
    public ?\THAG\XKfz\StructType\Code_KommunikationsschrittSABRINA $kommunikationsschritt = null;
    /**
     * The referenz
     * @var \THAG\XKfz\StructType\Type_Referenz|null
     */
    public ?\THAG\XKfz\StructType\Type_Referenz $referenz = null;
    /**
     * The nachrichtenidBezugsnachricht
     * @var string|null
     */
    public ?string $nachrichtenidBezugsnachricht = null;
    /**
     * The signatur
     * @var string|null
     */
    public ?string $signatur = null;
    /**
     * Constructor method for Type.SabrinaTransportauftrag
     * @uses Type_SabrinaTransportauftrag::setKommunikationskanal()
     * @uses Type_SabrinaTransportauftrag::setKommunikationsschritt()
     * @uses Type_SabrinaTransportauftrag::setReferenz()
     * @uses Type_SabrinaTransportauftrag::setNachrichtenidBezugsnachricht()
     * @uses Type_SabrinaTransportauftrag::setSignatur()
     * @param \THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal
     * @param \THAG\XKfz\StructType\Code_KommunikationsschrittSABRINA $kommunikationsschritt
     * @param \THAG\XKfz\StructType\Type_Referenz $referenz
     * @param string $nachrichtenidBezugsnachricht
     * @param string $signatur
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
     * @return \THAG\XKfz\StructType\Code_KommunikationskanalSABRINA|null
     */
    public function getKommunikationskanal(): ?\THAG\XKfz\StructType\Code_KommunikationskanalSABRINA
    {
        return $this->kommunikationskanal;
    }
    /**
     * Set kommunikationskanal value
     * @param \THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal
     * @return \THAG\XKfz\StructType\Type_SabrinaTransportauftrag
     */
    public function setKommunikationskanal(?\THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal = null): self
    {
        $this->kommunikationskanal = $kommunikationskanal;
        
        return $this;
    }
    /**
     * Get kommunikationsschritt value
     * @return \THAG\XKfz\StructType\Code_KommunikationsschrittSABRINA|null
     */
    public function getKommunikationsschritt(): ?\THAG\XKfz\StructType\Code_KommunikationsschrittSABRINA
    {
        return $this->kommunikationsschritt;
    }
    /**
     * Set kommunikationsschritt value
     * @param \THAG\XKfz\StructType\Code_KommunikationsschrittSABRINA $kommunikationsschritt
     * @return \THAG\XKfz\StructType\Type_SabrinaTransportauftrag
     */
    public function setKommunikationsschritt(?\THAG\XKfz\StructType\Code_KommunikationsschrittSABRINA $kommunikationsschritt = null): self
    {
        $this->kommunikationsschritt = $kommunikationsschritt;
        
        return $this;
    }
    /**
     * Get referenz value
     * @return \THAG\XKfz\StructType\Type_Referenz|null
     */
    public function getReferenz(): ?\THAG\XKfz\StructType\Type_Referenz
    {
        return $this->referenz;
    }
    /**
     * Set referenz value
     * @param \THAG\XKfz\StructType\Type_Referenz $referenz
     * @return \THAG\XKfz\StructType\Type_SabrinaTransportauftrag
     */
    public function setReferenz(?\THAG\XKfz\StructType\Type_Referenz $referenz = null): self
    {
        $this->referenz = $referenz;
        
        return $this;
    }
    /**
     * Get nachrichtenidBezugsnachricht value
     * @return string|null
     */
    public function getNachrichtenidBezugsnachricht(): ?string
    {
        return $this->nachrichtenidBezugsnachricht;
    }
    /**
     * Set nachrichtenidBezugsnachricht value
     * @param string $nachrichtenidBezugsnachricht
     * @return \THAG\XKfz\StructType\Type_SabrinaTransportauftrag
     */
    public function setNachrichtenidBezugsnachricht(?string $nachrichtenidBezugsnachricht = null): self
    {
        $this->nachrichtenidBezugsnachricht = $nachrichtenidBezugsnachricht;
        
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
     * @return \THAG\XKfz\StructType\Type_SabrinaTransportauftrag
     */
    public function setSignatur(?string $signatur = null): self
    {
        $this->signatur = $signatur;
        
        return $this;
    }
}

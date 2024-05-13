<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sabrinaWiderruf StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class SabrinaWiderruf extends AbstractStructBase
{
    /**
     * The kommunikationskanal
     * @var \THAG\XKfz\StructType\Code_KommunikationskanalSABRINA|null
     */
    public ?\THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal = null;
    /**
     * The nachrichtenid
     * @var string|null
     */
    public ?string $nachrichtenid = null;
    /**
     * Constructor method for sabrinaWiderruf
     * @uses SabrinaWiderruf::setKommunikationskanal()
     * @uses SabrinaWiderruf::setNachrichtenid()
     * @param \THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal
     * @param string $nachrichtenid
     */
    public function __construct(?\THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal = null, ?string $nachrichtenid = null)
    {
        $this
            ->setKommunikationskanal($kommunikationskanal)
            ->setNachrichtenid($nachrichtenid);
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
     * @return \THAG\XKfz\StructType\SabrinaWiderruf
     */
    public function setKommunikationskanal(?\THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal = null): self
    {
        $this->kommunikationskanal = $kommunikationskanal;
        
        return $this;
    }
    /**
     * Get nachrichtenid value
     * @return string|null
     */
    public function getNachrichtenid(): ?string
    {
        return $this->nachrichtenid;
    }
    /**
     * Set nachrichtenid value
     * @param string $nachrichtenid
     * @return \THAG\XKfz\StructType\SabrinaWiderruf
     */
    public function setNachrichtenid(?string $nachrichtenid = null): self
    {
        $this->nachrichtenid = $nachrichtenid;
        
        return $this;
    }
}

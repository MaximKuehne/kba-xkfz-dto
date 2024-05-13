<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Supportinformation StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Supportinformation extends AbstractStructBase
{
    /**
     * The zustaendigerKommunikationspartner
     * @var \THAG\XKfz\StructType\Type_Kommunikationspartner|null
     */
    public ?\THAG\XKfz\StructType\Type_Kommunikationspartner $zustaendigerKommunikationspartner = null;
    /**
     * The supporteinheit
     * @var \THAG\XKfz\StructType\Code_Supporteinheit|null
     */
    public ?\THAG\XKfz\StructType\Code_Supporteinheit $supporteinheit = null;
    /**
     * The antragsnummer
     * @var string|null
     */
    public ?string $antragsnummer = null;
    /**
     * Constructor method for Type.Supportinformation
     * @uses Type_Supportinformation::setZustaendigerKommunikationspartner()
     * @uses Type_Supportinformation::setSupporteinheit()
     * @uses Type_Supportinformation::setAntragsnummer()
     * @param \THAG\XKfz\StructType\Type_Kommunikationspartner $zustaendigerKommunikationspartner
     * @param \THAG\XKfz\StructType\Code_Supporteinheit $supporteinheit
     * @param string $antragsnummer
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Kommunikationspartner $zustaendigerKommunikationspartner = null, ?\THAG\XKfz\StructType\Code_Supporteinheit $supporteinheit = null, ?string $antragsnummer = null)
    {
        $this
            ->setZustaendigerKommunikationspartner($zustaendigerKommunikationspartner)
            ->setSupporteinheit($supporteinheit)
            ->setAntragsnummer($antragsnummer);
    }
    /**
     * Get zustaendigerKommunikationspartner value
     * @return \THAG\XKfz\StructType\Type_Kommunikationspartner|null
     */
    public function getZustaendigerKommunikationspartner(): ?\THAG\XKfz\StructType\Type_Kommunikationspartner
    {
        return $this->zustaendigerKommunikationspartner;
    }
    /**
     * Set zustaendigerKommunikationspartner value
     * @param \THAG\XKfz\StructType\Type_Kommunikationspartner $zustaendigerKommunikationspartner
     * @return \THAG\XKfz\StructType\Type_Supportinformation
     */
    public function setZustaendigerKommunikationspartner(?\THAG\XKfz\StructType\Type_Kommunikationspartner $zustaendigerKommunikationspartner = null): self
    {
        $this->zustaendigerKommunikationspartner = $zustaendigerKommunikationspartner;
        
        return $this;
    }
    /**
     * Get supporteinheit value
     * @return \THAG\XKfz\StructType\Code_Supporteinheit|null
     */
    public function getSupporteinheit(): ?\THAG\XKfz\StructType\Code_Supporteinheit
    {
        return $this->supporteinheit;
    }
    /**
     * Set supporteinheit value
     * @param \THAG\XKfz\StructType\Code_Supporteinheit $supporteinheit
     * @return \THAG\XKfz\StructType\Type_Supportinformation
     */
    public function setSupporteinheit(?\THAG\XKfz\StructType\Code_Supporteinheit $supporteinheit = null): self
    {
        $this->supporteinheit = $supporteinheit;
        
        return $this;
    }
    /**
     * Get antragsnummer value
     * @return string|null
     */
    public function getAntragsnummer(): ?string
    {
        return $this->antragsnummer;
    }
    /**
     * Set antragsnummer value
     * @param string $antragsnummer
     * @return \THAG\XKfz\StructType\Type_Supportinformation
     */
    public function setAntragsnummer(?string $antragsnummer = null): self
    {
        $this->antragsnummer = $antragsnummer;
        
        return $this;
    }
}

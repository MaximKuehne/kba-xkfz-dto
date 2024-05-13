<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Supportinformation StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Supportinformation extends AbstractStructBase
{
    /**
     * The zustaendigerKommunikationspartner
     */
    public ?\THAG\XKfz\StructType\Type_Kommunikationspartner $zustaendigerKommunikationspartner = null;

    /**
     * The supporteinheit
     */
    public ?\THAG\XKfz\StructType\Code_Supporteinheit $supporteinheit = null;

    /**
     * The antragsnummer
     */
    public ?string $antragsnummer = null;

    /**
     * Constructor method for Type.Supportinformation
     *
     * @uses Type_Supportinformation::setZustaendigerKommunikationspartner()
     * @uses Type_Supportinformation::setSupporteinheit()
     * @uses Type_Supportinformation::setAntragsnummer()
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
     */
    public function getZustaendigerKommunikationspartner(): ?\THAG\XKfz\StructType\Type_Kommunikationspartner
    {
        return $this->zustaendigerKommunikationspartner;
    }

    /**
     * Set zustaendigerKommunikationspartner value
     */
    public function setZustaendigerKommunikationspartner(?\THAG\XKfz\StructType\Type_Kommunikationspartner $zustaendigerKommunikationspartner = null): self
    {
        $this->zustaendigerKommunikationspartner = $zustaendigerKommunikationspartner;

        return $this;
    }

    /**
     * Get supporteinheit value
     */
    public function getSupporteinheit(): ?\THAG\XKfz\StructType\Code_Supporteinheit
    {
        return $this->supporteinheit;
    }

    /**
     * Set supporteinheit value
     */
    public function setSupporteinheit(?\THAG\XKfz\StructType\Code_Supporteinheit $supporteinheit = null): self
    {
        $this->supporteinheit = $supporteinheit;

        return $this;
    }

    /**
     * Get antragsnummer value
     */
    public function getAntragsnummer(): ?string
    {
        return $this->antragsnummer;
    }

    /**
     * Set antragsnummer value
     */
    public function setAntragsnummer(?string $antragsnummer = null): self
    {
        $this->antragsnummer = $antragsnummer;

        return $this;
    }
}

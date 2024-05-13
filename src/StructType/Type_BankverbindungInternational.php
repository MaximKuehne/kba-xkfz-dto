<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.BankverbindungInternational StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_BankverbindungInternational extends AbstractStructBase
{
    /**
     * The iban
     */
    public ?string $iban = null;

    /**
     * The bic
     */
    public ?string $bic = null;

    /**
     * The artDesMandats
     */
    public ?\THAG\XKfz\StructType\Code_ArtDesMandats $artDesMandats = null;

    /**
     * The datumDerAusstellung
     */
    public ?string $datumDerAusstellung = null;

    /**
     * The mandatsreferenznummer
     */
    public ?string $mandatsreferenznummer = null;

    /**
     * The glaeubigerID
     */
    public ?string $glaeubigerID = null;

    /**
     * Constructor method for Type.BankverbindungInternational
     *
     * @uses Type_BankverbindungInternational::setIban()
     * @uses Type_BankverbindungInternational::setBic()
     * @uses Type_BankverbindungInternational::setArtDesMandats()
     * @uses Type_BankverbindungInternational::setDatumDerAusstellung()
     * @uses Type_BankverbindungInternational::setMandatsreferenznummer()
     * @uses Type_BankverbindungInternational::setGlaeubigerID()
     */
    public function __construct(?string $iban = null, ?string $bic = null, ?\THAG\XKfz\StructType\Code_ArtDesMandats $artDesMandats = null, ?string $datumDerAusstellung = null, ?string $mandatsreferenznummer = null, ?string $glaeubigerID = null)
    {
        $this
            ->setIban($iban)
            ->setBic($bic)
            ->setArtDesMandats($artDesMandats)
            ->setDatumDerAusstellung($datumDerAusstellung)
            ->setMandatsreferenznummer($mandatsreferenznummer)
            ->setGlaeubigerID($glaeubigerID);
    }

    /**
     * Get iban value
     */
    public function getIban(): ?string
    {
        return $this->iban;
    }

    /**
     * Set iban value
     */
    public function setIban(?string $iban = null): self
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * Get bic value
     */
    public function getBic(): ?string
    {
        return $this->bic;
    }

    /**
     * Set bic value
     */
    public function setBic(?string $bic = null): self
    {
        $this->bic = $bic;

        return $this;
    }

    /**
     * Get artDesMandats value
     */
    public function getArtDesMandats(): ?\THAG\XKfz\StructType\Code_ArtDesMandats
    {
        return $this->artDesMandats;
    }

    /**
     * Set artDesMandats value
     */
    public function setArtDesMandats(?\THAG\XKfz\StructType\Code_ArtDesMandats $artDesMandats = null): self
    {
        $this->artDesMandats = $artDesMandats;

        return $this;
    }

    /**
     * Get datumDerAusstellung value
     */
    public function getDatumDerAusstellung(): ?string
    {
        return $this->datumDerAusstellung;
    }

    /**
     * Set datumDerAusstellung value
     */
    public function setDatumDerAusstellung(?string $datumDerAusstellung = null): self
    {
        $this->datumDerAusstellung = $datumDerAusstellung;

        return $this;
    }

    /**
     * Get mandatsreferenznummer value
     */
    public function getMandatsreferenznummer(): ?string
    {
        return $this->mandatsreferenznummer;
    }

    /**
     * Set mandatsreferenznummer value
     */
    public function setMandatsreferenznummer(?string $mandatsreferenznummer = null): self
    {
        $this->mandatsreferenznummer = $mandatsreferenznummer;

        return $this;
    }

    /**
     * Get glaeubigerID value
     */
    public function getGlaeubigerID(): ?string
    {
        return $this->glaeubigerID;
    }

    /**
     * Set glaeubigerID value
     */
    public function setGlaeubigerID(?string $glaeubigerID = null): self
    {
        $this->glaeubigerID = $glaeubigerID;

        return $this;
    }
}

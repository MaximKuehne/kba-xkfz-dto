<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.BankverbindungInternational StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_BankverbindungInternational extends AbstractStructBase
{
    /**
     * The iban
     * @var string|null
     */
    public ?string $iban = null;
    /**
     * The bic
     * @var string|null
     */
    public ?string $bic = null;
    /**
     * The artDesMandats
     * @var \THAG\XKfz\StructType\Code_ArtDesMandats|null
     */
    public ?\THAG\XKfz\StructType\Code_ArtDesMandats $artDesMandats = null;
    /**
     * The datumDerAusstellung
     * @var string|null
     */
    public ?string $datumDerAusstellung = null;
    /**
     * The mandatsreferenznummer
     * @var string|null
     */
    public ?string $mandatsreferenznummer = null;
    /**
     * The glaeubigerID
     * @var string|null
     */
    public ?string $glaeubigerID = null;
    /**
     * Constructor method for Type.BankverbindungInternational
     * @uses Type_BankverbindungInternational::setIban()
     * @uses Type_BankverbindungInternational::setBic()
     * @uses Type_BankverbindungInternational::setArtDesMandats()
     * @uses Type_BankverbindungInternational::setDatumDerAusstellung()
     * @uses Type_BankverbindungInternational::setMandatsreferenznummer()
     * @uses Type_BankverbindungInternational::setGlaeubigerID()
     * @param string $iban
     * @param string $bic
     * @param \THAG\XKfz\StructType\Code_ArtDesMandats $artDesMandats
     * @param string $datumDerAusstellung
     * @param string $mandatsreferenznummer
     * @param string $glaeubigerID
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
     * @return string|null
     */
    public function getIban(): ?string
    {
        return $this->iban;
    }
    /**
     * Set iban value
     * @param string $iban
     * @return \THAG\XKfz\StructType\Type_BankverbindungInternational
     */
    public function setIban(?string $iban = null): self
    {
        $this->iban = $iban;
        
        return $this;
    }
    /**
     * Get bic value
     * @return string|null
     */
    public function getBic(): ?string
    {
        return $this->bic;
    }
    /**
     * Set bic value
     * @param string $bic
     * @return \THAG\XKfz\StructType\Type_BankverbindungInternational
     */
    public function setBic(?string $bic = null): self
    {
        $this->bic = $bic;
        
        return $this;
    }
    /**
     * Get artDesMandats value
     * @return \THAG\XKfz\StructType\Code_ArtDesMandats|null
     */
    public function getArtDesMandats(): ?\THAG\XKfz\StructType\Code_ArtDesMandats
    {
        return $this->artDesMandats;
    }
    /**
     * Set artDesMandats value
     * @param \THAG\XKfz\StructType\Code_ArtDesMandats $artDesMandats
     * @return \THAG\XKfz\StructType\Type_BankverbindungInternational
     */
    public function setArtDesMandats(?\THAG\XKfz\StructType\Code_ArtDesMandats $artDesMandats = null): self
    {
        $this->artDesMandats = $artDesMandats;
        
        return $this;
    }
    /**
     * Get datumDerAusstellung value
     * @return string|null
     */
    public function getDatumDerAusstellung(): ?string
    {
        return $this->datumDerAusstellung;
    }
    /**
     * Set datumDerAusstellung value
     * @param string $datumDerAusstellung
     * @return \THAG\XKfz\StructType\Type_BankverbindungInternational
     */
    public function setDatumDerAusstellung(?string $datumDerAusstellung = null): self
    {
        $this->datumDerAusstellung = $datumDerAusstellung;
        
        return $this;
    }
    /**
     * Get mandatsreferenznummer value
     * @return string|null
     */
    public function getMandatsreferenznummer(): ?string
    {
        return $this->mandatsreferenznummer;
    }
    /**
     * Set mandatsreferenznummer value
     * @param string $mandatsreferenznummer
     * @return \THAG\XKfz\StructType\Type_BankverbindungInternational
     */
    public function setMandatsreferenznummer(?string $mandatsreferenznummer = null): self
    {
        $this->mandatsreferenznummer = $mandatsreferenznummer;
        
        return $this;
    }
    /**
     * Get glaeubigerID value
     * @return string|null
     */
    public function getGlaeubigerID(): ?string
    {
        return $this->glaeubigerID;
    }
    /**
     * Set glaeubigerID value
     * @param string $glaeubigerID
     * @return \THAG\XKfz\StructType\Type_BankverbindungInternational
     */
    public function setGlaeubigerID(?string $glaeubigerID = null): self
    {
        $this->glaeubigerID = $glaeubigerID;
        
        return $this;
    }
}

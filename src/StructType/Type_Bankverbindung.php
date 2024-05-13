<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Bankverbindung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Bankverbindung extends AbstractStructBase
{
    /**
     * The nutzungBankverbindung
     * @var \THAG\XKfz\StructType\Type_NutzungBankverbindung|null
     */
    public ?\THAG\XKfz\StructType\Type_NutzungBankverbindung $nutzungBankverbindung = null;
    /**
     * The bankverbindungNational
     * @var \THAG\XKfz\StructType\Type_BankverbindungNational|null
     */
    public ?\THAG\XKfz\StructType\Type_BankverbindungNational $bankverbindungNational = null;
    /**
     * The bankverbindungInternational
     * @var \THAG\XKfz\StructType\Type_BankverbindungInternational|null
     */
    public ?\THAG\XKfz\StructType\Type_BankverbindungInternational $bankverbindungInternational = null;
    /**
     * The nameBankverbindung
     * @var string|null
     */
    public ?string $nameBankverbindung = null;
    /**
     * The kontoinhaber
     * @var string|null
     */
    public ?string $kontoinhaber = null;
    /**
     * The merkmalEinzugsermaechtigungErteilt
     * @var bool|null
     */
    public ?bool $merkmalEinzugsermaechtigungErteilt = null;
    /**
     * Constructor method for Type.Bankverbindung
     * @uses Type_Bankverbindung::setNutzungBankverbindung()
     * @uses Type_Bankverbindung::setBankverbindungNational()
     * @uses Type_Bankverbindung::setBankverbindungInternational()
     * @uses Type_Bankverbindung::setNameBankverbindung()
     * @uses Type_Bankverbindung::setKontoinhaber()
     * @uses Type_Bankverbindung::setMerkmalEinzugsermaechtigungErteilt()
     * @param \THAG\XKfz\StructType\Type_NutzungBankverbindung $nutzungBankverbindung
     * @param \THAG\XKfz\StructType\Type_BankverbindungNational $bankverbindungNational
     * @param \THAG\XKfz\StructType\Type_BankverbindungInternational $bankverbindungInternational
     * @param string $nameBankverbindung
     * @param string $kontoinhaber
     * @param bool $merkmalEinzugsermaechtigungErteilt
     */
    public function __construct(?\THAG\XKfz\StructType\Type_NutzungBankverbindung $nutzungBankverbindung = null, ?\THAG\XKfz\StructType\Type_BankverbindungNational $bankverbindungNational = null, ?\THAG\XKfz\StructType\Type_BankverbindungInternational $bankverbindungInternational = null, ?string $nameBankverbindung = null, ?string $kontoinhaber = null, ?bool $merkmalEinzugsermaechtigungErteilt = null)
    {
        $this
            ->setNutzungBankverbindung($nutzungBankverbindung)
            ->setBankverbindungNational($bankverbindungNational)
            ->setBankverbindungInternational($bankverbindungInternational)
            ->setNameBankverbindung($nameBankverbindung)
            ->setKontoinhaber($kontoinhaber)
            ->setMerkmalEinzugsermaechtigungErteilt($merkmalEinzugsermaechtigungErteilt);
    }
    /**
     * Get nutzungBankverbindung value
     * @return \THAG\XKfz\StructType\Type_NutzungBankverbindung|null
     */
    public function getNutzungBankverbindung(): ?\THAG\XKfz\StructType\Type_NutzungBankverbindung
    {
        return $this->nutzungBankverbindung;
    }
    /**
     * Set nutzungBankverbindung value
     * @param \THAG\XKfz\StructType\Type_NutzungBankverbindung $nutzungBankverbindung
     * @return \THAG\XKfz\StructType\Type_Bankverbindung
     */
    public function setNutzungBankverbindung(?\THAG\XKfz\StructType\Type_NutzungBankverbindung $nutzungBankverbindung = null): self
    {
        $this->nutzungBankverbindung = $nutzungBankverbindung;
        
        return $this;
    }
    /**
     * Get bankverbindungNational value
     * @return \THAG\XKfz\StructType\Type_BankverbindungNational|null
     */
    public function getBankverbindungNational(): ?\THAG\XKfz\StructType\Type_BankverbindungNational
    {
        return $this->bankverbindungNational;
    }
    /**
     * Set bankverbindungNational value
     * @param \THAG\XKfz\StructType\Type_BankverbindungNational $bankverbindungNational
     * @return \THAG\XKfz\StructType\Type_Bankverbindung
     */
    public function setBankverbindungNational(?\THAG\XKfz\StructType\Type_BankverbindungNational $bankverbindungNational = null): self
    {
        $this->bankverbindungNational = $bankverbindungNational;
        
        return $this;
    }
    /**
     * Get bankverbindungInternational value
     * @return \THAG\XKfz\StructType\Type_BankverbindungInternational|null
     */
    public function getBankverbindungInternational(): ?\THAG\XKfz\StructType\Type_BankverbindungInternational
    {
        return $this->bankverbindungInternational;
    }
    /**
     * Set bankverbindungInternational value
     * @param \THAG\XKfz\StructType\Type_BankverbindungInternational $bankverbindungInternational
     * @return \THAG\XKfz\StructType\Type_Bankverbindung
     */
    public function setBankverbindungInternational(?\THAG\XKfz\StructType\Type_BankverbindungInternational $bankverbindungInternational = null): self
    {
        $this->bankverbindungInternational = $bankverbindungInternational;
        
        return $this;
    }
    /**
     * Get nameBankverbindung value
     * @return string|null
     */
    public function getNameBankverbindung(): ?string
    {
        return $this->nameBankverbindung;
    }
    /**
     * Set nameBankverbindung value
     * @param string $nameBankverbindung
     * @return \THAG\XKfz\StructType\Type_Bankverbindung
     */
    public function setNameBankverbindung(?string $nameBankverbindung = null): self
    {
        $this->nameBankverbindung = $nameBankverbindung;
        
        return $this;
    }
    /**
     * Get kontoinhaber value
     * @return string|null
     */
    public function getKontoinhaber(): ?string
    {
        return $this->kontoinhaber;
    }
    /**
     * Set kontoinhaber value
     * @param string $kontoinhaber
     * @return \THAG\XKfz\StructType\Type_Bankverbindung
     */
    public function setKontoinhaber(?string $kontoinhaber = null): self
    {
        $this->kontoinhaber = $kontoinhaber;
        
        return $this;
    }
    /**
     * Get merkmalEinzugsermaechtigungErteilt value
     * @return bool|null
     */
    public function getMerkmalEinzugsermaechtigungErteilt(): ?bool
    {
        return $this->merkmalEinzugsermaechtigungErteilt;
    }
    /**
     * Set merkmalEinzugsermaechtigungErteilt value
     * @param bool $merkmalEinzugsermaechtigungErteilt
     * @return \THAG\XKfz\StructType\Type_Bankverbindung
     */
    public function setMerkmalEinzugsermaechtigungErteilt(?bool $merkmalEinzugsermaechtigungErteilt = null): self
    {
        $this->merkmalEinzugsermaechtigungErteilt = $merkmalEinzugsermaechtigungErteilt;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Bankverbindung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Bankverbindung extends AbstractStructBase
{
    /**
     * The nutzungBankverbindung
     */
    public ?\THAG\XKfz\StructType\Type_NutzungBankverbindung $nutzungBankverbindung = null;

    /**
     * The bankverbindungNational
     */
    public ?\THAG\XKfz\StructType\Type_BankverbindungNational $bankverbindungNational = null;

    /**
     * The bankverbindungInternational
     */
    public ?\THAG\XKfz\StructType\Type_BankverbindungInternational $bankverbindungInternational = null;

    /**
     * The nameBankverbindung
     */
    public ?string $nameBankverbindung = null;

    /**
     * The kontoinhaber
     */
    public ?string $kontoinhaber = null;

    /**
     * The merkmalEinzugsermaechtigungErteilt
     */
    public ?bool $merkmalEinzugsermaechtigungErteilt = null;

    /**
     * Constructor method for Type.Bankverbindung
     *
     * @uses Type_Bankverbindung::setNutzungBankverbindung()
     * @uses Type_Bankverbindung::setBankverbindungNational()
     * @uses Type_Bankverbindung::setBankverbindungInternational()
     * @uses Type_Bankverbindung::setNameBankverbindung()
     * @uses Type_Bankverbindung::setKontoinhaber()
     * @uses Type_Bankverbindung::setMerkmalEinzugsermaechtigungErteilt()
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
     */
    public function getNutzungBankverbindung(): ?\THAG\XKfz\StructType\Type_NutzungBankverbindung
    {
        return $this->nutzungBankverbindung;
    }

    /**
     * Set nutzungBankverbindung value
     */
    public function setNutzungBankverbindung(?\THAG\XKfz\StructType\Type_NutzungBankverbindung $nutzungBankverbindung = null): self
    {
        $this->nutzungBankverbindung = $nutzungBankverbindung;

        return $this;
    }

    /**
     * Get bankverbindungNational value
     */
    public function getBankverbindungNational(): ?\THAG\XKfz\StructType\Type_BankverbindungNational
    {
        return $this->bankverbindungNational;
    }

    /**
     * Set bankverbindungNational value
     */
    public function setBankverbindungNational(?\THAG\XKfz\StructType\Type_BankverbindungNational $bankverbindungNational = null): self
    {
        $this->bankverbindungNational = $bankverbindungNational;

        return $this;
    }

    /**
     * Get bankverbindungInternational value
     */
    public function getBankverbindungInternational(): ?\THAG\XKfz\StructType\Type_BankverbindungInternational
    {
        return $this->bankverbindungInternational;
    }

    /**
     * Set bankverbindungInternational value
     */
    public function setBankverbindungInternational(?\THAG\XKfz\StructType\Type_BankverbindungInternational $bankverbindungInternational = null): self
    {
        $this->bankverbindungInternational = $bankverbindungInternational;

        return $this;
    }

    /**
     * Get nameBankverbindung value
     */
    public function getNameBankverbindung(): ?string
    {
        return $this->nameBankverbindung;
    }

    /**
     * Set nameBankverbindung value
     */
    public function setNameBankverbindung(?string $nameBankverbindung = null): self
    {
        $this->nameBankverbindung = $nameBankverbindung;

        return $this;
    }

    /**
     * Get kontoinhaber value
     */
    public function getKontoinhaber(): ?string
    {
        return $this->kontoinhaber;
    }

    /**
     * Set kontoinhaber value
     */
    public function setKontoinhaber(?string $kontoinhaber = null): self
    {
        $this->kontoinhaber = $kontoinhaber;

        return $this;
    }

    /**
     * Get merkmalEinzugsermaechtigungErteilt value
     */
    public function getMerkmalEinzugsermaechtigungErteilt(): ?bool
    {
        return $this->merkmalEinzugsermaechtigungErteilt;
    }

    /**
     * Set merkmalEinzugsermaechtigungErteilt value
     */
    public function setMerkmalEinzugsermaechtigungErteilt(?bool $merkmalEinzugsermaechtigungErteilt = null): self
    {
        $this->merkmalEinzugsermaechtigungErteilt = $merkmalEinzugsermaechtigungErteilt;

        return $this;
    }
}

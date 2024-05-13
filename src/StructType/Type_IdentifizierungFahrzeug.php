<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.IdentifizierungFahrzeug StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_IdentifizierungFahrzeug extends AbstractStructBase
{
    /**
     * The fahrzeugidentifizierungsnummer
     */
    public ?string $fahrzeugidentifizierungsnummer = null;

    /**
     * The SchluesselHersteller
     */
    public ?string $SchluesselHersteller = null;

    /**
     * The TextHersteller
     */
    public ?string $TextHersteller = null;

    /**
     * The monatJahrErstzulassung
     */
    public ?string $monatJahrErstzulassung = null;

    /**
     * The laenderkennzeichen
     */
    public ?string $laenderkennzeichen = null;

    /**
     * The Kennzeichen
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;

    /**
     * Constructor method for Type.IdentifizierungFahrzeug
     *
     * @uses Type_IdentifizierungFahrzeug::setFahrzeugidentifizierungsnummer()
     * @uses Type_IdentifizierungFahrzeug::setSchluesselHersteller()
     * @uses Type_IdentifizierungFahrzeug::setTextHersteller()
     * @uses Type_IdentifizierungFahrzeug::setMonatJahrErstzulassung()
     * @uses Type_IdentifizierungFahrzeug::setLaenderkennzeichen()
     * @uses Type_IdentifizierungFahrzeug::setKennzeichen()
     */
    public function __construct(?string $fahrzeugidentifizierungsnummer = null, ?string $schluesselHersteller = null, ?string $textHersteller = null, ?string $monatJahrErstzulassung = null, ?string $laenderkennzeichen = null, ?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null)
    {
        $this
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer)
            ->setSchluesselHersteller($schluesselHersteller)
            ->setTextHersteller($textHersteller)
            ->setMonatJahrErstzulassung($monatJahrErstzulassung)
            ->setLaenderkennzeichen($laenderkennzeichen)
            ->setKennzeichen($kennzeichen);
    }

    /**
     * Get fahrzeugidentifizierungsnummer value
     */
    public function getFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->fahrzeugidentifizierungsnummer;
    }

    /**
     * Set fahrzeugidentifizierungsnummer value
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;

        return $this;
    }

    /**
     * Get SchluesselHersteller value
     */
    public function getSchluesselHersteller(): ?string
    {
        return $this->SchluesselHersteller;
    }

    /**
     * Set SchluesselHersteller value
     */
    public function setSchluesselHersteller(?string $schluesselHersteller = null): self
    {
        $this->SchluesselHersteller = $schluesselHersteller;

        return $this;
    }

    /**
     * Get TextHersteller value
     */
    public function getTextHersteller(): ?string
    {
        return $this->TextHersteller;
    }

    /**
     * Set TextHersteller value
     */
    public function setTextHersteller(?string $textHersteller = null): self
    {
        $this->TextHersteller = $textHersteller;

        return $this;
    }

    /**
     * Get monatJahrErstzulassung value
     */
    public function getMonatJahrErstzulassung(): ?string
    {
        return $this->monatJahrErstzulassung;
    }

    /**
     * Set monatJahrErstzulassung value
     */
    public function setMonatJahrErstzulassung(?string $monatJahrErstzulassung = null): self
    {
        $this->monatJahrErstzulassung = $monatJahrErstzulassung;

        return $this;
    }

    /**
     * Get laenderkennzeichen value
     */
    public function getLaenderkennzeichen(): ?string
    {
        return $this->laenderkennzeichen;
    }

    /**
     * Set laenderkennzeichen value
     */
    public function setLaenderkennzeichen(?string $laenderkennzeichen = null): self
    {
        $this->laenderkennzeichen = $laenderkennzeichen;

        return $this;
    }

    /**
     * Get Kennzeichen value
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }

    /**
     * Set Kennzeichen value
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;

        return $this;
    }
}

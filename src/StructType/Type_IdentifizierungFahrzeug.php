<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.IdentifizierungFahrzeug StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_IdentifizierungFahrzeug extends AbstractStructBase
{
    /**
     * The fahrzeugidentifizierungsnummer
     * @var string|null
     */
    public ?string $fahrzeugidentifizierungsnummer = null;
    /**
     * The SchluesselHersteller
     * @var string|null
     */
    public ?string $SchluesselHersteller = null;
    /**
     * The TextHersteller
     * @var string|null
     */
    public ?string $TextHersteller = null;
    /**
     * The monatJahrErstzulassung
     * @var string|null
     */
    public ?string $monatJahrErstzulassung = null;
    /**
     * The laenderkennzeichen
     * @var string|null
     */
    public ?string $laenderkennzeichen = null;
    /**
     * The Kennzeichen
     * @var \THAG\XKfz\StructType\Kennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;
    /**
     * Constructor method for Type.IdentifizierungFahrzeug
     * @uses Type_IdentifizierungFahrzeug::setFahrzeugidentifizierungsnummer()
     * @uses Type_IdentifizierungFahrzeug::setSchluesselHersteller()
     * @uses Type_IdentifizierungFahrzeug::setTextHersteller()
     * @uses Type_IdentifizierungFahrzeug::setMonatJahrErstzulassung()
     * @uses Type_IdentifizierungFahrzeug::setLaenderkennzeichen()
     * @uses Type_IdentifizierungFahrzeug::setKennzeichen()
     * @param string $fahrzeugidentifizierungsnummer
     * @param string $schluesselHersteller
     * @param string $textHersteller
     * @param string $monatJahrErstzulassung
     * @param string $laenderkennzeichen
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
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
     * @return string|null
     */
    public function getFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->fahrzeugidentifizierungsnummer;
    }
    /**
     * Set fahrzeugidentifizierungsnummer value
     * @param string $fahrzeugidentifizierungsnummer
     * @return \THAG\XKfz\StructType\Type_IdentifizierungFahrzeug
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;
        
        return $this;
    }
    /**
     * Get SchluesselHersteller value
     * @return string|null
     */
    public function getSchluesselHersteller(): ?string
    {
        return $this->SchluesselHersteller;
    }
    /**
     * Set SchluesselHersteller value
     * @param string $schluesselHersteller
     * @return \THAG\XKfz\StructType\Type_IdentifizierungFahrzeug
     */
    public function setSchluesselHersteller(?string $schluesselHersteller = null): self
    {
        $this->SchluesselHersteller = $schluesselHersteller;
        
        return $this;
    }
    /**
     * Get TextHersteller value
     * @return string|null
     */
    public function getTextHersteller(): ?string
    {
        return $this->TextHersteller;
    }
    /**
     * Set TextHersteller value
     * @param string $textHersteller
     * @return \THAG\XKfz\StructType\Type_IdentifizierungFahrzeug
     */
    public function setTextHersteller(?string $textHersteller = null): self
    {
        $this->TextHersteller = $textHersteller;
        
        return $this;
    }
    /**
     * Get monatJahrErstzulassung value
     * @return string|null
     */
    public function getMonatJahrErstzulassung(): ?string
    {
        return $this->monatJahrErstzulassung;
    }
    /**
     * Set monatJahrErstzulassung value
     * @param string $monatJahrErstzulassung
     * @return \THAG\XKfz\StructType\Type_IdentifizierungFahrzeug
     */
    public function setMonatJahrErstzulassung(?string $monatJahrErstzulassung = null): self
    {
        $this->monatJahrErstzulassung = $monatJahrErstzulassung;
        
        return $this;
    }
    /**
     * Get laenderkennzeichen value
     * @return string|null
     */
    public function getLaenderkennzeichen(): ?string
    {
        return $this->laenderkennzeichen;
    }
    /**
     * Set laenderkennzeichen value
     * @param string $laenderkennzeichen
     * @return \THAG\XKfz\StructType\Type_IdentifizierungFahrzeug
     */
    public function setLaenderkennzeichen(?string $laenderkennzeichen = null): self
    {
        $this->laenderkennzeichen = $laenderkennzeichen;
        
        return $this;
    }
    /**
     * Get Kennzeichen value
     * @return \THAG\XKfz\StructType\Kennzeichen|null
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }
    /**
     * Set Kennzeichen value
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @return \THAG\XKfz\StructType\Type_IdentifizierungFahrzeug
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
}

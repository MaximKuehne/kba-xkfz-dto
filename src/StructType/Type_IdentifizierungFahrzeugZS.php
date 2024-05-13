<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.IdentifizierungFahrzeugZS StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_IdentifizierungFahrzeugZS extends AbstractStructBase
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
     * The monatJahrErstzulassung
     * @var string|null
     */
    public ?string $monatJahrErstzulassung = null;
    /**
     * Constructor method for Type.IdentifizierungFahrzeugZS
     * @uses Type_IdentifizierungFahrzeugZS::setFahrzeugidentifizierungsnummer()
     * @uses Type_IdentifizierungFahrzeugZS::setSchluesselHersteller()
     * @uses Type_IdentifizierungFahrzeugZS::setMonatJahrErstzulassung()
     * @param string $fahrzeugidentifizierungsnummer
     * @param string $schluesselHersteller
     * @param string $monatJahrErstzulassung
     */
    public function __construct(?string $fahrzeugidentifizierungsnummer = null, ?string $schluesselHersteller = null, ?string $monatJahrErstzulassung = null)
    {
        $this
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer)
            ->setSchluesselHersteller($schluesselHersteller)
            ->setMonatJahrErstzulassung($monatJahrErstzulassung);
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
     * @return \THAG\XKfz\StructType\Type_IdentifizierungFahrzeugZS
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
     * @return \THAG\XKfz\StructType\Type_IdentifizierungFahrzeugZS
     */
    public function setSchluesselHersteller(?string $schluesselHersteller = null): self
    {
        $this->SchluesselHersteller = $schluesselHersteller;
        
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
     * @return \THAG\XKfz\StructType\Type_IdentifizierungFahrzeugZS
     */
    public function setMonatJahrErstzulassung(?string $monatJahrErstzulassung = null): self
    {
        $this->monatJahrErstzulassung = $monatJahrErstzulassung;
        
        return $this;
    }
}

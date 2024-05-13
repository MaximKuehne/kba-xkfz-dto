<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.IdentifizierungFahrzeugZS StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_IdentifizierungFahrzeugZS extends AbstractStructBase
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
     * The monatJahrErstzulassung
     */
    public ?string $monatJahrErstzulassung = null;

    /**
     * Constructor method for Type.IdentifizierungFahrzeugZS
     *
     * @uses Type_IdentifizierungFahrzeugZS::setFahrzeugidentifizierungsnummer()
     * @uses Type_IdentifizierungFahrzeugZS::setSchluesselHersteller()
     * @uses Type_IdentifizierungFahrzeugZS::setMonatJahrErstzulassung()
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
}

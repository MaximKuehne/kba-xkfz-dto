<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AnfrageZulBeschTeil2Vorhanden StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AnfrageZulBeschTeil2Vorhanden extends AbstractStructBase
{
    /**
     * The Fahrzeugidentifizierungsnummer
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;

    /**
     * The NummerZulBeschTeil2
     */
    public ?string $NummerZulBeschTeil2 = null;

    /**
     * The Kennzeichen
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;

    /**
     * The person
     */
    public ?\THAG\XKfz\StructType\Type_PersonZulBeschTeil2Vorhanden $person = null;

    /**
     * The merkmalErweiterteAuskunft
     */
    public ?bool $merkmalErweiterteAuskunft = null;

    /**
     * Constructor method for Type.AnfrageZulBeschTeil2Vorhanden
     *
     * @uses Type_AnfrageZulBeschTeil2Vorhanden::setFahrzeugidentifizierungsnummer()
     * @uses Type_AnfrageZulBeschTeil2Vorhanden::setNummerZulBeschTeil2()
     * @uses Type_AnfrageZulBeschTeil2Vorhanden::setKennzeichen()
     * @uses Type_AnfrageZulBeschTeil2Vorhanden::setPerson()
     * @uses Type_AnfrageZulBeschTeil2Vorhanden::setMerkmalErweiterteAuskunft()
     */
    public function __construct(?string $fahrzeugidentifizierungsnummer = null, ?string $nummerZulBeschTeil2 = null, ?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null, ?\THAG\XKfz\StructType\Type_PersonZulBeschTeil2Vorhanden $person = null, ?bool $merkmalErweiterteAuskunft = null)
    {
        $this
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer)
            ->setNummerZulBeschTeil2($nummerZulBeschTeil2)
            ->setKennzeichen($kennzeichen)
            ->setPerson($person)
            ->setMerkmalErweiterteAuskunft($merkmalErweiterteAuskunft);
    }

    /**
     * Get Fahrzeugidentifizierungsnummer value
     */
    public function getFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->Fahrzeugidentifizierungsnummer;
    }

    /**
     * Set Fahrzeugidentifizierungsnummer value
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->Fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;

        return $this;
    }

    /**
     * Get NummerZulBeschTeil2 value
     */
    public function getNummerZulBeschTeil2(): ?string
    {
        return $this->NummerZulBeschTeil2;
    }

    /**
     * Set NummerZulBeschTeil2 value
     */
    public function setNummerZulBeschTeil2(?string $nummerZulBeschTeil2 = null): self
    {
        $this->NummerZulBeschTeil2 = $nummerZulBeschTeil2;

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

    /**
     * Get person value
     */
    public function getPerson(): ?\THAG\XKfz\StructType\Type_PersonZulBeschTeil2Vorhanden
    {
        return $this->person;
    }

    /**
     * Set person value
     */
    public function setPerson(?\THAG\XKfz\StructType\Type_PersonZulBeschTeil2Vorhanden $person = null): self
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get merkmalErweiterteAuskunft value
     */
    public function getMerkmalErweiterteAuskunft(): ?bool
    {
        return $this->merkmalErweiterteAuskunft;
    }

    /**
     * Set merkmalErweiterteAuskunft value
     */
    public function setMerkmalErweiterteAuskunft(?bool $merkmalErweiterteAuskunft = null): self
    {
        $this->merkmalErweiterteAuskunft = $merkmalErweiterteAuskunft;

        return $this;
    }
}

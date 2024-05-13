<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FzRechercheAntwort StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FzRechercheAntwort extends AbstractStructBase
{
    /**
     * The Kennzeichen
     */
    public ?string $Kennzeichen = null;

    /**
     * The Versicherungsunternehmensnummer
     */
    public ?string $Versicherungsunternehmensnummer = null;

    /**
     * The SchluesselHersteller
     */
    public ?string $SchluesselHersteller = null;

    /**
     * The SchluesselTyp
     */
    public ?string $SchluesselTyp = null;

    /**
     * The Fahrzeugart
     */
    public ?string $Fahrzeugart = null;

    /**
     * The Fahrzeugidentifizierungsnummer
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;

    /**
     * The VerwendungFahrzeug
     */
    public ?string $VerwendungFahrzeug = null;

    /**
     * The MerkmalKennzeichenart
     */
    public ?string $MerkmalKennzeichenart = null;

    /**
     * The MerkmalWechselkennzeichen
     */
    public ?string $MerkmalWechselkennzeichen = null;

    /**
     * The KennzeichenZugehoerigesWechselkennzeichen
     */
    public ?string $KennzeichenZugehoerigesWechselkennzeichen = null;

    /**
     * The MerkmalElektrokennzeichen
     */
    public ?string $MerkmalElektrokennzeichen = null;

    /**
     * The MerkmalOldtimer
     */
    public ?string $MerkmalOldtimer = null;

    /**
     * The NameHalter
     */
    public ?string $NameHalter = null;

    /**
     * The ZustaendigeBehoerdeKreisschluessel
     */
    public ?string $ZustaendigeBehoerdeKreisschluessel = null;

    /**
     * The ZustaendigeBehoerdeZusatzziffer
     */
    public ?string $ZustaendigeBehoerdeZusatzziffer = null;

    /**
     * Constructor method for FzRechercheAntwort
     *
     * @uses FzRechercheAntwort::setKennzeichen()
     * @uses FzRechercheAntwort::setVersicherungsunternehmensnummer()
     * @uses FzRechercheAntwort::setSchluesselHersteller()
     * @uses FzRechercheAntwort::setSchluesselTyp()
     * @uses FzRechercheAntwort::setFahrzeugart()
     * @uses FzRechercheAntwort::setFahrzeugidentifizierungsnummer()
     * @uses FzRechercheAntwort::setVerwendungFahrzeug()
     * @uses FzRechercheAntwort::setMerkmalKennzeichenart()
     * @uses FzRechercheAntwort::setMerkmalWechselkennzeichen()
     * @uses FzRechercheAntwort::setKennzeichenZugehoerigesWechselkennzeichen()
     * @uses FzRechercheAntwort::setMerkmalElektrokennzeichen()
     * @uses FzRechercheAntwort::setMerkmalOldtimer()
     * @uses FzRechercheAntwort::setNameHalter()
     * @uses FzRechercheAntwort::setZustaendigeBehoerdeKreisschluessel()
     * @uses FzRechercheAntwort::setZustaendigeBehoerdeZusatzziffer()
     */
    public function __construct(?string $kennzeichen = null, ?string $versicherungsunternehmensnummer = null, ?string $schluesselHersteller = null, ?string $schluesselTyp = null, ?string $fahrzeugart = null, ?string $fahrzeugidentifizierungsnummer = null, ?string $verwendungFahrzeug = null, ?string $merkmalKennzeichenart = null, ?string $merkmalWechselkennzeichen = null, ?string $kennzeichenZugehoerigesWechselkennzeichen = null, ?string $merkmalElektrokennzeichen = null, ?string $merkmalOldtimer = null, ?string $nameHalter = null, ?string $zustaendigeBehoerdeKreisschluessel = null, ?string $zustaendigeBehoerdeZusatzziffer = null)
    {
        $this
            ->setKennzeichen($kennzeichen)
            ->setVersicherungsunternehmensnummer($versicherungsunternehmensnummer)
            ->setSchluesselHersteller($schluesselHersteller)
            ->setSchluesselTyp($schluesselTyp)
            ->setFahrzeugart($fahrzeugart)
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer)
            ->setVerwendungFahrzeug($verwendungFahrzeug)
            ->setMerkmalKennzeichenart($merkmalKennzeichenart)
            ->setMerkmalWechselkennzeichen($merkmalWechselkennzeichen)
            ->setKennzeichenZugehoerigesWechselkennzeichen($kennzeichenZugehoerigesWechselkennzeichen)
            ->setMerkmalElektrokennzeichen($merkmalElektrokennzeichen)
            ->setMerkmalOldtimer($merkmalOldtimer)
            ->setNameHalter($nameHalter)
            ->setZustaendigeBehoerdeKreisschluessel($zustaendigeBehoerdeKreisschluessel)
            ->setZustaendigeBehoerdeZusatzziffer($zustaendigeBehoerdeZusatzziffer);
    }

    /**
     * Get Kennzeichen value
     */
    public function getKennzeichen(): ?string
    {
        return $this->Kennzeichen;
    }

    /**
     * Set Kennzeichen value
     */
    public function setKennzeichen(?string $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;

        return $this;
    }

    /**
     * Get Versicherungsunternehmensnummer value
     */
    public function getVersicherungsunternehmensnummer(): ?string
    {
        return $this->Versicherungsunternehmensnummer;
    }

    /**
     * Set Versicherungsunternehmensnummer value
     */
    public function setVersicherungsunternehmensnummer(?string $versicherungsunternehmensnummer = null): self
    {
        $this->Versicherungsunternehmensnummer = $versicherungsunternehmensnummer;

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
     * Get SchluesselTyp value
     */
    public function getSchluesselTyp(): ?string
    {
        return $this->SchluesselTyp;
    }

    /**
     * Set SchluesselTyp value
     */
    public function setSchluesselTyp(?string $schluesselTyp = null): self
    {
        $this->SchluesselTyp = $schluesselTyp;

        return $this;
    }

    /**
     * Get Fahrzeugart value
     */
    public function getFahrzeugart(): ?string
    {
        return $this->Fahrzeugart;
    }

    /**
     * Set Fahrzeugart value
     */
    public function setFahrzeugart(?string $fahrzeugart = null): self
    {
        $this->Fahrzeugart = $fahrzeugart;

        return $this;
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
     * Get VerwendungFahrzeug value
     */
    public function getVerwendungFahrzeug(): ?string
    {
        return $this->VerwendungFahrzeug;
    }

    /**
     * Set VerwendungFahrzeug value
     */
    public function setVerwendungFahrzeug(?string $verwendungFahrzeug = null): self
    {
        $this->VerwendungFahrzeug = $verwendungFahrzeug;

        return $this;
    }

    /**
     * Get MerkmalKennzeichenart value
     */
    public function getMerkmalKennzeichenart(): ?string
    {
        return $this->MerkmalKennzeichenart;
    }

    /**
     * Set MerkmalKennzeichenart value
     */
    public function setMerkmalKennzeichenart(?string $merkmalKennzeichenart = null): self
    {
        $this->MerkmalKennzeichenart = $merkmalKennzeichenart;

        return $this;
    }

    /**
     * Get MerkmalWechselkennzeichen value
     */
    public function getMerkmalWechselkennzeichen(): ?string
    {
        return $this->MerkmalWechselkennzeichen;
    }

    /**
     * Set MerkmalWechselkennzeichen value
     */
    public function setMerkmalWechselkennzeichen(?string $merkmalWechselkennzeichen = null): self
    {
        $this->MerkmalWechselkennzeichen = $merkmalWechselkennzeichen;

        return $this;
    }

    /**
     * Get KennzeichenZugehoerigesWechselkennzeichen value
     */
    public function getKennzeichenZugehoerigesWechselkennzeichen(): ?string
    {
        return $this->KennzeichenZugehoerigesWechselkennzeichen;
    }

    /**
     * Set KennzeichenZugehoerigesWechselkennzeichen value
     */
    public function setKennzeichenZugehoerigesWechselkennzeichen(?string $kennzeichenZugehoerigesWechselkennzeichen = null): self
    {
        $this->KennzeichenZugehoerigesWechselkennzeichen = $kennzeichenZugehoerigesWechselkennzeichen;

        return $this;
    }

    /**
     * Get MerkmalElektrokennzeichen value
     */
    public function getMerkmalElektrokennzeichen(): ?string
    {
        return $this->MerkmalElektrokennzeichen;
    }

    /**
     * Set MerkmalElektrokennzeichen value
     */
    public function setMerkmalElektrokennzeichen(?string $merkmalElektrokennzeichen = null): self
    {
        $this->MerkmalElektrokennzeichen = $merkmalElektrokennzeichen;

        return $this;
    }

    /**
     * Get MerkmalOldtimer value
     */
    public function getMerkmalOldtimer(): ?string
    {
        return $this->MerkmalOldtimer;
    }

    /**
     * Set MerkmalOldtimer value
     */
    public function setMerkmalOldtimer(?string $merkmalOldtimer = null): self
    {
        $this->MerkmalOldtimer = $merkmalOldtimer;

        return $this;
    }

    /**
     * Get NameHalter value
     */
    public function getNameHalter(): ?string
    {
        return $this->NameHalter;
    }

    /**
     * Set NameHalter value
     */
    public function setNameHalter(?string $nameHalter = null): self
    {
        $this->NameHalter = $nameHalter;

        return $this;
    }

    /**
     * Get ZustaendigeBehoerdeKreisschluessel value
     */
    public function getZustaendigeBehoerdeKreisschluessel(): ?string
    {
        return $this->ZustaendigeBehoerdeKreisschluessel;
    }

    /**
     * Set ZustaendigeBehoerdeKreisschluessel value
     */
    public function setZustaendigeBehoerdeKreisschluessel(?string $zustaendigeBehoerdeKreisschluessel = null): self
    {
        $this->ZustaendigeBehoerdeKreisschluessel = $zustaendigeBehoerdeKreisschluessel;

        return $this;
    }

    /**
     * Get ZustaendigeBehoerdeZusatzziffer value
     */
    public function getZustaendigeBehoerdeZusatzziffer(): ?string
    {
        return $this->ZustaendigeBehoerdeZusatzziffer;
    }

    /**
     * Set ZustaendigeBehoerdeZusatzziffer value
     */
    public function setZustaendigeBehoerdeZusatzziffer(?string $zustaendigeBehoerdeZusatzziffer = null): self
    {
        $this->ZustaendigeBehoerdeZusatzziffer = $zustaendigeBehoerdeZusatzziffer;

        return $this;
    }
}

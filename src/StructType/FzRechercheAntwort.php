<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FzRechercheAntwort StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FzRechercheAntwort extends AbstractStructBase
{
    /**
     * The Kennzeichen
     * @var string|null
     */
    public ?string $Kennzeichen = null;
    /**
     * The Versicherungsunternehmensnummer
     * @var string|null
     */
    public ?string $Versicherungsunternehmensnummer = null;
    /**
     * The SchluesselHersteller
     * @var string|null
     */
    public ?string $SchluesselHersteller = null;
    /**
     * The SchluesselTyp
     * @var string|null
     */
    public ?string $SchluesselTyp = null;
    /**
     * The Fahrzeugart
     * @var string|null
     */
    public ?string $Fahrzeugart = null;
    /**
     * The Fahrzeugidentifizierungsnummer
     * @var string|null
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;
    /**
     * The VerwendungFahrzeug
     * @var string|null
     */
    public ?string $VerwendungFahrzeug = null;
    /**
     * The MerkmalKennzeichenart
     * @var string|null
     */
    public ?string $MerkmalKennzeichenart = null;
    /**
     * The MerkmalWechselkennzeichen
     * @var string|null
     */
    public ?string $MerkmalWechselkennzeichen = null;
    /**
     * The KennzeichenZugehoerigesWechselkennzeichen
     * @var string|null
     */
    public ?string $KennzeichenZugehoerigesWechselkennzeichen = null;
    /**
     * The MerkmalElektrokennzeichen
     * @var string|null
     */
    public ?string $MerkmalElektrokennzeichen = null;
    /**
     * The MerkmalOldtimer
     * @var string|null
     */
    public ?string $MerkmalOldtimer = null;
    /**
     * The NameHalter
     * @var string|null
     */
    public ?string $NameHalter = null;
    /**
     * The ZustaendigeBehoerdeKreisschluessel
     * @var string|null
     */
    public ?string $ZustaendigeBehoerdeKreisschluessel = null;
    /**
     * The ZustaendigeBehoerdeZusatzziffer
     * @var string|null
     */
    public ?string $ZustaendigeBehoerdeZusatzziffer = null;
    /**
     * Constructor method for FzRechercheAntwort
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
     * @param string $kennzeichen
     * @param string $versicherungsunternehmensnummer
     * @param string $schluesselHersteller
     * @param string $schluesselTyp
     * @param string $fahrzeugart
     * @param string $fahrzeugidentifizierungsnummer
     * @param string $verwendungFahrzeug
     * @param string $merkmalKennzeichenart
     * @param string $merkmalWechselkennzeichen
     * @param string $kennzeichenZugehoerigesWechselkennzeichen
     * @param string $merkmalElektrokennzeichen
     * @param string $merkmalOldtimer
     * @param string $nameHalter
     * @param string $zustaendigeBehoerdeKreisschluessel
     * @param string $zustaendigeBehoerdeZusatzziffer
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
     * @return string|null
     */
    public function getKennzeichen(): ?string
    {
        return $this->Kennzeichen;
    }
    /**
     * Set Kennzeichen value
     * @param string $kennzeichen
     * @return \THAG\XKfz\StructType\FzRechercheAntwort
     */
    public function setKennzeichen(?string $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get Versicherungsunternehmensnummer value
     * @return string|null
     */
    public function getVersicherungsunternehmensnummer(): ?string
    {
        return $this->Versicherungsunternehmensnummer;
    }
    /**
     * Set Versicherungsunternehmensnummer value
     * @param string $versicherungsunternehmensnummer
     * @return \THAG\XKfz\StructType\FzRechercheAntwort
     */
    public function setVersicherungsunternehmensnummer(?string $versicherungsunternehmensnummer = null): self
    {
        $this->Versicherungsunternehmensnummer = $versicherungsunternehmensnummer;
        
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
     * @return \THAG\XKfz\StructType\FzRechercheAntwort
     */
    public function setSchluesselHersteller(?string $schluesselHersteller = null): self
    {
        $this->SchluesselHersteller = $schluesselHersteller;
        
        return $this;
    }
    /**
     * Get SchluesselTyp value
     * @return string|null
     */
    public function getSchluesselTyp(): ?string
    {
        return $this->SchluesselTyp;
    }
    /**
     * Set SchluesselTyp value
     * @param string $schluesselTyp
     * @return \THAG\XKfz\StructType\FzRechercheAntwort
     */
    public function setSchluesselTyp(?string $schluesselTyp = null): self
    {
        $this->SchluesselTyp = $schluesselTyp;
        
        return $this;
    }
    /**
     * Get Fahrzeugart value
     * @return string|null
     */
    public function getFahrzeugart(): ?string
    {
        return $this->Fahrzeugart;
    }
    /**
     * Set Fahrzeugart value
     * @param string $fahrzeugart
     * @return \THAG\XKfz\StructType\FzRechercheAntwort
     */
    public function setFahrzeugart(?string $fahrzeugart = null): self
    {
        $this->Fahrzeugart = $fahrzeugart;
        
        return $this;
    }
    /**
     * Get Fahrzeugidentifizierungsnummer value
     * @return string|null
     */
    public function getFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->Fahrzeugidentifizierungsnummer;
    }
    /**
     * Set Fahrzeugidentifizierungsnummer value
     * @param string $fahrzeugidentifizierungsnummer
     * @return \THAG\XKfz\StructType\FzRechercheAntwort
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->Fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;
        
        return $this;
    }
    /**
     * Get VerwendungFahrzeug value
     * @return string|null
     */
    public function getVerwendungFahrzeug(): ?string
    {
        return $this->VerwendungFahrzeug;
    }
    /**
     * Set VerwendungFahrzeug value
     * @param string $verwendungFahrzeug
     * @return \THAG\XKfz\StructType\FzRechercheAntwort
     */
    public function setVerwendungFahrzeug(?string $verwendungFahrzeug = null): self
    {
        $this->VerwendungFahrzeug = $verwendungFahrzeug;
        
        return $this;
    }
    /**
     * Get MerkmalKennzeichenart value
     * @return string|null
     */
    public function getMerkmalKennzeichenart(): ?string
    {
        return $this->MerkmalKennzeichenart;
    }
    /**
     * Set MerkmalKennzeichenart value
     * @param string $merkmalKennzeichenart
     * @return \THAG\XKfz\StructType\FzRechercheAntwort
     */
    public function setMerkmalKennzeichenart(?string $merkmalKennzeichenart = null): self
    {
        $this->MerkmalKennzeichenart = $merkmalKennzeichenart;
        
        return $this;
    }
    /**
     * Get MerkmalWechselkennzeichen value
     * @return string|null
     */
    public function getMerkmalWechselkennzeichen(): ?string
    {
        return $this->MerkmalWechselkennzeichen;
    }
    /**
     * Set MerkmalWechselkennzeichen value
     * @param string $merkmalWechselkennzeichen
     * @return \THAG\XKfz\StructType\FzRechercheAntwort
     */
    public function setMerkmalWechselkennzeichen(?string $merkmalWechselkennzeichen = null): self
    {
        $this->MerkmalWechselkennzeichen = $merkmalWechselkennzeichen;
        
        return $this;
    }
    /**
     * Get KennzeichenZugehoerigesWechselkennzeichen value
     * @return string|null
     */
    public function getKennzeichenZugehoerigesWechselkennzeichen(): ?string
    {
        return $this->KennzeichenZugehoerigesWechselkennzeichen;
    }
    /**
     * Set KennzeichenZugehoerigesWechselkennzeichen value
     * @param string $kennzeichenZugehoerigesWechselkennzeichen
     * @return \THAG\XKfz\StructType\FzRechercheAntwort
     */
    public function setKennzeichenZugehoerigesWechselkennzeichen(?string $kennzeichenZugehoerigesWechselkennzeichen = null): self
    {
        $this->KennzeichenZugehoerigesWechselkennzeichen = $kennzeichenZugehoerigesWechselkennzeichen;
        
        return $this;
    }
    /**
     * Get MerkmalElektrokennzeichen value
     * @return string|null
     */
    public function getMerkmalElektrokennzeichen(): ?string
    {
        return $this->MerkmalElektrokennzeichen;
    }
    /**
     * Set MerkmalElektrokennzeichen value
     * @param string $merkmalElektrokennzeichen
     * @return \THAG\XKfz\StructType\FzRechercheAntwort
     */
    public function setMerkmalElektrokennzeichen(?string $merkmalElektrokennzeichen = null): self
    {
        $this->MerkmalElektrokennzeichen = $merkmalElektrokennzeichen;
        
        return $this;
    }
    /**
     * Get MerkmalOldtimer value
     * @return string|null
     */
    public function getMerkmalOldtimer(): ?string
    {
        return $this->MerkmalOldtimer;
    }
    /**
     * Set MerkmalOldtimer value
     * @param string $merkmalOldtimer
     * @return \THAG\XKfz\StructType\FzRechercheAntwort
     */
    public function setMerkmalOldtimer(?string $merkmalOldtimer = null): self
    {
        $this->MerkmalOldtimer = $merkmalOldtimer;
        
        return $this;
    }
    /**
     * Get NameHalter value
     * @return string|null
     */
    public function getNameHalter(): ?string
    {
        return $this->NameHalter;
    }
    /**
     * Set NameHalter value
     * @param string $nameHalter
     * @return \THAG\XKfz\StructType\FzRechercheAntwort
     */
    public function setNameHalter(?string $nameHalter = null): self
    {
        $this->NameHalter = $nameHalter;
        
        return $this;
    }
    /**
     * Get ZustaendigeBehoerdeKreisschluessel value
     * @return string|null
     */
    public function getZustaendigeBehoerdeKreisschluessel(): ?string
    {
        return $this->ZustaendigeBehoerdeKreisschluessel;
    }
    /**
     * Set ZustaendigeBehoerdeKreisschluessel value
     * @param string $zustaendigeBehoerdeKreisschluessel
     * @return \THAG\XKfz\StructType\FzRechercheAntwort
     */
    public function setZustaendigeBehoerdeKreisschluessel(?string $zustaendigeBehoerdeKreisschluessel = null): self
    {
        $this->ZustaendigeBehoerdeKreisschluessel = $zustaendigeBehoerdeKreisschluessel;
        
        return $this;
    }
    /**
     * Get ZustaendigeBehoerdeZusatzziffer value
     * @return string|null
     */
    public function getZustaendigeBehoerdeZusatzziffer(): ?string
    {
        return $this->ZustaendigeBehoerdeZusatzziffer;
    }
    /**
     * Set ZustaendigeBehoerdeZusatzziffer value
     * @param string $zustaendigeBehoerdeZusatzziffer
     * @return \THAG\XKfz\StructType\FzRechercheAntwort
     */
    public function setZustaendigeBehoerdeZusatzziffer(?string $zustaendigeBehoerdeZusatzziffer = null): self
    {
        $this->ZustaendigeBehoerdeZusatzziffer = $zustaendigeBehoerdeZusatzziffer;
        
        return $this;
    }
}

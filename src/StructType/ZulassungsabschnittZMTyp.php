<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZulassungsabschnittZMTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZulassungsabschnittZMTyp extends AbstractStructBase
{
    /**
     * The ZeitpunktAenderung
     * @var string|null
     */
    public ?string $ZeitpunktAenderung = null;
    /**
     * The ZeitpunktBeendigungZulassungsabschnitt
     * @var string|null
     */
    public ?string $ZeitpunktBeendigungZulassungsabschnitt = null;
    /**
     * The MerkmalKennzeichenart
     * @var string|null
     */
    public ?string $MerkmalKennzeichenart = null;
    /**
     * The Kennzeichen
     * @var string|null
     */
    public ?string $Kennzeichen = null;
    /**
     * The ZulaessigeGesamtmasse
     * @var int|null
     */
    public ?int $ZulaessigeGesamtmasse = null;
    /**
     * The TechnischZulaessigeGesamtmasse
     * @var int|null
     */
    public ?int $TechnischZulaessigeGesamtmasse = null;
    /**
     * The AnzahlAchsen
     * @var int|null
     */
    public ?int $AnzahlAchsen = null;
    /**
     * The TextHersteller
     * @var string|null
     */
    public ?string $TextHersteller = null;
    /**
     * The TextFahrzeugklasse
     * @var string|null
     */
    public ?string $TextFahrzeugklasse = null;
    /**
     * The SchluesselEmiklasseMaut
     * @var string|null
     */
    public ?string $SchluesselEmiklasseMaut = null;
    /**
     * The SchluesselFahrzeugklasse
     * @var string|null
     */
    public ?string $SchluesselFahrzeugklasse = null;
    /**
     * The SchluesselKraftstoff
     * @var string|null
     */
    public ?string $SchluesselKraftstoff = null;
    /**
     * The SteuerEmissionsrelevanteDaten
     * @var string|null
     */
    public ?string $SteuerEmissionsrelevanteDaten = null;
    /**
     * The BemerkungenAusnahmen
     * @var string|null
     */
    public ?string $BemerkungenAusnahmen = null;
    /**
     * The Beiblatt
     * @var string|null
     */
    public ?string $Beiblatt = null;
    /**
     * Constructor method for ZulassungsabschnittZMTyp
     * @uses ZulassungsabschnittZMTyp::setZeitpunktAenderung()
     * @uses ZulassungsabschnittZMTyp::setZeitpunktBeendigungZulassungsabschnitt()
     * @uses ZulassungsabschnittZMTyp::setMerkmalKennzeichenart()
     * @uses ZulassungsabschnittZMTyp::setKennzeichen()
     * @uses ZulassungsabschnittZMTyp::setZulaessigeGesamtmasse()
     * @uses ZulassungsabschnittZMTyp::setTechnischZulaessigeGesamtmasse()
     * @uses ZulassungsabschnittZMTyp::setAnzahlAchsen()
     * @uses ZulassungsabschnittZMTyp::setTextHersteller()
     * @uses ZulassungsabschnittZMTyp::setTextFahrzeugklasse()
     * @uses ZulassungsabschnittZMTyp::setSchluesselEmiklasseMaut()
     * @uses ZulassungsabschnittZMTyp::setSchluesselFahrzeugklasse()
     * @uses ZulassungsabschnittZMTyp::setSchluesselKraftstoff()
     * @uses ZulassungsabschnittZMTyp::setSteuerEmissionsrelevanteDaten()
     * @uses ZulassungsabschnittZMTyp::setBemerkungenAusnahmen()
     * @uses ZulassungsabschnittZMTyp::setBeiblatt()
     * @param string $zeitpunktAenderung
     * @param string $zeitpunktBeendigungZulassungsabschnitt
     * @param string $merkmalKennzeichenart
     * @param string $kennzeichen
     * @param int $zulaessigeGesamtmasse
     * @param int $technischZulaessigeGesamtmasse
     * @param int $anzahlAchsen
     * @param string $textHersteller
     * @param string $textFahrzeugklasse
     * @param string $schluesselEmiklasseMaut
     * @param string $schluesselFahrzeugklasse
     * @param string $schluesselKraftstoff
     * @param string $steuerEmissionsrelevanteDaten
     * @param string $bemerkungenAusnahmen
     * @param string $beiblatt
     */
    public function __construct(?string $zeitpunktAenderung = null, ?string $zeitpunktBeendigungZulassungsabschnitt = null, ?string $merkmalKennzeichenart = null, ?string $kennzeichen = null, ?int $zulaessigeGesamtmasse = null, ?int $technischZulaessigeGesamtmasse = null, ?int $anzahlAchsen = null, ?string $textHersteller = null, ?string $textFahrzeugklasse = null, ?string $schluesselEmiklasseMaut = null, ?string $schluesselFahrzeugklasse = null, ?string $schluesselKraftstoff = null, ?string $steuerEmissionsrelevanteDaten = null, ?string $bemerkungenAusnahmen = null, ?string $beiblatt = null)
    {
        $this
            ->setZeitpunktAenderung($zeitpunktAenderung)
            ->setZeitpunktBeendigungZulassungsabschnitt($zeitpunktBeendigungZulassungsabschnitt)
            ->setMerkmalKennzeichenart($merkmalKennzeichenart)
            ->setKennzeichen($kennzeichen)
            ->setZulaessigeGesamtmasse($zulaessigeGesamtmasse)
            ->setTechnischZulaessigeGesamtmasse($technischZulaessigeGesamtmasse)
            ->setAnzahlAchsen($anzahlAchsen)
            ->setTextHersteller($textHersteller)
            ->setTextFahrzeugklasse($textFahrzeugklasse)
            ->setSchluesselEmiklasseMaut($schluesselEmiklasseMaut)
            ->setSchluesselFahrzeugklasse($schluesselFahrzeugklasse)
            ->setSchluesselKraftstoff($schluesselKraftstoff)
            ->setSteuerEmissionsrelevanteDaten($steuerEmissionsrelevanteDaten)
            ->setBemerkungenAusnahmen($bemerkungenAusnahmen)
            ->setBeiblatt($beiblatt);
    }
    /**
     * Get ZeitpunktAenderung value
     * @return string|null
     */
    public function getZeitpunktAenderung(): ?string
    {
        return $this->ZeitpunktAenderung;
    }
    /**
     * Set ZeitpunktAenderung value
     * @param string $zeitpunktAenderung
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZMTyp
     */
    public function setZeitpunktAenderung(?string $zeitpunktAenderung = null): self
    {
        $this->ZeitpunktAenderung = $zeitpunktAenderung;
        
        return $this;
    }
    /**
     * Get ZeitpunktBeendigungZulassungsabschnitt value
     * @return string|null
     */
    public function getZeitpunktBeendigungZulassungsabschnitt(): ?string
    {
        return $this->ZeitpunktBeendigungZulassungsabschnitt;
    }
    /**
     * Set ZeitpunktBeendigungZulassungsabschnitt value
     * @param string $zeitpunktBeendigungZulassungsabschnitt
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZMTyp
     */
    public function setZeitpunktBeendigungZulassungsabschnitt(?string $zeitpunktBeendigungZulassungsabschnitt = null): self
    {
        $this->ZeitpunktBeendigungZulassungsabschnitt = $zeitpunktBeendigungZulassungsabschnitt;
        
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZMTyp
     */
    public function setMerkmalKennzeichenart(?string $merkmalKennzeichenart = null): self
    {
        $this->MerkmalKennzeichenart = $merkmalKennzeichenart;
        
        return $this;
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZMTyp
     */
    public function setKennzeichen(?string $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get ZulaessigeGesamtmasse value
     * @return int|null
     */
    public function getZulaessigeGesamtmasse(): ?int
    {
        return $this->ZulaessigeGesamtmasse;
    }
    /**
     * Set ZulaessigeGesamtmasse value
     * @param int $zulaessigeGesamtmasse
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZMTyp
     */
    public function setZulaessigeGesamtmasse(?int $zulaessigeGesamtmasse = null): self
    {
        $this->ZulaessigeGesamtmasse = $zulaessigeGesamtmasse;
        
        return $this;
    }
    /**
     * Get TechnischZulaessigeGesamtmasse value
     * @return int|null
     */
    public function getTechnischZulaessigeGesamtmasse(): ?int
    {
        return $this->TechnischZulaessigeGesamtmasse;
    }
    /**
     * Set TechnischZulaessigeGesamtmasse value
     * @param int $technischZulaessigeGesamtmasse
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZMTyp
     */
    public function setTechnischZulaessigeGesamtmasse(?int $technischZulaessigeGesamtmasse = null): self
    {
        $this->TechnischZulaessigeGesamtmasse = $technischZulaessigeGesamtmasse;
        
        return $this;
    }
    /**
     * Get AnzahlAchsen value
     * @return int|null
     */
    public function getAnzahlAchsen(): ?int
    {
        return $this->AnzahlAchsen;
    }
    /**
     * Set AnzahlAchsen value
     * @param int $anzahlAchsen
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZMTyp
     */
    public function setAnzahlAchsen(?int $anzahlAchsen = null): self
    {
        $this->AnzahlAchsen = $anzahlAchsen;
        
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
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZMTyp
     */
    public function setTextHersteller(?string $textHersteller = null): self
    {
        $this->TextHersteller = $textHersteller;
        
        return $this;
    }
    /**
     * Get TextFahrzeugklasse value
     * @return string|null
     */
    public function getTextFahrzeugklasse(): ?string
    {
        return $this->TextFahrzeugklasse;
    }
    /**
     * Set TextFahrzeugklasse value
     * @param string $textFahrzeugklasse
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZMTyp
     */
    public function setTextFahrzeugklasse(?string $textFahrzeugklasse = null): self
    {
        $this->TextFahrzeugklasse = $textFahrzeugklasse;
        
        return $this;
    }
    /**
     * Get SchluesselEmiklasseMaut value
     * @return string|null
     */
    public function getSchluesselEmiklasseMaut(): ?string
    {
        return $this->SchluesselEmiklasseMaut;
    }
    /**
     * Set SchluesselEmiklasseMaut value
     * @param string $schluesselEmiklasseMaut
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZMTyp
     */
    public function setSchluesselEmiklasseMaut(?string $schluesselEmiklasseMaut = null): self
    {
        $this->SchluesselEmiklasseMaut = $schluesselEmiklasseMaut;
        
        return $this;
    }
    /**
     * Get SchluesselFahrzeugklasse value
     * @return string|null
     */
    public function getSchluesselFahrzeugklasse(): ?string
    {
        return $this->SchluesselFahrzeugklasse;
    }
    /**
     * Set SchluesselFahrzeugklasse value
     * @param string $schluesselFahrzeugklasse
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZMTyp
     */
    public function setSchluesselFahrzeugklasse(?string $schluesselFahrzeugklasse = null): self
    {
        $this->SchluesselFahrzeugklasse = $schluesselFahrzeugklasse;
        
        return $this;
    }
    /**
     * Get SchluesselKraftstoff value
     * @return string|null
     */
    public function getSchluesselKraftstoff(): ?string
    {
        return $this->SchluesselKraftstoff;
    }
    /**
     * Set SchluesselKraftstoff value
     * @param string $schluesselKraftstoff
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZMTyp
     */
    public function setSchluesselKraftstoff(?string $schluesselKraftstoff = null): self
    {
        $this->SchluesselKraftstoff = $schluesselKraftstoff;
        
        return $this;
    }
    /**
     * Get SteuerEmissionsrelevanteDaten value
     * @return string|null
     */
    public function getSteuerEmissionsrelevanteDaten(): ?string
    {
        return $this->SteuerEmissionsrelevanteDaten;
    }
    /**
     * Set SteuerEmissionsrelevanteDaten value
     * @param string $steuerEmissionsrelevanteDaten
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZMTyp
     */
    public function setSteuerEmissionsrelevanteDaten(?string $steuerEmissionsrelevanteDaten = null): self
    {
        $this->SteuerEmissionsrelevanteDaten = $steuerEmissionsrelevanteDaten;
        
        return $this;
    }
    /**
     * Get BemerkungenAusnahmen value
     * @return string|null
     */
    public function getBemerkungenAusnahmen(): ?string
    {
        return $this->BemerkungenAusnahmen;
    }
    /**
     * Set BemerkungenAusnahmen value
     * @param string $bemerkungenAusnahmen
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZMTyp
     */
    public function setBemerkungenAusnahmen(?string $bemerkungenAusnahmen = null): self
    {
        $this->BemerkungenAusnahmen = $bemerkungenAusnahmen;
        
        return $this;
    }
    /**
     * Get Beiblatt value
     * @return string|null
     */
    public function getBeiblatt(): ?string
    {
        return $this->Beiblatt;
    }
    /**
     * Set Beiblatt value
     * @param string $beiblatt
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZMTyp
     */
    public function setBeiblatt(?string $beiblatt = null): self
    {
        $this->Beiblatt = $beiblatt;
        
        return $this;
    }
}

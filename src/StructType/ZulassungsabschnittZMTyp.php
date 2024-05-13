<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZulassungsabschnittZMTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZulassungsabschnittZMTyp extends AbstractStructBase
{
    /**
     * The ZeitpunktAenderung
     */
    public ?string $ZeitpunktAenderung = null;

    /**
     * The ZeitpunktBeendigungZulassungsabschnitt
     */
    public ?string $ZeitpunktBeendigungZulassungsabschnitt = null;

    /**
     * The MerkmalKennzeichenart
     */
    public ?string $MerkmalKennzeichenart = null;

    /**
     * The Kennzeichen
     */
    public ?string $Kennzeichen = null;

    /**
     * The ZulaessigeGesamtmasse
     */
    public ?int $ZulaessigeGesamtmasse = null;

    /**
     * The TechnischZulaessigeGesamtmasse
     */
    public ?int $TechnischZulaessigeGesamtmasse = null;

    /**
     * The AnzahlAchsen
     */
    public ?int $AnzahlAchsen = null;

    /**
     * The TextHersteller
     */
    public ?string $TextHersteller = null;

    /**
     * The TextFahrzeugklasse
     */
    public ?string $TextFahrzeugklasse = null;

    /**
     * The SchluesselEmiklasseMaut
     */
    public ?string $SchluesselEmiklasseMaut = null;

    /**
     * The SchluesselFahrzeugklasse
     */
    public ?string $SchluesselFahrzeugklasse = null;

    /**
     * The SchluesselKraftstoff
     */
    public ?string $SchluesselKraftstoff = null;

    /**
     * The SteuerEmissionsrelevanteDaten
     */
    public ?string $SteuerEmissionsrelevanteDaten = null;

    /**
     * The BemerkungenAusnahmen
     */
    public ?string $BemerkungenAusnahmen = null;

    /**
     * The Beiblatt
     */
    public ?string $Beiblatt = null;

    /**
     * Constructor method for ZulassungsabschnittZMTyp
     *
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
     */
    public function getZeitpunktAenderung(): ?string
    {
        return $this->ZeitpunktAenderung;
    }

    /**
     * Set ZeitpunktAenderung value
     */
    public function setZeitpunktAenderung(?string $zeitpunktAenderung = null): self
    {
        $this->ZeitpunktAenderung = $zeitpunktAenderung;

        return $this;
    }

    /**
     * Get ZeitpunktBeendigungZulassungsabschnitt value
     */
    public function getZeitpunktBeendigungZulassungsabschnitt(): ?string
    {
        return $this->ZeitpunktBeendigungZulassungsabschnitt;
    }

    /**
     * Set ZeitpunktBeendigungZulassungsabschnitt value
     */
    public function setZeitpunktBeendigungZulassungsabschnitt(?string $zeitpunktBeendigungZulassungsabschnitt = null): self
    {
        $this->ZeitpunktBeendigungZulassungsabschnitt = $zeitpunktBeendigungZulassungsabschnitt;

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
     * Get ZulaessigeGesamtmasse value
     */
    public function getZulaessigeGesamtmasse(): ?int
    {
        return $this->ZulaessigeGesamtmasse;
    }

    /**
     * Set ZulaessigeGesamtmasse value
     */
    public function setZulaessigeGesamtmasse(?int $zulaessigeGesamtmasse = null): self
    {
        $this->ZulaessigeGesamtmasse = $zulaessigeGesamtmasse;

        return $this;
    }

    /**
     * Get TechnischZulaessigeGesamtmasse value
     */
    public function getTechnischZulaessigeGesamtmasse(): ?int
    {
        return $this->TechnischZulaessigeGesamtmasse;
    }

    /**
     * Set TechnischZulaessigeGesamtmasse value
     */
    public function setTechnischZulaessigeGesamtmasse(?int $technischZulaessigeGesamtmasse = null): self
    {
        $this->TechnischZulaessigeGesamtmasse = $technischZulaessigeGesamtmasse;

        return $this;
    }

    /**
     * Get AnzahlAchsen value
     */
    public function getAnzahlAchsen(): ?int
    {
        return $this->AnzahlAchsen;
    }

    /**
     * Set AnzahlAchsen value
     */
    public function setAnzahlAchsen(?int $anzahlAchsen = null): self
    {
        $this->AnzahlAchsen = $anzahlAchsen;

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
     * Get TextFahrzeugklasse value
     */
    public function getTextFahrzeugklasse(): ?string
    {
        return $this->TextFahrzeugklasse;
    }

    /**
     * Set TextFahrzeugklasse value
     */
    public function setTextFahrzeugklasse(?string $textFahrzeugklasse = null): self
    {
        $this->TextFahrzeugklasse = $textFahrzeugklasse;

        return $this;
    }

    /**
     * Get SchluesselEmiklasseMaut value
     */
    public function getSchluesselEmiklasseMaut(): ?string
    {
        return $this->SchluesselEmiklasseMaut;
    }

    /**
     * Set SchluesselEmiklasseMaut value
     */
    public function setSchluesselEmiklasseMaut(?string $schluesselEmiklasseMaut = null): self
    {
        $this->SchluesselEmiklasseMaut = $schluesselEmiklasseMaut;

        return $this;
    }

    /**
     * Get SchluesselFahrzeugklasse value
     */
    public function getSchluesselFahrzeugklasse(): ?string
    {
        return $this->SchluesselFahrzeugklasse;
    }

    /**
     * Set SchluesselFahrzeugklasse value
     */
    public function setSchluesselFahrzeugklasse(?string $schluesselFahrzeugklasse = null): self
    {
        $this->SchluesselFahrzeugklasse = $schluesselFahrzeugklasse;

        return $this;
    }

    /**
     * Get SchluesselKraftstoff value
     */
    public function getSchluesselKraftstoff(): ?string
    {
        return $this->SchluesselKraftstoff;
    }

    /**
     * Set SchluesselKraftstoff value
     */
    public function setSchluesselKraftstoff(?string $schluesselKraftstoff = null): self
    {
        $this->SchluesselKraftstoff = $schluesselKraftstoff;

        return $this;
    }

    /**
     * Get SteuerEmissionsrelevanteDaten value
     */
    public function getSteuerEmissionsrelevanteDaten(): ?string
    {
        return $this->SteuerEmissionsrelevanteDaten;
    }

    /**
     * Set SteuerEmissionsrelevanteDaten value
     */
    public function setSteuerEmissionsrelevanteDaten(?string $steuerEmissionsrelevanteDaten = null): self
    {
        $this->SteuerEmissionsrelevanteDaten = $steuerEmissionsrelevanteDaten;

        return $this;
    }

    /**
     * Get BemerkungenAusnahmen value
     */
    public function getBemerkungenAusnahmen(): ?string
    {
        return $this->BemerkungenAusnahmen;
    }

    /**
     * Set BemerkungenAusnahmen value
     */
    public function setBemerkungenAusnahmen(?string $bemerkungenAusnahmen = null): self
    {
        $this->BemerkungenAusnahmen = $bemerkungenAusnahmen;

        return $this;
    }

    /**
     * Get Beiblatt value
     */
    public function getBeiblatt(): ?string
    {
        return $this->Beiblatt;
    }

    /**
     * Set Beiblatt value
     */
    public function setBeiblatt(?string $beiblatt = null): self
    {
        $this->Beiblatt = $beiblatt;

        return $this;
    }
}

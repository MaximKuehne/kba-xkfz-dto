<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FahrzeugbeschreibungZXTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FahrzeugbeschreibungZXTyp extends AbstractStructBase
{
    /**
     * The ArtGenehmigung
     */
    public ?string $ArtGenehmigung = null;

    /**
     * The SchluesselFahrzeugklasse
     */
    public ?string $SchluesselFahrzeugklasse = null;

    /**
     * The SchluesselAufbau
     */
    public ?string $SchluesselAufbau = null;

    /**
     * The SchluesselEmissionsklasse
     */
    public ?string $SchluesselEmissionsklasse = null;

    /**
     * The SchluesselKraftstoff
     */
    public ?string $SchluesselKraftstoff = null;

    /**
     * The KombinierterCO2Wert
     */
    public ?int $KombinierterCO2Wert = null;

    /**
     * The kombinierterCo2WertWltp
     */
    public ?int $kombinierterCo2WertWltp = null;

    /**
     * The Hoechstgeschwindigkeit
     */
    public ?int $Hoechstgeschwindigkeit = null;

    /**
     * The NennleistungKW
     */
    public ?int $NennleistungKW = null;

    /**
     * The Hubraum
     */
    public ?int $Hubraum = null;

    /**
     * The Nutzlast
     */
    public ?int $Nutzlast = null;

    /**
     * The MasseFahrbereitMin
     */
    public ?int $MasseFahrbereitMin = null;

    /**
     * The MasseFahrbereitMax
     */
    public ?int $MasseFahrbereitMax = null;

    /**
     * The AnzahlAchsen
     */
    public ?int $AnzahlAchsen = null;

    /**
     * The AnzahlAntriebsachsen
     */
    public ?int $AnzahlAntriebsachsen = null;

    /**
     * The TechnischZulaessigeGesamtmasse
     */
    public ?int $TechnischZulaessigeGesamtmasse = null;

    /**
     * The ZulaessigeGesamtmasse
     */
    public ?int $ZulaessigeGesamtmasse = null;

    /**
     * The Stuetzlast
     */
    public ?int $Stuetzlast = null;

    /**
     * The Standgeraeusch
     */
    public ?string $Standgeraeusch = null;

    /**
     * The Fahrgeraeusch
     */
    public ?string $Fahrgeraeusch = null;

    /**
     * The AnzahlStehplaetze
     */
    public ?int $AnzahlStehplaetze = null;

    /**
     * The AnzahlSitzplaetze
     */
    public ?int $AnzahlSitzplaetze = null;

    /**
     * The SteuerEmissionsrelevanteDaten
     */
    public ?string $SteuerEmissionsrelevanteDaten = null;

    /**
     * The GenehmigungsnummerPMS
     */
    public ?string $GenehmigungsnummerPMS = null;

    /**
     * The DatumNachruestung
     */
    public ?string $DatumNachruestung = null;

    /**
     * Constructor method for FahrzeugbeschreibungZXTyp
     *
     * @uses FahrzeugbeschreibungZXTyp::setArtGenehmigung()
     * @uses FahrzeugbeschreibungZXTyp::setSchluesselFahrzeugklasse()
     * @uses FahrzeugbeschreibungZXTyp::setSchluesselAufbau()
     * @uses FahrzeugbeschreibungZXTyp::setSchluesselEmissionsklasse()
     * @uses FahrzeugbeschreibungZXTyp::setSchluesselKraftstoff()
     * @uses FahrzeugbeschreibungZXTyp::setKombinierterCO2Wert()
     * @uses FahrzeugbeschreibungZXTyp::setKombinierterCo2WertWltp()
     * @uses FahrzeugbeschreibungZXTyp::setHoechstgeschwindigkeit()
     * @uses FahrzeugbeschreibungZXTyp::setNennleistungKW()
     * @uses FahrzeugbeschreibungZXTyp::setHubraum()
     * @uses FahrzeugbeschreibungZXTyp::setNutzlast()
     * @uses FahrzeugbeschreibungZXTyp::setMasseFahrbereitMin()
     * @uses FahrzeugbeschreibungZXTyp::setMasseFahrbereitMax()
     * @uses FahrzeugbeschreibungZXTyp::setAnzahlAchsen()
     * @uses FahrzeugbeschreibungZXTyp::setAnzahlAntriebsachsen()
     * @uses FahrzeugbeschreibungZXTyp::setTechnischZulaessigeGesamtmasse()
     * @uses FahrzeugbeschreibungZXTyp::setZulaessigeGesamtmasse()
     * @uses FahrzeugbeschreibungZXTyp::setStuetzlast()
     * @uses FahrzeugbeschreibungZXTyp::setStandgeraeusch()
     * @uses FahrzeugbeschreibungZXTyp::setFahrgeraeusch()
     * @uses FahrzeugbeschreibungZXTyp::setAnzahlStehplaetze()
     * @uses FahrzeugbeschreibungZXTyp::setAnzahlSitzplaetze()
     * @uses FahrzeugbeschreibungZXTyp::setSteuerEmissionsrelevanteDaten()
     * @uses FahrzeugbeschreibungZXTyp::setGenehmigungsnummerPMS()
     * @uses FahrzeugbeschreibungZXTyp::setDatumNachruestung()
     */
    public function __construct(?string $artGenehmigung = null, ?string $schluesselFahrzeugklasse = null, ?string $schluesselAufbau = null, ?string $schluesselEmissionsklasse = null, ?string $schluesselKraftstoff = null, ?int $kombinierterCO2Wert = null, ?int $kombinierterCo2WertWltp = null, ?int $hoechstgeschwindigkeit = null, ?int $nennleistungKW = null, ?int $hubraum = null, ?int $nutzlast = null, ?int $masseFahrbereitMin = null, ?int $masseFahrbereitMax = null, ?int $anzahlAchsen = null, ?int $anzahlAntriebsachsen = null, ?int $technischZulaessigeGesamtmasse = null, ?int $zulaessigeGesamtmasse = null, ?int $stuetzlast = null, ?string $standgeraeusch = null, ?string $fahrgeraeusch = null, ?int $anzahlStehplaetze = null, ?int $anzahlSitzplaetze = null, ?string $steuerEmissionsrelevanteDaten = null, ?string $genehmigungsnummerPMS = null, ?string $datumNachruestung = null)
    {
        $this
            ->setArtGenehmigung($artGenehmigung)
            ->setSchluesselFahrzeugklasse($schluesselFahrzeugklasse)
            ->setSchluesselAufbau($schluesselAufbau)
            ->setSchluesselEmissionsklasse($schluesselEmissionsklasse)
            ->setSchluesselKraftstoff($schluesselKraftstoff)
            ->setKombinierterCO2Wert($kombinierterCO2Wert)
            ->setKombinierterCo2WertWltp($kombinierterCo2WertWltp)
            ->setHoechstgeschwindigkeit($hoechstgeschwindigkeit)
            ->setNennleistungKW($nennleistungKW)
            ->setHubraum($hubraum)
            ->setNutzlast($nutzlast)
            ->setMasseFahrbereitMin($masseFahrbereitMin)
            ->setMasseFahrbereitMax($masseFahrbereitMax)
            ->setAnzahlAchsen($anzahlAchsen)
            ->setAnzahlAntriebsachsen($anzahlAntriebsachsen)
            ->setTechnischZulaessigeGesamtmasse($technischZulaessigeGesamtmasse)
            ->setZulaessigeGesamtmasse($zulaessigeGesamtmasse)
            ->setStuetzlast($stuetzlast)
            ->setStandgeraeusch($standgeraeusch)
            ->setFahrgeraeusch($fahrgeraeusch)
            ->setAnzahlStehplaetze($anzahlStehplaetze)
            ->setAnzahlSitzplaetze($anzahlSitzplaetze)
            ->setSteuerEmissionsrelevanteDaten($steuerEmissionsrelevanteDaten)
            ->setGenehmigungsnummerPMS($genehmigungsnummerPMS)
            ->setDatumNachruestung($datumNachruestung);
    }

    /**
     * Get ArtGenehmigung value
     */
    public function getArtGenehmigung(): ?string
    {
        return $this->ArtGenehmigung;
    }

    /**
     * Set ArtGenehmigung value
     */
    public function setArtGenehmigung(?string $artGenehmigung = null): self
    {
        $this->ArtGenehmigung = $artGenehmigung;

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
     * Get SchluesselAufbau value
     */
    public function getSchluesselAufbau(): ?string
    {
        return $this->SchluesselAufbau;
    }

    /**
     * Set SchluesselAufbau value
     */
    public function setSchluesselAufbau(?string $schluesselAufbau = null): self
    {
        $this->SchluesselAufbau = $schluesselAufbau;

        return $this;
    }

    /**
     * Get SchluesselEmissionsklasse value
     */
    public function getSchluesselEmissionsklasse(): ?string
    {
        return $this->SchluesselEmissionsklasse;
    }

    /**
     * Set SchluesselEmissionsklasse value
     */
    public function setSchluesselEmissionsklasse(?string $schluesselEmissionsklasse = null): self
    {
        $this->SchluesselEmissionsklasse = $schluesselEmissionsklasse;

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
     * Get KombinierterCO2Wert value
     */
    public function getKombinierterCO2Wert(): ?int
    {
        return $this->KombinierterCO2Wert;
    }

    /**
     * Set KombinierterCO2Wert value
     */
    public function setKombinierterCO2Wert(?int $kombinierterCO2Wert = null): self
    {
        $this->KombinierterCO2Wert = $kombinierterCO2Wert;

        return $this;
    }

    /**
     * Get kombinierterCo2WertWltp value
     */
    public function getKombinierterCo2WertWltp(): ?int
    {
        return $this->kombinierterCo2WertWltp;
    }

    /**
     * Set kombinierterCo2WertWltp value
     */
    public function setKombinierterCo2WertWltp(?int $kombinierterCo2WertWltp = null): self
    {
        $this->kombinierterCo2WertWltp = $kombinierterCo2WertWltp;

        return $this;
    }

    /**
     * Get Hoechstgeschwindigkeit value
     */
    public function getHoechstgeschwindigkeit(): ?int
    {
        return $this->Hoechstgeschwindigkeit;
    }

    /**
     * Set Hoechstgeschwindigkeit value
     */
    public function setHoechstgeschwindigkeit(?int $hoechstgeschwindigkeit = null): self
    {
        $this->Hoechstgeschwindigkeit = $hoechstgeschwindigkeit;

        return $this;
    }

    /**
     * Get NennleistungKW value
     */
    public function getNennleistungKW(): ?int
    {
        return $this->NennleistungKW;
    }

    /**
     * Set NennleistungKW value
     */
    public function setNennleistungKW(?int $nennleistungKW = null): self
    {
        $this->NennleistungKW = $nennleistungKW;

        return $this;
    }

    /**
     * Get Hubraum value
     */
    public function getHubraum(): ?int
    {
        return $this->Hubraum;
    }

    /**
     * Set Hubraum value
     */
    public function setHubraum(?int $hubraum = null): self
    {
        $this->Hubraum = $hubraum;

        return $this;
    }

    /**
     * Get Nutzlast value
     */
    public function getNutzlast(): ?int
    {
        return $this->Nutzlast;
    }

    /**
     * Set Nutzlast value
     */
    public function setNutzlast(?int $nutzlast = null): self
    {
        $this->Nutzlast = $nutzlast;

        return $this;
    }

    /**
     * Get MasseFahrbereitMin value
     */
    public function getMasseFahrbereitMin(): ?int
    {
        return $this->MasseFahrbereitMin;
    }

    /**
     * Set MasseFahrbereitMin value
     */
    public function setMasseFahrbereitMin(?int $masseFahrbereitMin = null): self
    {
        $this->MasseFahrbereitMin = $masseFahrbereitMin;

        return $this;
    }

    /**
     * Get MasseFahrbereitMax value
     */
    public function getMasseFahrbereitMax(): ?int
    {
        return $this->MasseFahrbereitMax;
    }

    /**
     * Set MasseFahrbereitMax value
     */
    public function setMasseFahrbereitMax(?int $masseFahrbereitMax = null): self
    {
        $this->MasseFahrbereitMax = $masseFahrbereitMax;

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
     * Get AnzahlAntriebsachsen value
     */
    public function getAnzahlAntriebsachsen(): ?int
    {
        return $this->AnzahlAntriebsachsen;
    }

    /**
     * Set AnzahlAntriebsachsen value
     */
    public function setAnzahlAntriebsachsen(?int $anzahlAntriebsachsen = null): self
    {
        $this->AnzahlAntriebsachsen = $anzahlAntriebsachsen;

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
     * Get Stuetzlast value
     */
    public function getStuetzlast(): ?int
    {
        return $this->Stuetzlast;
    }

    /**
     * Set Stuetzlast value
     */
    public function setStuetzlast(?int $stuetzlast = null): self
    {
        $this->Stuetzlast = $stuetzlast;

        return $this;
    }

    /**
     * Get Standgeraeusch value
     */
    public function getStandgeraeusch(): ?string
    {
        return $this->Standgeraeusch;
    }

    /**
     * Set Standgeraeusch value
     */
    public function setStandgeraeusch(?string $standgeraeusch = null): self
    {
        $this->Standgeraeusch = $standgeraeusch;

        return $this;
    }

    /**
     * Get Fahrgeraeusch value
     */
    public function getFahrgeraeusch(): ?string
    {
        return $this->Fahrgeraeusch;
    }

    /**
     * Set Fahrgeraeusch value
     */
    public function setFahrgeraeusch(?string $fahrgeraeusch = null): self
    {
        $this->Fahrgeraeusch = $fahrgeraeusch;

        return $this;
    }

    /**
     * Get AnzahlStehplaetze value
     */
    public function getAnzahlStehplaetze(): ?int
    {
        return $this->AnzahlStehplaetze;
    }

    /**
     * Set AnzahlStehplaetze value
     */
    public function setAnzahlStehplaetze(?int $anzahlStehplaetze = null): self
    {
        $this->AnzahlStehplaetze = $anzahlStehplaetze;

        return $this;
    }

    /**
     * Get AnzahlSitzplaetze value
     */
    public function getAnzahlSitzplaetze(): ?int
    {
        return $this->AnzahlSitzplaetze;
    }

    /**
     * Set AnzahlSitzplaetze value
     */
    public function setAnzahlSitzplaetze(?int $anzahlSitzplaetze = null): self
    {
        $this->AnzahlSitzplaetze = $anzahlSitzplaetze;

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
     * Get GenehmigungsnummerPMS value
     */
    public function getGenehmigungsnummerPMS(): ?string
    {
        return $this->GenehmigungsnummerPMS;
    }

    /**
     * Set GenehmigungsnummerPMS value
     */
    public function setGenehmigungsnummerPMS(?string $genehmigungsnummerPMS = null): self
    {
        $this->GenehmigungsnummerPMS = $genehmigungsnummerPMS;

        return $this;
    }

    /**
     * Get DatumNachruestung value
     */
    public function getDatumNachruestung(): ?string
    {
        return $this->DatumNachruestung;
    }

    /**
     * Set DatumNachruestung value
     */
    public function setDatumNachruestung(?string $datumNachruestung = null): self
    {
        $this->DatumNachruestung = $datumNachruestung;

        return $this;
    }
}

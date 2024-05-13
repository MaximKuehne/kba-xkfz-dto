<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FahrzeugbeschreibungZXTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FahrzeugbeschreibungZXTyp extends AbstractStructBase
{
    /**
     * The ArtGenehmigung
     * @var string|null
     */
    public ?string $ArtGenehmigung = null;
    /**
     * The SchluesselFahrzeugklasse
     * @var string|null
     */
    public ?string $SchluesselFahrzeugklasse = null;
    /**
     * The SchluesselAufbau
     * @var string|null
     */
    public ?string $SchluesselAufbau = null;
    /**
     * The SchluesselEmissionsklasse
     * @var string|null
     */
    public ?string $SchluesselEmissionsklasse = null;
    /**
     * The SchluesselKraftstoff
     * @var string|null
     */
    public ?string $SchluesselKraftstoff = null;
    /**
     * The KombinierterCO2Wert
     * @var int|null
     */
    public ?int $KombinierterCO2Wert = null;
    /**
     * The kombinierterCo2WertWltp
     * @var int|null
     */
    public ?int $kombinierterCo2WertWltp = null;
    /**
     * The Hoechstgeschwindigkeit
     * @var int|null
     */
    public ?int $Hoechstgeschwindigkeit = null;
    /**
     * The NennleistungKW
     * @var int|null
     */
    public ?int $NennleistungKW = null;
    /**
     * The Hubraum
     * @var int|null
     */
    public ?int $Hubraum = null;
    /**
     * The Nutzlast
     * @var int|null
     */
    public ?int $Nutzlast = null;
    /**
     * The MasseFahrbereitMin
     * @var int|null
     */
    public ?int $MasseFahrbereitMin = null;
    /**
     * The MasseFahrbereitMax
     * @var int|null
     */
    public ?int $MasseFahrbereitMax = null;
    /**
     * The AnzahlAchsen
     * @var int|null
     */
    public ?int $AnzahlAchsen = null;
    /**
     * The AnzahlAntriebsachsen
     * @var int|null
     */
    public ?int $AnzahlAntriebsachsen = null;
    /**
     * The TechnischZulaessigeGesamtmasse
     * @var int|null
     */
    public ?int $TechnischZulaessigeGesamtmasse = null;
    /**
     * The ZulaessigeGesamtmasse
     * @var int|null
     */
    public ?int $ZulaessigeGesamtmasse = null;
    /**
     * The Stuetzlast
     * @var int|null
     */
    public ?int $Stuetzlast = null;
    /**
     * The Standgeraeusch
     * @var string|null
     */
    public ?string $Standgeraeusch = null;
    /**
     * The Fahrgeraeusch
     * @var string|null
     */
    public ?string $Fahrgeraeusch = null;
    /**
     * The AnzahlStehplaetze
     * @var int|null
     */
    public ?int $AnzahlStehplaetze = null;
    /**
     * The AnzahlSitzplaetze
     * @var int|null
     */
    public ?int $AnzahlSitzplaetze = null;
    /**
     * The SteuerEmissionsrelevanteDaten
     * @var string|null
     */
    public ?string $SteuerEmissionsrelevanteDaten = null;
    /**
     * The GenehmigungsnummerPMS
     * @var string|null
     */
    public ?string $GenehmigungsnummerPMS = null;
    /**
     * The DatumNachruestung
     * @var string|null
     */
    public ?string $DatumNachruestung = null;
    /**
     * Constructor method for FahrzeugbeschreibungZXTyp
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
     * @param string $artGenehmigung
     * @param string $schluesselFahrzeugklasse
     * @param string $schluesselAufbau
     * @param string $schluesselEmissionsklasse
     * @param string $schluesselKraftstoff
     * @param int $kombinierterCO2Wert
     * @param int $kombinierterCo2WertWltp
     * @param int $hoechstgeschwindigkeit
     * @param int $nennleistungKW
     * @param int $hubraum
     * @param int $nutzlast
     * @param int $masseFahrbereitMin
     * @param int $masseFahrbereitMax
     * @param int $anzahlAchsen
     * @param int $anzahlAntriebsachsen
     * @param int $technischZulaessigeGesamtmasse
     * @param int $zulaessigeGesamtmasse
     * @param int $stuetzlast
     * @param string $standgeraeusch
     * @param string $fahrgeraeusch
     * @param int $anzahlStehplaetze
     * @param int $anzahlSitzplaetze
     * @param string $steuerEmissionsrelevanteDaten
     * @param string $genehmigungsnummerPMS
     * @param string $datumNachruestung
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
     * @return string|null
     */
    public function getArtGenehmigung(): ?string
    {
        return $this->ArtGenehmigung;
    }
    /**
     * Set ArtGenehmigung value
     * @param string $artGenehmigung
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
     */
    public function setArtGenehmigung(?string $artGenehmigung = null): self
    {
        $this->ArtGenehmigung = $artGenehmigung;
        
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
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
     */
    public function setSchluesselFahrzeugklasse(?string $schluesselFahrzeugklasse = null): self
    {
        $this->SchluesselFahrzeugklasse = $schluesselFahrzeugklasse;
        
        return $this;
    }
    /**
     * Get SchluesselAufbau value
     * @return string|null
     */
    public function getSchluesselAufbau(): ?string
    {
        return $this->SchluesselAufbau;
    }
    /**
     * Set SchluesselAufbau value
     * @param string $schluesselAufbau
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
     */
    public function setSchluesselAufbau(?string $schluesselAufbau = null): self
    {
        $this->SchluesselAufbau = $schluesselAufbau;
        
        return $this;
    }
    /**
     * Get SchluesselEmissionsklasse value
     * @return string|null
     */
    public function getSchluesselEmissionsklasse(): ?string
    {
        return $this->SchluesselEmissionsklasse;
    }
    /**
     * Set SchluesselEmissionsklasse value
     * @param string $schluesselEmissionsklasse
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
     */
    public function setSchluesselEmissionsklasse(?string $schluesselEmissionsklasse = null): self
    {
        $this->SchluesselEmissionsklasse = $schluesselEmissionsklasse;
        
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
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
     */
    public function setSchluesselKraftstoff(?string $schluesselKraftstoff = null): self
    {
        $this->SchluesselKraftstoff = $schluesselKraftstoff;
        
        return $this;
    }
    /**
     * Get KombinierterCO2Wert value
     * @return int|null
     */
    public function getKombinierterCO2Wert(): ?int
    {
        return $this->KombinierterCO2Wert;
    }
    /**
     * Set KombinierterCO2Wert value
     * @param int $kombinierterCO2Wert
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
     */
    public function setKombinierterCO2Wert(?int $kombinierterCO2Wert = null): self
    {
        $this->KombinierterCO2Wert = $kombinierterCO2Wert;
        
        return $this;
    }
    /**
     * Get kombinierterCo2WertWltp value
     * @return int|null
     */
    public function getKombinierterCo2WertWltp(): ?int
    {
        return $this->kombinierterCo2WertWltp;
    }
    /**
     * Set kombinierterCo2WertWltp value
     * @param int $kombinierterCo2WertWltp
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
     */
    public function setKombinierterCo2WertWltp(?int $kombinierterCo2WertWltp = null): self
    {
        $this->kombinierterCo2WertWltp = $kombinierterCo2WertWltp;
        
        return $this;
    }
    /**
     * Get Hoechstgeschwindigkeit value
     * @return int|null
     */
    public function getHoechstgeschwindigkeit(): ?int
    {
        return $this->Hoechstgeschwindigkeit;
    }
    /**
     * Set Hoechstgeschwindigkeit value
     * @param int $hoechstgeschwindigkeit
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
     */
    public function setHoechstgeschwindigkeit(?int $hoechstgeschwindigkeit = null): self
    {
        $this->Hoechstgeschwindigkeit = $hoechstgeschwindigkeit;
        
        return $this;
    }
    /**
     * Get NennleistungKW value
     * @return int|null
     */
    public function getNennleistungKW(): ?int
    {
        return $this->NennleistungKW;
    }
    /**
     * Set NennleistungKW value
     * @param int $nennleistungKW
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
     */
    public function setNennleistungKW(?int $nennleistungKW = null): self
    {
        $this->NennleistungKW = $nennleistungKW;
        
        return $this;
    }
    /**
     * Get Hubraum value
     * @return int|null
     */
    public function getHubraum(): ?int
    {
        return $this->Hubraum;
    }
    /**
     * Set Hubraum value
     * @param int $hubraum
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
     */
    public function setHubraum(?int $hubraum = null): self
    {
        $this->Hubraum = $hubraum;
        
        return $this;
    }
    /**
     * Get Nutzlast value
     * @return int|null
     */
    public function getNutzlast(): ?int
    {
        return $this->Nutzlast;
    }
    /**
     * Set Nutzlast value
     * @param int $nutzlast
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
     */
    public function setNutzlast(?int $nutzlast = null): self
    {
        $this->Nutzlast = $nutzlast;
        
        return $this;
    }
    /**
     * Get MasseFahrbereitMin value
     * @return int|null
     */
    public function getMasseFahrbereitMin(): ?int
    {
        return $this->MasseFahrbereitMin;
    }
    /**
     * Set MasseFahrbereitMin value
     * @param int $masseFahrbereitMin
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
     */
    public function setMasseFahrbereitMin(?int $masseFahrbereitMin = null): self
    {
        $this->MasseFahrbereitMin = $masseFahrbereitMin;
        
        return $this;
    }
    /**
     * Get MasseFahrbereitMax value
     * @return int|null
     */
    public function getMasseFahrbereitMax(): ?int
    {
        return $this->MasseFahrbereitMax;
    }
    /**
     * Set MasseFahrbereitMax value
     * @param int $masseFahrbereitMax
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
     */
    public function setMasseFahrbereitMax(?int $masseFahrbereitMax = null): self
    {
        $this->MasseFahrbereitMax = $masseFahrbereitMax;
        
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
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
     */
    public function setAnzahlAchsen(?int $anzahlAchsen = null): self
    {
        $this->AnzahlAchsen = $anzahlAchsen;
        
        return $this;
    }
    /**
     * Get AnzahlAntriebsachsen value
     * @return int|null
     */
    public function getAnzahlAntriebsachsen(): ?int
    {
        return $this->AnzahlAntriebsachsen;
    }
    /**
     * Set AnzahlAntriebsachsen value
     * @param int $anzahlAntriebsachsen
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
     */
    public function setAnzahlAntriebsachsen(?int $anzahlAntriebsachsen = null): self
    {
        $this->AnzahlAntriebsachsen = $anzahlAntriebsachsen;
        
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
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
     */
    public function setTechnischZulaessigeGesamtmasse(?int $technischZulaessigeGesamtmasse = null): self
    {
        $this->TechnischZulaessigeGesamtmasse = $technischZulaessigeGesamtmasse;
        
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
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
     */
    public function setZulaessigeGesamtmasse(?int $zulaessigeGesamtmasse = null): self
    {
        $this->ZulaessigeGesamtmasse = $zulaessigeGesamtmasse;
        
        return $this;
    }
    /**
     * Get Stuetzlast value
     * @return int|null
     */
    public function getStuetzlast(): ?int
    {
        return $this->Stuetzlast;
    }
    /**
     * Set Stuetzlast value
     * @param int $stuetzlast
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
     */
    public function setStuetzlast(?int $stuetzlast = null): self
    {
        $this->Stuetzlast = $stuetzlast;
        
        return $this;
    }
    /**
     * Get Standgeraeusch value
     * @return string|null
     */
    public function getStandgeraeusch(): ?string
    {
        return $this->Standgeraeusch;
    }
    /**
     * Set Standgeraeusch value
     * @param string $standgeraeusch
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
     */
    public function setStandgeraeusch(?string $standgeraeusch = null): self
    {
        $this->Standgeraeusch = $standgeraeusch;
        
        return $this;
    }
    /**
     * Get Fahrgeraeusch value
     * @return string|null
     */
    public function getFahrgeraeusch(): ?string
    {
        return $this->Fahrgeraeusch;
    }
    /**
     * Set Fahrgeraeusch value
     * @param string $fahrgeraeusch
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
     */
    public function setFahrgeraeusch(?string $fahrgeraeusch = null): self
    {
        $this->Fahrgeraeusch = $fahrgeraeusch;
        
        return $this;
    }
    /**
     * Get AnzahlStehplaetze value
     * @return int|null
     */
    public function getAnzahlStehplaetze(): ?int
    {
        return $this->AnzahlStehplaetze;
    }
    /**
     * Set AnzahlStehplaetze value
     * @param int $anzahlStehplaetze
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
     */
    public function setAnzahlStehplaetze(?int $anzahlStehplaetze = null): self
    {
        $this->AnzahlStehplaetze = $anzahlStehplaetze;
        
        return $this;
    }
    /**
     * Get AnzahlSitzplaetze value
     * @return int|null
     */
    public function getAnzahlSitzplaetze(): ?int
    {
        return $this->AnzahlSitzplaetze;
    }
    /**
     * Set AnzahlSitzplaetze value
     * @param int $anzahlSitzplaetze
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
     */
    public function setAnzahlSitzplaetze(?int $anzahlSitzplaetze = null): self
    {
        $this->AnzahlSitzplaetze = $anzahlSitzplaetze;
        
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
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
     */
    public function setSteuerEmissionsrelevanteDaten(?string $steuerEmissionsrelevanteDaten = null): self
    {
        $this->SteuerEmissionsrelevanteDaten = $steuerEmissionsrelevanteDaten;
        
        return $this;
    }
    /**
     * Get GenehmigungsnummerPMS value
     * @return string|null
     */
    public function getGenehmigungsnummerPMS(): ?string
    {
        return $this->GenehmigungsnummerPMS;
    }
    /**
     * Set GenehmigungsnummerPMS value
     * @param string $genehmigungsnummerPMS
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
     */
    public function setGenehmigungsnummerPMS(?string $genehmigungsnummerPMS = null): self
    {
        $this->GenehmigungsnummerPMS = $genehmigungsnummerPMS;
        
        return $this;
    }
    /**
     * Get DatumNachruestung value
     * @return string|null
     */
    public function getDatumNachruestung(): ?string
    {
        return $this->DatumNachruestung;
    }
    /**
     * Set DatumNachruestung value
     * @param string $datumNachruestung
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZXTyp
     */
    public function setDatumNachruestung(?string $datumNachruestung = null): self
    {
        $this->DatumNachruestung = $datumNachruestung;
        
        return $this;
    }
}

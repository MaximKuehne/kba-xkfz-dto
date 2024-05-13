<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FahrzeugbeschreibungZGTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FahrzeugbeschreibungZGTyp extends AbstractStructBase
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
     * The TextEmissionsklasseEGTypgenehmigung
     */
    public ?string $TextEmissionsklasseEGTypgenehmigung = null;

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
     * The NennleistungUmdrehung
     */
    public ?int $NennleistungUmdrehung = null;

    /**
     * The Hubraum
     */
    public ?int $Hubraum = null;

    /**
     * The Leistungsgewicht
     */
    public ?float $Leistungsgewicht = null;

    /**
     * The Nutzlast
     */
    public ?int $Nutzlast = null;

    /**
     * The Rauminhalt
     */
    public ?float $Rauminhalt = null;

    /**
     * The AnzahlStehplaetze
     */
    public ?int $AnzahlStehplaetze = null;

    /**
     * The AnzahlSitzplaetze
     */
    public ?int $AnzahlSitzplaetze = null;

    /**
     * The MasseFahrbereitMin
     */
    public ?int $MasseFahrbereitMin = null;

    /**
     * The MasseFahrbereitMax
     */
    public ?int $MasseFahrbereitMax = null;

    /**
     * The TechnischZulaessigeGesamtmasse
     */
    public ?int $TechnischZulaessigeGesamtmasse = null;

    /**
     * The TechnischZulaessigeAchslastAchse1
     */
    public ?int $TechnischZulaessigeAchslastAchse1 = null;

    /**
     * The TechnischZulaessigeAchslastAchse2
     */
    public ?int $TechnischZulaessigeAchslastAchse2 = null;

    /**
     * The TechnischZulaessigeAchslastAchse3
     */
    public ?int $TechnischZulaessigeAchslastAchse3 = null;

    /**
     * The Stuetzlast
     */
    public ?int $Stuetzlast = null;

    /**
     * The AnhaengelastGebremst
     */
    public ?int $AnhaengelastGebremst = null;

    /**
     * The AnhaengelastUngebremst
     */
    public ?int $AnhaengelastUngebremst = null;

    /**
     * The AnzahlAchsen
     */
    public ?int $AnzahlAchsen = null;

    /**
     * The AnzahlAntriebsachsen
     */
    public ?int $AnzahlAntriebsachsen = null;

    /**
     * The Standgeraeusch
     */
    public ?string $Standgeraeusch = null;

    /**
     * The StandgeraeuschUmdrehung
     */
    public ?int $StandgeraeuschUmdrehung = null;

    /**
     * The Fahrgeraeusch
     */
    public ?string $Fahrgeraeusch = null;

    /**
     * The BereifungAchse1
     */
    public ?string $BereifungAchse1 = null;

    /**
     * The BereifungAchse2
     */
    public ?string $BereifungAchse2 = null;

    /**
     * The BereifungAchse3
     */
    public ?string $BereifungAchse3 = null;

    /**
     * The LaengeMax
     */
    public ?int $LaengeMax = null;

    /**
     * The LaengeMin
     */
    public ?int $LaengeMin = null;

    /**
     * The BreiteMax
     */
    public ?int $BreiteMax = null;

    /**
     * The BreiteMin
     */
    public ?int $BreiteMin = null;

    /**
     * The HoeheMax
     */
    public ?int $HoeheMax = null;

    /**
     * The HoeheMin
     */
    public ?int $HoeheMin = null;

    /**
     * The Beiblatt
     */
    public ?string $Beiblatt = null;

    /**
     * The BemerkungenAusnahmen
     */
    public ?string $BemerkungenAusnahmen = null;

    /**
     * The TextFahrzeugklasse
     */
    public ?string $TextFahrzeugklasse = null;

    /**
     * The TextKraftstoff
     */
    public ?string $TextKraftstoff = null;

    /**
     * The TextAufbau
     */
    public ?string $TextAufbau = null;

    /**
     * The TextEmissionsklasse
     */
    public ?string $TextEmissionsklasse = null;

    /**
     * Constructor method for FahrzeugbeschreibungZGTyp
     *
     * @uses FahrzeugbeschreibungZGTyp::setArtGenehmigung()
     * @uses FahrzeugbeschreibungZGTyp::setSchluesselFahrzeugklasse()
     * @uses FahrzeugbeschreibungZGTyp::setSchluesselAufbau()
     * @uses FahrzeugbeschreibungZGTyp::setSchluesselEmissionsklasse()
     * @uses FahrzeugbeschreibungZGTyp::setTextEmissionsklasseEGTypgenehmigung()
     * @uses FahrzeugbeschreibungZGTyp::setSchluesselKraftstoff()
     * @uses FahrzeugbeschreibungZGTyp::setKombinierterCO2Wert()
     * @uses FahrzeugbeschreibungZGTyp::setKombinierterCo2WertWltp()
     * @uses FahrzeugbeschreibungZGTyp::setHoechstgeschwindigkeit()
     * @uses FahrzeugbeschreibungZGTyp::setNennleistungKW()
     * @uses FahrzeugbeschreibungZGTyp::setNennleistungUmdrehung()
     * @uses FahrzeugbeschreibungZGTyp::setHubraum()
     * @uses FahrzeugbeschreibungZGTyp::setLeistungsgewicht()
     * @uses FahrzeugbeschreibungZGTyp::setNutzlast()
     * @uses FahrzeugbeschreibungZGTyp::setRauminhalt()
     * @uses FahrzeugbeschreibungZGTyp::setAnzahlStehplaetze()
     * @uses FahrzeugbeschreibungZGTyp::setAnzahlSitzplaetze()
     * @uses FahrzeugbeschreibungZGTyp::setMasseFahrbereitMin()
     * @uses FahrzeugbeschreibungZGTyp::setMasseFahrbereitMax()
     * @uses FahrzeugbeschreibungZGTyp::setTechnischZulaessigeGesamtmasse()
     * @uses FahrzeugbeschreibungZGTyp::setTechnischZulaessigeAchslastAchse1()
     * @uses FahrzeugbeschreibungZGTyp::setTechnischZulaessigeAchslastAchse2()
     * @uses FahrzeugbeschreibungZGTyp::setTechnischZulaessigeAchslastAchse3()
     * @uses FahrzeugbeschreibungZGTyp::setStuetzlast()
     * @uses FahrzeugbeschreibungZGTyp::setAnhaengelastGebremst()
     * @uses FahrzeugbeschreibungZGTyp::setAnhaengelastUngebremst()
     * @uses FahrzeugbeschreibungZGTyp::setAnzahlAchsen()
     * @uses FahrzeugbeschreibungZGTyp::setAnzahlAntriebsachsen()
     * @uses FahrzeugbeschreibungZGTyp::setStandgeraeusch()
     * @uses FahrzeugbeschreibungZGTyp::setStandgeraeuschUmdrehung()
     * @uses FahrzeugbeschreibungZGTyp::setFahrgeraeusch()
     * @uses FahrzeugbeschreibungZGTyp::setBereifungAchse1()
     * @uses FahrzeugbeschreibungZGTyp::setBereifungAchse2()
     * @uses FahrzeugbeschreibungZGTyp::setBereifungAchse3()
     * @uses FahrzeugbeschreibungZGTyp::setLaengeMax()
     * @uses FahrzeugbeschreibungZGTyp::setLaengeMin()
     * @uses FahrzeugbeschreibungZGTyp::setBreiteMax()
     * @uses FahrzeugbeschreibungZGTyp::setBreiteMin()
     * @uses FahrzeugbeschreibungZGTyp::setHoeheMax()
     * @uses FahrzeugbeschreibungZGTyp::setHoeheMin()
     * @uses FahrzeugbeschreibungZGTyp::setBeiblatt()
     * @uses FahrzeugbeschreibungZGTyp::setBemerkungenAusnahmen()
     * @uses FahrzeugbeschreibungZGTyp::setTextFahrzeugklasse()
     * @uses FahrzeugbeschreibungZGTyp::setTextKraftstoff()
     * @uses FahrzeugbeschreibungZGTyp::setTextAufbau()
     * @uses FahrzeugbeschreibungZGTyp::setTextEmissionsklasse()
     */
    public function __construct(?string $artGenehmigung = null, ?string $schluesselFahrzeugklasse = null, ?string $schluesselAufbau = null, ?string $schluesselEmissionsklasse = null, ?string $textEmissionsklasseEGTypgenehmigung = null, ?string $schluesselKraftstoff = null, ?int $kombinierterCO2Wert = null, ?int $kombinierterCo2WertWltp = null, ?int $hoechstgeschwindigkeit = null, ?int $nennleistungKW = null, ?int $nennleistungUmdrehung = null, ?int $hubraum = null, ?float $leistungsgewicht = null, ?int $nutzlast = null, ?float $rauminhalt = null, ?int $anzahlStehplaetze = null, ?int $anzahlSitzplaetze = null, ?int $masseFahrbereitMin = null, ?int $masseFahrbereitMax = null, ?int $technischZulaessigeGesamtmasse = null, ?int $technischZulaessigeAchslastAchse1 = null, ?int $technischZulaessigeAchslastAchse2 = null, ?int $technischZulaessigeAchslastAchse3 = null, ?int $stuetzlast = null, ?int $anhaengelastGebremst = null, ?int $anhaengelastUngebremst = null, ?int $anzahlAchsen = null, ?int $anzahlAntriebsachsen = null, ?string $standgeraeusch = null, ?int $standgeraeuschUmdrehung = null, ?string $fahrgeraeusch = null, ?string $bereifungAchse1 = null, ?string $bereifungAchse2 = null, ?string $bereifungAchse3 = null, ?int $laengeMax = null, ?int $laengeMin = null, ?int $breiteMax = null, ?int $breiteMin = null, ?int $hoeheMax = null, ?int $hoeheMin = null, ?string $beiblatt = null, ?string $bemerkungenAusnahmen = null, ?string $textFahrzeugklasse = null, ?string $textKraftstoff = null, ?string $textAufbau = null, ?string $textEmissionsklasse = null)
    {
        $this
            ->setArtGenehmigung($artGenehmigung)
            ->setSchluesselFahrzeugklasse($schluesselFahrzeugklasse)
            ->setSchluesselAufbau($schluesselAufbau)
            ->setSchluesselEmissionsklasse($schluesselEmissionsklasse)
            ->setTextEmissionsklasseEGTypgenehmigung($textEmissionsklasseEGTypgenehmigung)
            ->setSchluesselKraftstoff($schluesselKraftstoff)
            ->setKombinierterCO2Wert($kombinierterCO2Wert)
            ->setKombinierterCo2WertWltp($kombinierterCo2WertWltp)
            ->setHoechstgeschwindigkeit($hoechstgeschwindigkeit)
            ->setNennleistungKW($nennleistungKW)
            ->setNennleistungUmdrehung($nennleistungUmdrehung)
            ->setHubraum($hubraum)
            ->setLeistungsgewicht($leistungsgewicht)
            ->setNutzlast($nutzlast)
            ->setRauminhalt($rauminhalt)
            ->setAnzahlStehplaetze($anzahlStehplaetze)
            ->setAnzahlSitzplaetze($anzahlSitzplaetze)
            ->setMasseFahrbereitMin($masseFahrbereitMin)
            ->setMasseFahrbereitMax($masseFahrbereitMax)
            ->setTechnischZulaessigeGesamtmasse($technischZulaessigeGesamtmasse)
            ->setTechnischZulaessigeAchslastAchse1($technischZulaessigeAchslastAchse1)
            ->setTechnischZulaessigeAchslastAchse2($technischZulaessigeAchslastAchse2)
            ->setTechnischZulaessigeAchslastAchse3($technischZulaessigeAchslastAchse3)
            ->setStuetzlast($stuetzlast)
            ->setAnhaengelastGebremst($anhaengelastGebremst)
            ->setAnhaengelastUngebremst($anhaengelastUngebremst)
            ->setAnzahlAchsen($anzahlAchsen)
            ->setAnzahlAntriebsachsen($anzahlAntriebsachsen)
            ->setStandgeraeusch($standgeraeusch)
            ->setStandgeraeuschUmdrehung($standgeraeuschUmdrehung)
            ->setFahrgeraeusch($fahrgeraeusch)
            ->setBereifungAchse1($bereifungAchse1)
            ->setBereifungAchse2($bereifungAchse2)
            ->setBereifungAchse3($bereifungAchse3)
            ->setLaengeMax($laengeMax)
            ->setLaengeMin($laengeMin)
            ->setBreiteMax($breiteMax)
            ->setBreiteMin($breiteMin)
            ->setHoeheMax($hoeheMax)
            ->setHoeheMin($hoeheMin)
            ->setBeiblatt($beiblatt)
            ->setBemerkungenAusnahmen($bemerkungenAusnahmen)
            ->setTextFahrzeugklasse($textFahrzeugklasse)
            ->setTextKraftstoff($textKraftstoff)
            ->setTextAufbau($textAufbau)
            ->setTextEmissionsklasse($textEmissionsklasse);
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
     * Get TextEmissionsklasseEGTypgenehmigung value
     */
    public function getTextEmissionsklasseEGTypgenehmigung(): ?string
    {
        return $this->TextEmissionsklasseEGTypgenehmigung;
    }

    /**
     * Set TextEmissionsklasseEGTypgenehmigung value
     */
    public function setTextEmissionsklasseEGTypgenehmigung(?string $textEmissionsklasseEGTypgenehmigung = null): self
    {
        $this->TextEmissionsklasseEGTypgenehmigung = $textEmissionsklasseEGTypgenehmigung;

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
     * Get NennleistungUmdrehung value
     */
    public function getNennleistungUmdrehung(): ?int
    {
        return $this->NennleistungUmdrehung;
    }

    /**
     * Set NennleistungUmdrehung value
     */
    public function setNennleistungUmdrehung(?int $nennleistungUmdrehung = null): self
    {
        $this->NennleistungUmdrehung = $nennleistungUmdrehung;

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
     * Get Leistungsgewicht value
     */
    public function getLeistungsgewicht(): ?float
    {
        return $this->Leistungsgewicht;
    }

    /**
     * Set Leistungsgewicht value
     */
    public function setLeistungsgewicht(?float $leistungsgewicht = null): self
    {
        $this->Leistungsgewicht = $leistungsgewicht;

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
     * Get Rauminhalt value
     */
    public function getRauminhalt(): ?float
    {
        return $this->Rauminhalt;
    }

    /**
     * Set Rauminhalt value
     */
    public function setRauminhalt(?float $rauminhalt = null): self
    {
        $this->Rauminhalt = $rauminhalt;

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
     * Get TechnischZulaessigeAchslastAchse1 value
     */
    public function getTechnischZulaessigeAchslastAchse1(): ?int
    {
        return $this->TechnischZulaessigeAchslastAchse1;
    }

    /**
     * Set TechnischZulaessigeAchslastAchse1 value
     */
    public function setTechnischZulaessigeAchslastAchse1(?int $technischZulaessigeAchslastAchse1 = null): self
    {
        $this->TechnischZulaessigeAchslastAchse1 = $technischZulaessigeAchslastAchse1;

        return $this;
    }

    /**
     * Get TechnischZulaessigeAchslastAchse2 value
     */
    public function getTechnischZulaessigeAchslastAchse2(): ?int
    {
        return $this->TechnischZulaessigeAchslastAchse2;
    }

    /**
     * Set TechnischZulaessigeAchslastAchse2 value
     */
    public function setTechnischZulaessigeAchslastAchse2(?int $technischZulaessigeAchslastAchse2 = null): self
    {
        $this->TechnischZulaessigeAchslastAchse2 = $technischZulaessigeAchslastAchse2;

        return $this;
    }

    /**
     * Get TechnischZulaessigeAchslastAchse3 value
     */
    public function getTechnischZulaessigeAchslastAchse3(): ?int
    {
        return $this->TechnischZulaessigeAchslastAchse3;
    }

    /**
     * Set TechnischZulaessigeAchslastAchse3 value
     */
    public function setTechnischZulaessigeAchslastAchse3(?int $technischZulaessigeAchslastAchse3 = null): self
    {
        $this->TechnischZulaessigeAchslastAchse3 = $technischZulaessigeAchslastAchse3;

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
     * Get AnhaengelastGebremst value
     */
    public function getAnhaengelastGebremst(): ?int
    {
        return $this->AnhaengelastGebremst;
    }

    /**
     * Set AnhaengelastGebremst value
     */
    public function setAnhaengelastGebremst(?int $anhaengelastGebremst = null): self
    {
        $this->AnhaengelastGebremst = $anhaengelastGebremst;

        return $this;
    }

    /**
     * Get AnhaengelastUngebremst value
     */
    public function getAnhaengelastUngebremst(): ?int
    {
        return $this->AnhaengelastUngebremst;
    }

    /**
     * Set AnhaengelastUngebremst value
     */
    public function setAnhaengelastUngebremst(?int $anhaengelastUngebremst = null): self
    {
        $this->AnhaengelastUngebremst = $anhaengelastUngebremst;

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
     * Get StandgeraeuschUmdrehung value
     */
    public function getStandgeraeuschUmdrehung(): ?int
    {
        return $this->StandgeraeuschUmdrehung;
    }

    /**
     * Set StandgeraeuschUmdrehung value
     */
    public function setStandgeraeuschUmdrehung(?int $standgeraeuschUmdrehung = null): self
    {
        $this->StandgeraeuschUmdrehung = $standgeraeuschUmdrehung;

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
     * Get BereifungAchse1 value
     */
    public function getBereifungAchse1(): ?string
    {
        return $this->BereifungAchse1;
    }

    /**
     * Set BereifungAchse1 value
     */
    public function setBereifungAchse1(?string $bereifungAchse1 = null): self
    {
        $this->BereifungAchse1 = $bereifungAchse1;

        return $this;
    }

    /**
     * Get BereifungAchse2 value
     */
    public function getBereifungAchse2(): ?string
    {
        return $this->BereifungAchse2;
    }

    /**
     * Set BereifungAchse2 value
     */
    public function setBereifungAchse2(?string $bereifungAchse2 = null): self
    {
        $this->BereifungAchse2 = $bereifungAchse2;

        return $this;
    }

    /**
     * Get BereifungAchse3 value
     */
    public function getBereifungAchse3(): ?string
    {
        return $this->BereifungAchse3;
    }

    /**
     * Set BereifungAchse3 value
     */
    public function setBereifungAchse3(?string $bereifungAchse3 = null): self
    {
        $this->BereifungAchse3 = $bereifungAchse3;

        return $this;
    }

    /**
     * Get LaengeMax value
     */
    public function getLaengeMax(): ?int
    {
        return $this->LaengeMax;
    }

    /**
     * Set LaengeMax value
     */
    public function setLaengeMax(?int $laengeMax = null): self
    {
        $this->LaengeMax = $laengeMax;

        return $this;
    }

    /**
     * Get LaengeMin value
     */
    public function getLaengeMin(): ?int
    {
        return $this->LaengeMin;
    }

    /**
     * Set LaengeMin value
     */
    public function setLaengeMin(?int $laengeMin = null): self
    {
        $this->LaengeMin = $laengeMin;

        return $this;
    }

    /**
     * Get BreiteMax value
     */
    public function getBreiteMax(): ?int
    {
        return $this->BreiteMax;
    }

    /**
     * Set BreiteMax value
     */
    public function setBreiteMax(?int $breiteMax = null): self
    {
        $this->BreiteMax = $breiteMax;

        return $this;
    }

    /**
     * Get BreiteMin value
     */
    public function getBreiteMin(): ?int
    {
        return $this->BreiteMin;
    }

    /**
     * Set BreiteMin value
     */
    public function setBreiteMin(?int $breiteMin = null): self
    {
        $this->BreiteMin = $breiteMin;

        return $this;
    }

    /**
     * Get HoeheMax value
     */
    public function getHoeheMax(): ?int
    {
        return $this->HoeheMax;
    }

    /**
     * Set HoeheMax value
     */
    public function setHoeheMax(?int $hoeheMax = null): self
    {
        $this->HoeheMax = $hoeheMax;

        return $this;
    }

    /**
     * Get HoeheMin value
     */
    public function getHoeheMin(): ?int
    {
        return $this->HoeheMin;
    }

    /**
     * Set HoeheMin value
     */
    public function setHoeheMin(?int $hoeheMin = null): self
    {
        $this->HoeheMin = $hoeheMin;

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
     * Get TextKraftstoff value
     */
    public function getTextKraftstoff(): ?string
    {
        return $this->TextKraftstoff;
    }

    /**
     * Set TextKraftstoff value
     */
    public function setTextKraftstoff(?string $textKraftstoff = null): self
    {
        $this->TextKraftstoff = $textKraftstoff;

        return $this;
    }

    /**
     * Get TextAufbau value
     */
    public function getTextAufbau(): ?string
    {
        return $this->TextAufbau;
    }

    /**
     * Set TextAufbau value
     */
    public function setTextAufbau(?string $textAufbau = null): self
    {
        $this->TextAufbau = $textAufbau;

        return $this;
    }

    /**
     * Get TextEmissionsklasse value
     */
    public function getTextEmissionsklasse(): ?string
    {
        return $this->TextEmissionsklasse;
    }

    /**
     * Set TextEmissionsklasse value
     */
    public function setTextEmissionsklasse(?string $textEmissionsklasse = null): self
    {
        $this->TextEmissionsklasse = $textEmissionsklasse;

        return $this;
    }
}

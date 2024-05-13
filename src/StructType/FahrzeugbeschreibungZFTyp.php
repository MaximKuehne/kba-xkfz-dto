<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FahrzeugbeschreibungZFTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FahrzeugbeschreibungZFTyp extends AbstractStructBase
{
    /**
     * The SchluesselFahrzeugklasse
     */
    public ?string $SchluesselFahrzeugklasse = null;

    /**
     * The ZulaessigeGesamtmasse
     */
    public ?int $ZulaessigeGesamtmasse = null;

    /**
     * The TechnischZulaessigeGesamtmasse
     */
    public ?int $TechnischZulaessigeGesamtmasse = null;

    /**
     * The ZulaessigeAchslastAchse1
     */
    public ?int $ZulaessigeAchslastAchse1 = null;

    /**
     * The ZulaessigeAchslastAchse2
     */
    public ?int $ZulaessigeAchslastAchse2 = null;

    /**
     * The ZulaessigeAchslastAchse3
     */
    public ?int $ZulaessigeAchslastAchse3 = null;

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
     * The SchluesselEmissionsklasse
     */
    public ?string $SchluesselEmissionsklasse = null;

    /**
     * The TextFahrzeugklasse
     */
    public ?string $TextFahrzeugklasse = null;

    /**
     * The AnzahlAchsen
     */
    public ?int $AnzahlAchsen = null;

    /**
     * The TextEmissionsklasse
     */
    public ?string $TextEmissionsklasse = null;

    /**
     * The SchluesselAufbau
     */
    public ?string $SchluesselAufbau = null;

    /**
     * The MasseFahrbereitMin
     */
    public ?int $MasseFahrbereitMin = null;

    /**
     * The MasseFahrbereitMax
     */
    public ?int $MasseFahrbereitMax = null;

    /**
     * The AnhaengelastGebremst
     */
    public ?int $AnhaengelastGebremst = null;

    /**
     * The AnhaengelastUngebremst
     */
    public ?int $AnhaengelastUngebremst = null;

    /**
     * The AnzahlAntriebsachsen
     */
    public ?int $AnzahlAntriebsachsen = null;

    /**
     * The TextEmissionsklasseEGTypgenehmigung
     */
    public ?string $TextEmissionsklasseEGTypgenehmigung = null;

    /**
     * The TextAufbau
     */
    public ?string $TextAufbau = null;

    /**
     * The Stuetzlast
     */
    public ?int $Stuetzlast = null;

    /**
     * The Hubraum
     */
    public ?int $Hubraum = null;

    /**
     * Constructor method for FahrzeugbeschreibungZFTyp
     *
     * @uses FahrzeugbeschreibungZFTyp::setSchluesselFahrzeugklasse()
     * @uses FahrzeugbeschreibungZFTyp::setZulaessigeGesamtmasse()
     * @uses FahrzeugbeschreibungZFTyp::setTechnischZulaessigeGesamtmasse()
     * @uses FahrzeugbeschreibungZFTyp::setZulaessigeAchslastAchse1()
     * @uses FahrzeugbeschreibungZFTyp::setZulaessigeAchslastAchse2()
     * @uses FahrzeugbeschreibungZFTyp::setZulaessigeAchslastAchse3()
     * @uses FahrzeugbeschreibungZFTyp::setTechnischZulaessigeAchslastAchse1()
     * @uses FahrzeugbeschreibungZFTyp::setTechnischZulaessigeAchslastAchse2()
     * @uses FahrzeugbeschreibungZFTyp::setTechnischZulaessigeAchslastAchse3()
     * @uses FahrzeugbeschreibungZFTyp::setSchluesselEmissionsklasse()
     * @uses FahrzeugbeschreibungZFTyp::setTextFahrzeugklasse()
     * @uses FahrzeugbeschreibungZFTyp::setAnzahlAchsen()
     * @uses FahrzeugbeschreibungZFTyp::setTextEmissionsklasse()
     * @uses FahrzeugbeschreibungZFTyp::setSchluesselAufbau()
     * @uses FahrzeugbeschreibungZFTyp::setMasseFahrbereitMin()
     * @uses FahrzeugbeschreibungZFTyp::setMasseFahrbereitMax()
     * @uses FahrzeugbeschreibungZFTyp::setAnhaengelastGebremst()
     * @uses FahrzeugbeschreibungZFTyp::setAnhaengelastUngebremst()
     * @uses FahrzeugbeschreibungZFTyp::setAnzahlAntriebsachsen()
     * @uses FahrzeugbeschreibungZFTyp::setTextEmissionsklasseEGTypgenehmigung()
     * @uses FahrzeugbeschreibungZFTyp::setTextAufbau()
     * @uses FahrzeugbeschreibungZFTyp::setStuetzlast()
     * @uses FahrzeugbeschreibungZFTyp::setHubraum()
     */
    public function __construct(?string $schluesselFahrzeugklasse = null, ?int $zulaessigeGesamtmasse = null, ?int $technischZulaessigeGesamtmasse = null, ?int $zulaessigeAchslastAchse1 = null, ?int $zulaessigeAchslastAchse2 = null, ?int $zulaessigeAchslastAchse3 = null, ?int $technischZulaessigeAchslastAchse1 = null, ?int $technischZulaessigeAchslastAchse2 = null, ?int $technischZulaessigeAchslastAchse3 = null, ?string $schluesselEmissionsklasse = null, ?string $textFahrzeugklasse = null, ?int $anzahlAchsen = null, ?string $textEmissionsklasse = null, ?string $schluesselAufbau = null, ?int $masseFahrbereitMin = null, ?int $masseFahrbereitMax = null, ?int $anhaengelastGebremst = null, ?int $anhaengelastUngebremst = null, ?int $anzahlAntriebsachsen = null, ?string $textEmissionsklasseEGTypgenehmigung = null, ?string $textAufbau = null, ?int $stuetzlast = null, ?int $hubraum = null)
    {
        $this
            ->setSchluesselFahrzeugklasse($schluesselFahrzeugklasse)
            ->setZulaessigeGesamtmasse($zulaessigeGesamtmasse)
            ->setTechnischZulaessigeGesamtmasse($technischZulaessigeGesamtmasse)
            ->setZulaessigeAchslastAchse1($zulaessigeAchslastAchse1)
            ->setZulaessigeAchslastAchse2($zulaessigeAchslastAchse2)
            ->setZulaessigeAchslastAchse3($zulaessigeAchslastAchse3)
            ->setTechnischZulaessigeAchslastAchse1($technischZulaessigeAchslastAchse1)
            ->setTechnischZulaessigeAchslastAchse2($technischZulaessigeAchslastAchse2)
            ->setTechnischZulaessigeAchslastAchse3($technischZulaessigeAchslastAchse3)
            ->setSchluesselEmissionsklasse($schluesselEmissionsklasse)
            ->setTextFahrzeugklasse($textFahrzeugklasse)
            ->setAnzahlAchsen($anzahlAchsen)
            ->setTextEmissionsklasse($textEmissionsklasse)
            ->setSchluesselAufbau($schluesselAufbau)
            ->setMasseFahrbereitMin($masseFahrbereitMin)
            ->setMasseFahrbereitMax($masseFahrbereitMax)
            ->setAnhaengelastGebremst($anhaengelastGebremst)
            ->setAnhaengelastUngebremst($anhaengelastUngebremst)
            ->setAnzahlAntriebsachsen($anzahlAntriebsachsen)
            ->setTextEmissionsklasseEGTypgenehmigung($textEmissionsklasseEGTypgenehmigung)
            ->setTextAufbau($textAufbau)
            ->setStuetzlast($stuetzlast)
            ->setHubraum($hubraum);
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
     * Get ZulaessigeAchslastAchse1 value
     */
    public function getZulaessigeAchslastAchse1(): ?int
    {
        return $this->ZulaessigeAchslastAchse1;
    }

    /**
     * Set ZulaessigeAchslastAchse1 value
     */
    public function setZulaessigeAchslastAchse1(?int $zulaessigeAchslastAchse1 = null): self
    {
        $this->ZulaessigeAchslastAchse1 = $zulaessigeAchslastAchse1;

        return $this;
    }

    /**
     * Get ZulaessigeAchslastAchse2 value
     */
    public function getZulaessigeAchslastAchse2(): ?int
    {
        return $this->ZulaessigeAchslastAchse2;
    }

    /**
     * Set ZulaessigeAchslastAchse2 value
     */
    public function setZulaessigeAchslastAchse2(?int $zulaessigeAchslastAchse2 = null): self
    {
        $this->ZulaessigeAchslastAchse2 = $zulaessigeAchslastAchse2;

        return $this;
    }

    /**
     * Get ZulaessigeAchslastAchse3 value
     */
    public function getZulaessigeAchslastAchse3(): ?int
    {
        return $this->ZulaessigeAchslastAchse3;
    }

    /**
     * Set ZulaessigeAchslastAchse3 value
     */
    public function setZulaessigeAchslastAchse3(?int $zulaessigeAchslastAchse3 = null): self
    {
        $this->ZulaessigeAchslastAchse3 = $zulaessigeAchslastAchse3;

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
}

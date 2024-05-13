<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FahrzeugbeschreibungZFTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FahrzeugbeschreibungZFTyp extends AbstractStructBase
{
    /**
     * The SchluesselFahrzeugklasse
     * @var string|null
     */
    public ?string $SchluesselFahrzeugklasse = null;
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
     * The ZulaessigeAchslastAchse1
     * @var int|null
     */
    public ?int $ZulaessigeAchslastAchse1 = null;
    /**
     * The ZulaessigeAchslastAchse2
     * @var int|null
     */
    public ?int $ZulaessigeAchslastAchse2 = null;
    /**
     * The ZulaessigeAchslastAchse3
     * @var int|null
     */
    public ?int $ZulaessigeAchslastAchse3 = null;
    /**
     * The TechnischZulaessigeAchslastAchse1
     * @var int|null
     */
    public ?int $TechnischZulaessigeAchslastAchse1 = null;
    /**
     * The TechnischZulaessigeAchslastAchse2
     * @var int|null
     */
    public ?int $TechnischZulaessigeAchslastAchse2 = null;
    /**
     * The TechnischZulaessigeAchslastAchse3
     * @var int|null
     */
    public ?int $TechnischZulaessigeAchslastAchse3 = null;
    /**
     * The SchluesselEmissionsklasse
     * @var string|null
     */
    public ?string $SchluesselEmissionsklasse = null;
    /**
     * The TextFahrzeugklasse
     * @var string|null
     */
    public ?string $TextFahrzeugklasse = null;
    /**
     * The AnzahlAchsen
     * @var int|null
     */
    public ?int $AnzahlAchsen = null;
    /**
     * The TextEmissionsklasse
     * @var string|null
     */
    public ?string $TextEmissionsklasse = null;
    /**
     * The SchluesselAufbau
     * @var string|null
     */
    public ?string $SchluesselAufbau = null;
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
     * The AnhaengelastGebremst
     * @var int|null
     */
    public ?int $AnhaengelastGebremst = null;
    /**
     * The AnhaengelastUngebremst
     * @var int|null
     */
    public ?int $AnhaengelastUngebremst = null;
    /**
     * The AnzahlAntriebsachsen
     * @var int|null
     */
    public ?int $AnzahlAntriebsachsen = null;
    /**
     * The TextEmissionsklasseEGTypgenehmigung
     * @var string|null
     */
    public ?string $TextEmissionsklasseEGTypgenehmigung = null;
    /**
     * The TextAufbau
     * @var string|null
     */
    public ?string $TextAufbau = null;
    /**
     * The Stuetzlast
     * @var int|null
     */
    public ?int $Stuetzlast = null;
    /**
     * The Hubraum
     * @var int|null
     */
    public ?int $Hubraum = null;
    /**
     * Constructor method for FahrzeugbeschreibungZFTyp
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
     * @param string $schluesselFahrzeugklasse
     * @param int $zulaessigeGesamtmasse
     * @param int $technischZulaessigeGesamtmasse
     * @param int $zulaessigeAchslastAchse1
     * @param int $zulaessigeAchslastAchse2
     * @param int $zulaessigeAchslastAchse3
     * @param int $technischZulaessigeAchslastAchse1
     * @param int $technischZulaessigeAchslastAchse2
     * @param int $technischZulaessigeAchslastAchse3
     * @param string $schluesselEmissionsklasse
     * @param string $textFahrzeugklasse
     * @param int $anzahlAchsen
     * @param string $textEmissionsklasse
     * @param string $schluesselAufbau
     * @param int $masseFahrbereitMin
     * @param int $masseFahrbereitMax
     * @param int $anhaengelastGebremst
     * @param int $anhaengelastUngebremst
     * @param int $anzahlAntriebsachsen
     * @param string $textEmissionsklasseEGTypgenehmigung
     * @param string $textAufbau
     * @param int $stuetzlast
     * @param int $hubraum
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
     * @return string|null
     */
    public function getSchluesselFahrzeugklasse(): ?string
    {
        return $this->SchluesselFahrzeugklasse;
    }
    /**
     * Set SchluesselFahrzeugklasse value
     * @param string $schluesselFahrzeugklasse
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp
     */
    public function setSchluesselFahrzeugklasse(?string $schluesselFahrzeugklasse = null): self
    {
        $this->SchluesselFahrzeugklasse = $schluesselFahrzeugklasse;
        
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
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp
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
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp
     */
    public function setTechnischZulaessigeGesamtmasse(?int $technischZulaessigeGesamtmasse = null): self
    {
        $this->TechnischZulaessigeGesamtmasse = $technischZulaessigeGesamtmasse;
        
        return $this;
    }
    /**
     * Get ZulaessigeAchslastAchse1 value
     * @return int|null
     */
    public function getZulaessigeAchslastAchse1(): ?int
    {
        return $this->ZulaessigeAchslastAchse1;
    }
    /**
     * Set ZulaessigeAchslastAchse1 value
     * @param int $zulaessigeAchslastAchse1
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp
     */
    public function setZulaessigeAchslastAchse1(?int $zulaessigeAchslastAchse1 = null): self
    {
        $this->ZulaessigeAchslastAchse1 = $zulaessigeAchslastAchse1;
        
        return $this;
    }
    /**
     * Get ZulaessigeAchslastAchse2 value
     * @return int|null
     */
    public function getZulaessigeAchslastAchse2(): ?int
    {
        return $this->ZulaessigeAchslastAchse2;
    }
    /**
     * Set ZulaessigeAchslastAchse2 value
     * @param int $zulaessigeAchslastAchse2
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp
     */
    public function setZulaessigeAchslastAchse2(?int $zulaessigeAchslastAchse2 = null): self
    {
        $this->ZulaessigeAchslastAchse2 = $zulaessigeAchslastAchse2;
        
        return $this;
    }
    /**
     * Get ZulaessigeAchslastAchse3 value
     * @return int|null
     */
    public function getZulaessigeAchslastAchse3(): ?int
    {
        return $this->ZulaessigeAchslastAchse3;
    }
    /**
     * Set ZulaessigeAchslastAchse3 value
     * @param int $zulaessigeAchslastAchse3
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp
     */
    public function setZulaessigeAchslastAchse3(?int $zulaessigeAchslastAchse3 = null): self
    {
        $this->ZulaessigeAchslastAchse3 = $zulaessigeAchslastAchse3;
        
        return $this;
    }
    /**
     * Get TechnischZulaessigeAchslastAchse1 value
     * @return int|null
     */
    public function getTechnischZulaessigeAchslastAchse1(): ?int
    {
        return $this->TechnischZulaessigeAchslastAchse1;
    }
    /**
     * Set TechnischZulaessigeAchslastAchse1 value
     * @param int $technischZulaessigeAchslastAchse1
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp
     */
    public function setTechnischZulaessigeAchslastAchse1(?int $technischZulaessigeAchslastAchse1 = null): self
    {
        $this->TechnischZulaessigeAchslastAchse1 = $technischZulaessigeAchslastAchse1;
        
        return $this;
    }
    /**
     * Get TechnischZulaessigeAchslastAchse2 value
     * @return int|null
     */
    public function getTechnischZulaessigeAchslastAchse2(): ?int
    {
        return $this->TechnischZulaessigeAchslastAchse2;
    }
    /**
     * Set TechnischZulaessigeAchslastAchse2 value
     * @param int $technischZulaessigeAchslastAchse2
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp
     */
    public function setTechnischZulaessigeAchslastAchse2(?int $technischZulaessigeAchslastAchse2 = null): self
    {
        $this->TechnischZulaessigeAchslastAchse2 = $technischZulaessigeAchslastAchse2;
        
        return $this;
    }
    /**
     * Get TechnischZulaessigeAchslastAchse3 value
     * @return int|null
     */
    public function getTechnischZulaessigeAchslastAchse3(): ?int
    {
        return $this->TechnischZulaessigeAchslastAchse3;
    }
    /**
     * Set TechnischZulaessigeAchslastAchse3 value
     * @param int $technischZulaessigeAchslastAchse3
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp
     */
    public function setTechnischZulaessigeAchslastAchse3(?int $technischZulaessigeAchslastAchse3 = null): self
    {
        $this->TechnischZulaessigeAchslastAchse3 = $technischZulaessigeAchslastAchse3;
        
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
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp
     */
    public function setSchluesselEmissionsklasse(?string $schluesselEmissionsklasse = null): self
    {
        $this->SchluesselEmissionsklasse = $schluesselEmissionsklasse;
        
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
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp
     */
    public function setTextFahrzeugklasse(?string $textFahrzeugklasse = null): self
    {
        $this->TextFahrzeugklasse = $textFahrzeugklasse;
        
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
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp
     */
    public function setAnzahlAchsen(?int $anzahlAchsen = null): self
    {
        $this->AnzahlAchsen = $anzahlAchsen;
        
        return $this;
    }
    /**
     * Get TextEmissionsklasse value
     * @return string|null
     */
    public function getTextEmissionsklasse(): ?string
    {
        return $this->TextEmissionsklasse;
    }
    /**
     * Set TextEmissionsklasse value
     * @param string $textEmissionsklasse
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp
     */
    public function setTextEmissionsklasse(?string $textEmissionsklasse = null): self
    {
        $this->TextEmissionsklasse = $textEmissionsklasse;
        
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
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp
     */
    public function setSchluesselAufbau(?string $schluesselAufbau = null): self
    {
        $this->SchluesselAufbau = $schluesselAufbau;
        
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
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp
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
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp
     */
    public function setMasseFahrbereitMax(?int $masseFahrbereitMax = null): self
    {
        $this->MasseFahrbereitMax = $masseFahrbereitMax;
        
        return $this;
    }
    /**
     * Get AnhaengelastGebremst value
     * @return int|null
     */
    public function getAnhaengelastGebremst(): ?int
    {
        return $this->AnhaengelastGebremst;
    }
    /**
     * Set AnhaengelastGebremst value
     * @param int $anhaengelastGebremst
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp
     */
    public function setAnhaengelastGebremst(?int $anhaengelastGebremst = null): self
    {
        $this->AnhaengelastGebremst = $anhaengelastGebremst;
        
        return $this;
    }
    /**
     * Get AnhaengelastUngebremst value
     * @return int|null
     */
    public function getAnhaengelastUngebremst(): ?int
    {
        return $this->AnhaengelastUngebremst;
    }
    /**
     * Set AnhaengelastUngebremst value
     * @param int $anhaengelastUngebremst
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp
     */
    public function setAnhaengelastUngebremst(?int $anhaengelastUngebremst = null): self
    {
        $this->AnhaengelastUngebremst = $anhaengelastUngebremst;
        
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
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp
     */
    public function setAnzahlAntriebsachsen(?int $anzahlAntriebsachsen = null): self
    {
        $this->AnzahlAntriebsachsen = $anzahlAntriebsachsen;
        
        return $this;
    }
    /**
     * Get TextEmissionsklasseEGTypgenehmigung value
     * @return string|null
     */
    public function getTextEmissionsklasseEGTypgenehmigung(): ?string
    {
        return $this->TextEmissionsklasseEGTypgenehmigung;
    }
    /**
     * Set TextEmissionsklasseEGTypgenehmigung value
     * @param string $textEmissionsklasseEGTypgenehmigung
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp
     */
    public function setTextEmissionsklasseEGTypgenehmigung(?string $textEmissionsklasseEGTypgenehmigung = null): self
    {
        $this->TextEmissionsklasseEGTypgenehmigung = $textEmissionsklasseEGTypgenehmigung;
        
        return $this;
    }
    /**
     * Get TextAufbau value
     * @return string|null
     */
    public function getTextAufbau(): ?string
    {
        return $this->TextAufbau;
    }
    /**
     * Set TextAufbau value
     * @param string $textAufbau
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp
     */
    public function setTextAufbau(?string $textAufbau = null): self
    {
        $this->TextAufbau = $textAufbau;
        
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
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp
     */
    public function setStuetzlast(?int $stuetzlast = null): self
    {
        $this->Stuetzlast = $stuetzlast;
        
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
     * @return \THAG\XKfz\StructType\FahrzeugbeschreibungZFTyp
     */
    public function setHubraum(?int $hubraum = null): self
    {
        $this->Hubraum = $hubraum;
        
        return $this;
    }
}

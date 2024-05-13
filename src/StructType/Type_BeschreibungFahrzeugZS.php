<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.BeschreibungFahrzeugZS StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_BeschreibungFahrzeugZS extends AbstractStructBase
{
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
     * The SchluesselTyp
     * @var string|null
     */
    public ?string $SchluesselTyp = null;
    /**
     * The SchluesselVarianteVersion
     * @var string|null
     */
    public ?string $SchluesselVarianteVersion = null;
    /**
     * The ZulaessigeGesamtmasse
     * @var int|null
     */
    public ?int $ZulaessigeGesamtmasse = null;
    /**
     * The SchluesselKraftstoff
     * @var string|null
     */
    public ?string $SchluesselKraftstoff = null;
    /**
     * The SchluesselEmissionsklasse
     * @var string|null
     */
    public ?string $SchluesselEmissionsklasse = null;
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
     * The Hoechstgeschwindigkeit
     * @var int|null
     */
    public ?int $Hoechstgeschwindigkeit = null;
    /**
     * Constructor method for Type.BeschreibungFahrzeugZS
     * @uses Type_BeschreibungFahrzeugZS::setSchluesselFahrzeugklasse()
     * @uses Type_BeschreibungFahrzeugZS::setSchluesselAufbau()
     * @uses Type_BeschreibungFahrzeugZS::setSchluesselTyp()
     * @uses Type_BeschreibungFahrzeugZS::setSchluesselVarianteVersion()
     * @uses Type_BeschreibungFahrzeugZS::setZulaessigeGesamtmasse()
     * @uses Type_BeschreibungFahrzeugZS::setSchluesselKraftstoff()
     * @uses Type_BeschreibungFahrzeugZS::setSchluesselEmissionsklasse()
     * @uses Type_BeschreibungFahrzeugZS::setNennleistungKW()
     * @uses Type_BeschreibungFahrzeugZS::setHubraum()
     * @uses Type_BeschreibungFahrzeugZS::setHoechstgeschwindigkeit()
     * @param string $schluesselFahrzeugklasse
     * @param string $schluesselAufbau
     * @param string $schluesselTyp
     * @param string $schluesselVarianteVersion
     * @param int $zulaessigeGesamtmasse
     * @param string $schluesselKraftstoff
     * @param string $schluesselEmissionsklasse
     * @param int $nennleistungKW
     * @param int $hubraum
     * @param int $hoechstgeschwindigkeit
     */
    public function __construct(?string $schluesselFahrzeugklasse = null, ?string $schluesselAufbau = null, ?string $schluesselTyp = null, ?string $schluesselVarianteVersion = null, ?int $zulaessigeGesamtmasse = null, ?string $schluesselKraftstoff = null, ?string $schluesselEmissionsklasse = null, ?int $nennleistungKW = null, ?int $hubraum = null, ?int $hoechstgeschwindigkeit = null)
    {
        $this
            ->setSchluesselFahrzeugklasse($schluesselFahrzeugklasse)
            ->setSchluesselAufbau($schluesselAufbau)
            ->setSchluesselTyp($schluesselTyp)
            ->setSchluesselVarianteVersion($schluesselVarianteVersion)
            ->setZulaessigeGesamtmasse($zulaessigeGesamtmasse)
            ->setSchluesselKraftstoff($schluesselKraftstoff)
            ->setSchluesselEmissionsklasse($schluesselEmissionsklasse)
            ->setNennleistungKW($nennleistungKW)
            ->setHubraum($hubraum)
            ->setHoechstgeschwindigkeit($hoechstgeschwindigkeit);
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
     * @return \THAG\XKfz\StructType\Type_BeschreibungFahrzeugZS
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
     * @return \THAG\XKfz\StructType\Type_BeschreibungFahrzeugZS
     */
    public function setSchluesselAufbau(?string $schluesselAufbau = null): self
    {
        $this->SchluesselAufbau = $schluesselAufbau;
        
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
     * @return \THAG\XKfz\StructType\Type_BeschreibungFahrzeugZS
     */
    public function setSchluesselTyp(?string $schluesselTyp = null): self
    {
        $this->SchluesselTyp = $schluesselTyp;
        
        return $this;
    }
    /**
     * Get SchluesselVarianteVersion value
     * @return string|null
     */
    public function getSchluesselVarianteVersion(): ?string
    {
        return $this->SchluesselVarianteVersion;
    }
    /**
     * Set SchluesselVarianteVersion value
     * @param string $schluesselVarianteVersion
     * @return \THAG\XKfz\StructType\Type_BeschreibungFahrzeugZS
     */
    public function setSchluesselVarianteVersion(?string $schluesselVarianteVersion = null): self
    {
        $this->SchluesselVarianteVersion = $schluesselVarianteVersion;
        
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
     * @return \THAG\XKfz\StructType\Type_BeschreibungFahrzeugZS
     */
    public function setZulaessigeGesamtmasse(?int $zulaessigeGesamtmasse = null): self
    {
        $this->ZulaessigeGesamtmasse = $zulaessigeGesamtmasse;
        
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
     * @return \THAG\XKfz\StructType\Type_BeschreibungFahrzeugZS
     */
    public function setSchluesselKraftstoff(?string $schluesselKraftstoff = null): self
    {
        $this->SchluesselKraftstoff = $schluesselKraftstoff;
        
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
     * @return \THAG\XKfz\StructType\Type_BeschreibungFahrzeugZS
     */
    public function setSchluesselEmissionsklasse(?string $schluesselEmissionsklasse = null): self
    {
        $this->SchluesselEmissionsklasse = $schluesselEmissionsklasse;
        
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
     * @return \THAG\XKfz\StructType\Type_BeschreibungFahrzeugZS
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
     * @return \THAG\XKfz\StructType\Type_BeschreibungFahrzeugZS
     */
    public function setHubraum(?int $hubraum = null): self
    {
        $this->Hubraum = $hubraum;
        
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
     * @return \THAG\XKfz\StructType\Type_BeschreibungFahrzeugZS
     */
    public function setHoechstgeschwindigkeit(?int $hoechstgeschwindigkeit = null): self
    {
        $this->Hoechstgeschwindigkeit = $hoechstgeschwindigkeit;
        
        return $this;
    }
}

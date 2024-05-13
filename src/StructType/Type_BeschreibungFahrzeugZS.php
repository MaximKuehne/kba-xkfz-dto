<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.BeschreibungFahrzeugZS StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_BeschreibungFahrzeugZS extends AbstractStructBase
{
    /**
     * The SchluesselFahrzeugklasse
     */
    public ?string $SchluesselFahrzeugklasse = null;

    /**
     * The SchluesselAufbau
     */
    public ?string $SchluesselAufbau = null;

    /**
     * The SchluesselTyp
     */
    public ?string $SchluesselTyp = null;

    /**
     * The SchluesselVarianteVersion
     */
    public ?string $SchluesselVarianteVersion = null;

    /**
     * The ZulaessigeGesamtmasse
     */
    public ?int $ZulaessigeGesamtmasse = null;

    /**
     * The SchluesselKraftstoff
     */
    public ?string $SchluesselKraftstoff = null;

    /**
     * The SchluesselEmissionsklasse
     */
    public ?string $SchluesselEmissionsklasse = null;

    /**
     * The NennleistungKW
     */
    public ?int $NennleistungKW = null;

    /**
     * The Hubraum
     */
    public ?int $Hubraum = null;

    /**
     * The Hoechstgeschwindigkeit
     */
    public ?int $Hoechstgeschwindigkeit = null;

    /**
     * Constructor method for Type.BeschreibungFahrzeugZS
     *
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
     * Get SchluesselVarianteVersion value
     */
    public function getSchluesselVarianteVersion(): ?string
    {
        return $this->SchluesselVarianteVersion;
    }

    /**
     * Set SchluesselVarianteVersion value
     */
    public function setSchluesselVarianteVersion(?string $schluesselVarianteVersion = null): self
    {
        $this->SchluesselVarianteVersion = $schluesselVarianteVersion;

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
}

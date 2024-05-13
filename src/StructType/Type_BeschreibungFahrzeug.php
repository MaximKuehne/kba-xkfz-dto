<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.BeschreibungFahrzeug StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_BeschreibungFahrzeug extends AbstractStructBase
{
    /**
     * The SchluesselFahrzeugklasse
     */
    public ?string $SchluesselFahrzeugklasse = null;

    /**
     * The TextTyp
     */
    public ?string $TextTyp = null;

    /**
     * The SchluesselTyp
     */
    public ?string $SchluesselTyp = null;

    /**
     * The TextVariante
     */
    public ?string $TextVariante = null;

    /**
     * The TextVersion
     */
    public ?string $TextVersion = null;

    /**
     * The SchluesselVarianteVersion
     */
    public ?string $SchluesselVarianteVersion = null;

    /**
     * The ZulaessigeGesamtmasse
     */
    public ?int $ZulaessigeGesamtmasse = null;

    /**
     * Constructor method for Type.BeschreibungFahrzeug
     *
     * @uses Type_BeschreibungFahrzeug::setSchluesselFahrzeugklasse()
     * @uses Type_BeschreibungFahrzeug::setTextTyp()
     * @uses Type_BeschreibungFahrzeug::setSchluesselTyp()
     * @uses Type_BeschreibungFahrzeug::setTextVariante()
     * @uses Type_BeschreibungFahrzeug::setTextVersion()
     * @uses Type_BeschreibungFahrzeug::setSchluesselVarianteVersion()
     * @uses Type_BeschreibungFahrzeug::setZulaessigeGesamtmasse()
     */
    public function __construct(?string $schluesselFahrzeugklasse = null, ?string $textTyp = null, ?string $schluesselTyp = null, ?string $textVariante = null, ?string $textVersion = null, ?string $schluesselVarianteVersion = null, ?int $zulaessigeGesamtmasse = null)
    {
        $this
            ->setSchluesselFahrzeugklasse($schluesselFahrzeugklasse)
            ->setTextTyp($textTyp)
            ->setSchluesselTyp($schluesselTyp)
            ->setTextVariante($textVariante)
            ->setTextVersion($textVersion)
            ->setSchluesselVarianteVersion($schluesselVarianteVersion)
            ->setZulaessigeGesamtmasse($zulaessigeGesamtmasse);
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
     * Get TextTyp value
     */
    public function getTextTyp(): ?string
    {
        return $this->TextTyp;
    }

    /**
     * Set TextTyp value
     */
    public function setTextTyp(?string $textTyp = null): self
    {
        $this->TextTyp = $textTyp;

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
     * Get TextVariante value
     */
    public function getTextVariante(): ?string
    {
        return $this->TextVariante;
    }

    /**
     * Set TextVariante value
     */
    public function setTextVariante(?string $textVariante = null): self
    {
        $this->TextVariante = $textVariante;

        return $this;
    }

    /**
     * Get TextVersion value
     */
    public function getTextVersion(): ?string
    {
        return $this->TextVersion;
    }

    /**
     * Set TextVersion value
     */
    public function setTextVersion(?string $textVersion = null): self
    {
        $this->TextVersion = $textVersion;

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
}

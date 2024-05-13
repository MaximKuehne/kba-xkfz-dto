<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AnfrageFeinstaubplakette StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AnfrageFeinstaubplakette extends AbstractStructBase
{
    /**
     * The SchluesselHersteller
     */
    public ?string $SchluesselHersteller = null;

    /**
     * The SchluesselTyp
     */
    public ?string $SchluesselTyp = null;

    /**
     * The SchluesselVarianteVersion
     */
    public ?string $SchluesselVarianteVersion = null;

    /**
     * The SchluesselFahrzeugklasse
     */
    public ?string $SchluesselFahrzeugklasse = null;

    /**
     * The SchluesselKraftstoff
     */
    public ?string $SchluesselKraftstoff = null;

    /**
     * The SchluesselEmissionsklasse
     */
    public ?string $SchluesselEmissionsklasse = null;

    /**
     * The partikelminderungsstufe
     */
    public ?string $partikelminderungsstufe = null;

    /**
     * The gesamtmasse
     */
    public ?int $gesamtmasse = null;

    /**
     * Constructor method for Type.AnfrageFeinstaubplakette
     *
     * @uses Type_AnfrageFeinstaubplakette::setSchluesselHersteller()
     * @uses Type_AnfrageFeinstaubplakette::setSchluesselTyp()
     * @uses Type_AnfrageFeinstaubplakette::setSchluesselVarianteVersion()
     * @uses Type_AnfrageFeinstaubplakette::setSchluesselFahrzeugklasse()
     * @uses Type_AnfrageFeinstaubplakette::setSchluesselKraftstoff()
     * @uses Type_AnfrageFeinstaubplakette::setSchluesselEmissionsklasse()
     * @uses Type_AnfrageFeinstaubplakette::setPartikelminderungsstufe()
     * @uses Type_AnfrageFeinstaubplakette::setGesamtmasse()
     */
    public function __construct(?string $schluesselHersteller = null, ?string $schluesselTyp = null, ?string $schluesselVarianteVersion = null, ?string $schluesselFahrzeugklasse = null, ?string $schluesselKraftstoff = null, ?string $schluesselEmissionsklasse = null, ?string $partikelminderungsstufe = null, ?int $gesamtmasse = null)
    {
        $this
            ->setSchluesselHersteller($schluesselHersteller)
            ->setSchluesselTyp($schluesselTyp)
            ->setSchluesselVarianteVersion($schluesselVarianteVersion)
            ->setSchluesselFahrzeugklasse($schluesselFahrzeugklasse)
            ->setSchluesselKraftstoff($schluesselKraftstoff)
            ->setSchluesselEmissionsklasse($schluesselEmissionsklasse)
            ->setPartikelminderungsstufe($partikelminderungsstufe)
            ->setGesamtmasse($gesamtmasse);
    }

    /**
     * Get SchluesselHersteller value
     */
    public function getSchluesselHersteller(): ?string
    {
        return $this->SchluesselHersteller;
    }

    /**
     * Set SchluesselHersteller value
     */
    public function setSchluesselHersteller(?string $schluesselHersteller = null): self
    {
        $this->SchluesselHersteller = $schluesselHersteller;

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
     * Get partikelminderungsstufe value
     */
    public function getPartikelminderungsstufe(): ?string
    {
        return $this->partikelminderungsstufe;
    }

    /**
     * Set partikelminderungsstufe value
     */
    public function setPartikelminderungsstufe(?string $partikelminderungsstufe = null): self
    {
        $this->partikelminderungsstufe = $partikelminderungsstufe;

        return $this;
    }

    /**
     * Get gesamtmasse value
     */
    public function getGesamtmasse(): ?int
    {
        return $this->gesamtmasse;
    }

    /**
     * Set gesamtmasse value
     */
    public function setGesamtmasse(?int $gesamtmasse = null): self
    {
        $this->gesamtmasse = $gesamtmasse;

        return $this;
    }
}

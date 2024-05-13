<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AnfrageFeinstaubplakette StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AnfrageFeinstaubplakette extends AbstractStructBase
{
    /**
     * The SchluesselHersteller
     * @var string|null
     */
    public ?string $SchluesselHersteller = null;
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
     * The SchluesselFahrzeugklasse
     * @var string|null
     */
    public ?string $SchluesselFahrzeugklasse = null;
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
     * The partikelminderungsstufe
     * @var string|null
     */
    public ?string $partikelminderungsstufe = null;
    /**
     * The gesamtmasse
     * @var int|null
     */
    public ?int $gesamtmasse = null;
    /**
     * Constructor method for Type.AnfrageFeinstaubplakette
     * @uses Type_AnfrageFeinstaubplakette::setSchluesselHersteller()
     * @uses Type_AnfrageFeinstaubplakette::setSchluesselTyp()
     * @uses Type_AnfrageFeinstaubplakette::setSchluesselVarianteVersion()
     * @uses Type_AnfrageFeinstaubplakette::setSchluesselFahrzeugklasse()
     * @uses Type_AnfrageFeinstaubplakette::setSchluesselKraftstoff()
     * @uses Type_AnfrageFeinstaubplakette::setSchluesselEmissionsklasse()
     * @uses Type_AnfrageFeinstaubplakette::setPartikelminderungsstufe()
     * @uses Type_AnfrageFeinstaubplakette::setGesamtmasse()
     * @param string $schluesselHersteller
     * @param string $schluesselTyp
     * @param string $schluesselVarianteVersion
     * @param string $schluesselFahrzeugklasse
     * @param string $schluesselKraftstoff
     * @param string $schluesselEmissionsklasse
     * @param string $partikelminderungsstufe
     * @param int $gesamtmasse
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
     * @return string|null
     */
    public function getSchluesselHersteller(): ?string
    {
        return $this->SchluesselHersteller;
    }
    /**
     * Set SchluesselHersteller value
     * @param string $schluesselHersteller
     * @return \THAG\XKfz\StructType\Type_AnfrageFeinstaubplakette
     */
    public function setSchluesselHersteller(?string $schluesselHersteller = null): self
    {
        $this->SchluesselHersteller = $schluesselHersteller;
        
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
     * @return \THAG\XKfz\StructType\Type_AnfrageFeinstaubplakette
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
     * @return \THAG\XKfz\StructType\Type_AnfrageFeinstaubplakette
     */
    public function setSchluesselVarianteVersion(?string $schluesselVarianteVersion = null): self
    {
        $this->SchluesselVarianteVersion = $schluesselVarianteVersion;
        
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
     * @return \THAG\XKfz\StructType\Type_AnfrageFeinstaubplakette
     */
    public function setSchluesselFahrzeugklasse(?string $schluesselFahrzeugklasse = null): self
    {
        $this->SchluesselFahrzeugklasse = $schluesselFahrzeugklasse;
        
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
     * @return \THAG\XKfz\StructType\Type_AnfrageFeinstaubplakette
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
     * @return \THAG\XKfz\StructType\Type_AnfrageFeinstaubplakette
     */
    public function setSchluesselEmissionsklasse(?string $schluesselEmissionsklasse = null): self
    {
        $this->SchluesselEmissionsklasse = $schluesselEmissionsklasse;
        
        return $this;
    }
    /**
     * Get partikelminderungsstufe value
     * @return string|null
     */
    public function getPartikelminderungsstufe(): ?string
    {
        return $this->partikelminderungsstufe;
    }
    /**
     * Set partikelminderungsstufe value
     * @param string $partikelminderungsstufe
     * @return \THAG\XKfz\StructType\Type_AnfrageFeinstaubplakette
     */
    public function setPartikelminderungsstufe(?string $partikelminderungsstufe = null): self
    {
        $this->partikelminderungsstufe = $partikelminderungsstufe;
        
        return $this;
    }
    /**
     * Get gesamtmasse value
     * @return int|null
     */
    public function getGesamtmasse(): ?int
    {
        return $this->gesamtmasse;
    }
    /**
     * Set gesamtmasse value
     * @param int $gesamtmasse
     * @return \THAG\XKfz\StructType\Type_AnfrageFeinstaubplakette
     */
    public function setGesamtmasse(?int $gesamtmasse = null): self
    {
        $this->gesamtmasse = $gesamtmasse;
        
        return $this;
    }
}

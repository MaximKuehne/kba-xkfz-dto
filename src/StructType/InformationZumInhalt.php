<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for informationZumInhalt StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class InformationZumInhalt extends AbstractStructBase
{
    /**
     * The typ
     * @var \THAG\XKfz\StructType\Code_TypDerReferenzdatei|null
     */
    public ?\THAG\XKfz\StructType\Code_TypDerReferenzdatei $typ = null;
    /**
     * The artDesSiegels
     * @var \THAG\XKfz\StructType\Code_ArtDesSiegels|null
     */
    public ?\THAG\XKfz\StructType\Code_ArtDesSiegels $artDesSiegels = null;
    /**
     * The anzahlDerDatensaetze
     * @var int|null
     */
    public ?int $anzahlDerDatensaetze = null;
    /**
     * The ersteDruckstuecknummer
     * @var string|null
     */
    public ?string $ersteDruckstuecknummer = null;
    /**
     * The letzteDruckstuecknummer
     * @var string|null
     */
    public ?string $letzteDruckstuecknummer = null;
    /**
     * Constructor method for informationZumInhalt
     * @uses InformationZumInhalt::setTyp()
     * @uses InformationZumInhalt::setArtDesSiegels()
     * @uses InformationZumInhalt::setAnzahlDerDatensaetze()
     * @uses InformationZumInhalt::setErsteDruckstuecknummer()
     * @uses InformationZumInhalt::setLetzteDruckstuecknummer()
     * @param \THAG\XKfz\StructType\Code_TypDerReferenzdatei $typ
     * @param \THAG\XKfz\StructType\Code_ArtDesSiegels $artDesSiegels
     * @param int $anzahlDerDatensaetze
     * @param string $ersteDruckstuecknummer
     * @param string $letzteDruckstuecknummer
     */
    public function __construct(?\THAG\XKfz\StructType\Code_TypDerReferenzdatei $typ = null, ?\THAG\XKfz\StructType\Code_ArtDesSiegels $artDesSiegels = null, ?int $anzahlDerDatensaetze = null, ?string $ersteDruckstuecknummer = null, ?string $letzteDruckstuecknummer = null)
    {
        $this
            ->setTyp($typ)
            ->setArtDesSiegels($artDesSiegels)
            ->setAnzahlDerDatensaetze($anzahlDerDatensaetze)
            ->setErsteDruckstuecknummer($ersteDruckstuecknummer)
            ->setLetzteDruckstuecknummer($letzteDruckstuecknummer);
    }
    /**
     * Get typ value
     * @return \THAG\XKfz\StructType\Code_TypDerReferenzdatei|null
     */
    public function getTyp(): ?\THAG\XKfz\StructType\Code_TypDerReferenzdatei
    {
        return $this->typ;
    }
    /**
     * Set typ value
     * @param \THAG\XKfz\StructType\Code_TypDerReferenzdatei $typ
     * @return \THAG\XKfz\StructType\InformationZumInhalt
     */
    public function setTyp(?\THAG\XKfz\StructType\Code_TypDerReferenzdatei $typ = null): self
    {
        $this->typ = $typ;
        
        return $this;
    }
    /**
     * Get artDesSiegels value
     * @return \THAG\XKfz\StructType\Code_ArtDesSiegels|null
     */
    public function getArtDesSiegels(): ?\THAG\XKfz\StructType\Code_ArtDesSiegels
    {
        return $this->artDesSiegels;
    }
    /**
     * Set artDesSiegels value
     * @param \THAG\XKfz\StructType\Code_ArtDesSiegels $artDesSiegels
     * @return \THAG\XKfz\StructType\InformationZumInhalt
     */
    public function setArtDesSiegels(?\THAG\XKfz\StructType\Code_ArtDesSiegels $artDesSiegels = null): self
    {
        $this->artDesSiegels = $artDesSiegels;
        
        return $this;
    }
    /**
     * Get anzahlDerDatensaetze value
     * @return int|null
     */
    public function getAnzahlDerDatensaetze(): ?int
    {
        return $this->anzahlDerDatensaetze;
    }
    /**
     * Set anzahlDerDatensaetze value
     * @param int $anzahlDerDatensaetze
     * @return \THAG\XKfz\StructType\InformationZumInhalt
     */
    public function setAnzahlDerDatensaetze(?int $anzahlDerDatensaetze = null): self
    {
        $this->anzahlDerDatensaetze = $anzahlDerDatensaetze;
        
        return $this;
    }
    /**
     * Get ersteDruckstuecknummer value
     * @return string|null
     */
    public function getErsteDruckstuecknummer(): ?string
    {
        return $this->ersteDruckstuecknummer;
    }
    /**
     * Set ersteDruckstuecknummer value
     * @param string $ersteDruckstuecknummer
     * @return \THAG\XKfz\StructType\InformationZumInhalt
     */
    public function setErsteDruckstuecknummer(?string $ersteDruckstuecknummer = null): self
    {
        $this->ersteDruckstuecknummer = $ersteDruckstuecknummer;
        
        return $this;
    }
    /**
     * Get letzteDruckstuecknummer value
     * @return string|null
     */
    public function getLetzteDruckstuecknummer(): ?string
    {
        return $this->letzteDruckstuecknummer;
    }
    /**
     * Set letzteDruckstuecknummer value
     * @param string $letzteDruckstuecknummer
     * @return \THAG\XKfz\StructType\InformationZumInhalt
     */
    public function setLetzteDruckstuecknummer(?string $letzteDruckstuecknummer = null): self
    {
        $this->letzteDruckstuecknummer = $letzteDruckstuecknummer;
        
        return $this;
    }
}

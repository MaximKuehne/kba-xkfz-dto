<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for informationZumInhalt StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class InformationZumInhalt extends AbstractStructBase
{
    /**
     * The typ
     */
    public ?\THAG\XKfz\StructType\Code_TypDerReferenzdatei $typ = null;

    /**
     * The artDesSiegels
     */
    public ?\THAG\XKfz\StructType\Code_ArtDesSiegels $artDesSiegels = null;

    /**
     * The anzahlDerDatensaetze
     */
    public ?int $anzahlDerDatensaetze = null;

    /**
     * The ersteDruckstuecknummer
     */
    public ?string $ersteDruckstuecknummer = null;

    /**
     * The letzteDruckstuecknummer
     */
    public ?string $letzteDruckstuecknummer = null;

    /**
     * Constructor method for informationZumInhalt
     *
     * @uses InformationZumInhalt::setTyp()
     * @uses InformationZumInhalt::setArtDesSiegels()
     * @uses InformationZumInhalt::setAnzahlDerDatensaetze()
     * @uses InformationZumInhalt::setErsteDruckstuecknummer()
     * @uses InformationZumInhalt::setLetzteDruckstuecknummer()
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
     */
    public function getTyp(): ?\THAG\XKfz\StructType\Code_TypDerReferenzdatei
    {
        return $this->typ;
    }

    /**
     * Set typ value
     */
    public function setTyp(?\THAG\XKfz\StructType\Code_TypDerReferenzdatei $typ = null): self
    {
        $this->typ = $typ;

        return $this;
    }

    /**
     * Get artDesSiegels value
     */
    public function getArtDesSiegels(): ?\THAG\XKfz\StructType\Code_ArtDesSiegels
    {
        return $this->artDesSiegels;
    }

    /**
     * Set artDesSiegels value
     */
    public function setArtDesSiegels(?\THAG\XKfz\StructType\Code_ArtDesSiegels $artDesSiegels = null): self
    {
        $this->artDesSiegels = $artDesSiegels;

        return $this;
    }

    /**
     * Get anzahlDerDatensaetze value
     */
    public function getAnzahlDerDatensaetze(): ?int
    {
        return $this->anzahlDerDatensaetze;
    }

    /**
     * Set anzahlDerDatensaetze value
     */
    public function setAnzahlDerDatensaetze(?int $anzahlDerDatensaetze = null): self
    {
        $this->anzahlDerDatensaetze = $anzahlDerDatensaetze;

        return $this;
    }

    /**
     * Get ersteDruckstuecknummer value
     */
    public function getErsteDruckstuecknummer(): ?string
    {
        return $this->ersteDruckstuecknummer;
    }

    /**
     * Set ersteDruckstuecknummer value
     */
    public function setErsteDruckstuecknummer(?string $ersteDruckstuecknummer = null): self
    {
        $this->ersteDruckstuecknummer = $ersteDruckstuecknummer;

        return $this;
    }

    /**
     * Get letzteDruckstuecknummer value
     */
    public function getLetzteDruckstuecknummer(): ?string
    {
        return $this->letzteDruckstuecknummer;
    }

    /**
     * Set letzteDruckstuecknummer value
     */
    public function setLetzteDruckstuecknummer(?string $letzteDruckstuecknummer = null): self
    {
        $this->letzteDruckstuecknummer = $letzteDruckstuecknummer;

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BriefkastenIdAntwort StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class BriefkastenIdAntwort extends AbstractStructBase
{
    /**
     * The AnzahlBriefkastenId
     */
    public ?string $AnzahlBriefkastenId = null;

    /**
     * The ListeBriefkastenDaten
     */
    public ?\THAG\XKfz\StructType\ListeBriefkastenDaten $ListeBriefkastenDaten = null;

    /**
     * Constructor method for BriefkastenIdAntwort
     *
     * @uses BriefkastenIdAntwort::setAnzahlBriefkastenId()
     * @uses BriefkastenIdAntwort::setListeBriefkastenDaten()
     */
    public function __construct(?string $anzahlBriefkastenId = null, ?\THAG\XKfz\StructType\ListeBriefkastenDaten $listeBriefkastenDaten = null)
    {
        $this
            ->setAnzahlBriefkastenId($anzahlBriefkastenId)
            ->setListeBriefkastenDaten($listeBriefkastenDaten);
    }

    /**
     * Get AnzahlBriefkastenId value
     */
    public function getAnzahlBriefkastenId(): ?string
    {
        return $this->AnzahlBriefkastenId;
    }

    /**
     * Set AnzahlBriefkastenId value
     */
    public function setAnzahlBriefkastenId(?string $anzahlBriefkastenId = null): self
    {
        $this->AnzahlBriefkastenId = $anzahlBriefkastenId;

        return $this;
    }

    /**
     * Get ListeBriefkastenDaten value
     */
    public function getListeBriefkastenDaten(): ?\THAG\XKfz\StructType\ListeBriefkastenDaten
    {
        return $this->ListeBriefkastenDaten;
    }

    /**
     * Set ListeBriefkastenDaten value
     */
    public function setListeBriefkastenDaten(?\THAG\XKfz\StructType\ListeBriefkastenDaten $listeBriefkastenDaten = null): self
    {
        $this->ListeBriefkastenDaten = $listeBriefkastenDaten;

        return $this;
    }
}

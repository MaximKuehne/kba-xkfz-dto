<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BriefkastenIdAntwort StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class BriefkastenIdAntwort extends AbstractStructBase
{
    /**
     * The AnzahlBriefkastenId
     * @var string|null
     */
    public ?string $AnzahlBriefkastenId = null;
    /**
     * The ListeBriefkastenDaten
     * @var \THAG\XKfz\StructType\ListeBriefkastenDaten|null
     */
    public ?\THAG\XKfz\StructType\ListeBriefkastenDaten $ListeBriefkastenDaten = null;
    /**
     * Constructor method for BriefkastenIdAntwort
     * @uses BriefkastenIdAntwort::setAnzahlBriefkastenId()
     * @uses BriefkastenIdAntwort::setListeBriefkastenDaten()
     * @param string $anzahlBriefkastenId
     * @param \THAG\XKfz\StructType\ListeBriefkastenDaten $listeBriefkastenDaten
     */
    public function __construct(?string $anzahlBriefkastenId = null, ?\THAG\XKfz\StructType\ListeBriefkastenDaten $listeBriefkastenDaten = null)
    {
        $this
            ->setAnzahlBriefkastenId($anzahlBriefkastenId)
            ->setListeBriefkastenDaten($listeBriefkastenDaten);
    }
    /**
     * Get AnzahlBriefkastenId value
     * @return string|null
     */
    public function getAnzahlBriefkastenId(): ?string
    {
        return $this->AnzahlBriefkastenId;
    }
    /**
     * Set AnzahlBriefkastenId value
     * @param string $anzahlBriefkastenId
     * @return \THAG\XKfz\StructType\BriefkastenIdAntwort
     */
    public function setAnzahlBriefkastenId(?string $anzahlBriefkastenId = null): self
    {
        $this->AnzahlBriefkastenId = $anzahlBriefkastenId;
        
        return $this;
    }
    /**
     * Get ListeBriefkastenDaten value
     * @return \THAG\XKfz\StructType\ListeBriefkastenDaten|null
     */
    public function getListeBriefkastenDaten(): ?\THAG\XKfz\StructType\ListeBriefkastenDaten
    {
        return $this->ListeBriefkastenDaten;
    }
    /**
     * Set ListeBriefkastenDaten value
     * @param \THAG\XKfz\StructType\ListeBriefkastenDaten $listeBriefkastenDaten
     * @return \THAG\XKfz\StructType\BriefkastenIdAntwort
     */
    public function setListeBriefkastenDaten(?\THAG\XKfz\StructType\ListeBriefkastenDaten $listeBriefkastenDaten = null): self
    {
        $this->ListeBriefkastenDaten = $listeBriefkastenDaten;
        
        return $this;
    }
}

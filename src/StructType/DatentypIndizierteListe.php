<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypIndizierteListe StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypIndizierteListe extends AbstractStructBase
{
    /**
     * The IndexDatentypName
     * @var string|null
     */
    public ?string $IndexDatentypName = null;
    /**
     * The IndexName
     * @var string|null
     */
    public ?string $IndexName = null;
    /**
     * The IndexBeschreibung
     * @var string|null
     */
    public ?string $IndexBeschreibung = null;
    /**
     * The DatentypName
     * @var string|null
     */
    public ?string $DatentypName = null;
    /**
     * The DateneintragName
     * @var string|null
     */
    public ?string $DateneintragName = null;
    /**
     * The DateneintragBeschreibung
     * @var string|null
     */
    public ?string $DateneintragBeschreibung = null;
    /**
     * The DatentypListeMinLaenge
     * @var string|null
     */
    public ?string $DatentypListeMinLaenge = null;
    /**
     * The DatentypListeMaxLaenge
     * @var string|null
     */
    public ?string $DatentypListeMaxLaenge = null;
    /**
     * The DatenDefault
     * @var string|null
     */
    public ?string $DatenDefault = null;
    /**
     * Constructor method for DatentypIndizierteListe
     * @uses DatentypIndizierteListe::setIndexDatentypName()
     * @uses DatentypIndizierteListe::setIndexName()
     * @uses DatentypIndizierteListe::setIndexBeschreibung()
     * @uses DatentypIndizierteListe::setDatentypName()
     * @uses DatentypIndizierteListe::setDateneintragName()
     * @uses DatentypIndizierteListe::setDateneintragBeschreibung()
     * @uses DatentypIndizierteListe::setDatentypListeMinLaenge()
     * @uses DatentypIndizierteListe::setDatentypListeMaxLaenge()
     * @uses DatentypIndizierteListe::setDatenDefault()
     * @param string $indexDatentypName
     * @param string $indexName
     * @param string $indexBeschreibung
     * @param string $datentypName
     * @param string $dateneintragName
     * @param string $dateneintragBeschreibung
     * @param string $datentypListeMinLaenge
     * @param string $datentypListeMaxLaenge
     * @param string $datenDefault
     */
    public function __construct(?string $indexDatentypName = null, ?string $indexName = null, ?string $indexBeschreibung = null, ?string $datentypName = null, ?string $dateneintragName = null, ?string $dateneintragBeschreibung = null, ?string $datentypListeMinLaenge = null, ?string $datentypListeMaxLaenge = null, ?string $datenDefault = null)
    {
        $this
            ->setIndexDatentypName($indexDatentypName)
            ->setIndexName($indexName)
            ->setIndexBeschreibung($indexBeschreibung)
            ->setDatentypName($datentypName)
            ->setDateneintragName($dateneintragName)
            ->setDateneintragBeschreibung($dateneintragBeschreibung)
            ->setDatentypListeMinLaenge($datentypListeMinLaenge)
            ->setDatentypListeMaxLaenge($datentypListeMaxLaenge)
            ->setDatenDefault($datenDefault);
    }
    /**
     * Get IndexDatentypName value
     * @return string|null
     */
    public function getIndexDatentypName(): ?string
    {
        return $this->IndexDatentypName;
    }
    /**
     * Set IndexDatentypName value
     * @param string $indexDatentypName
     * @return \THAG\XKfz\StructType\DatentypIndizierteListe
     */
    public function setIndexDatentypName(?string $indexDatentypName = null): self
    {
        $this->IndexDatentypName = $indexDatentypName;
        
        return $this;
    }
    /**
     * Get IndexName value
     * @return string|null
     */
    public function getIndexName(): ?string
    {
        return $this->IndexName;
    }
    /**
     * Set IndexName value
     * @param string $indexName
     * @return \THAG\XKfz\StructType\DatentypIndizierteListe
     */
    public function setIndexName(?string $indexName = null): self
    {
        $this->IndexName = $indexName;
        
        return $this;
    }
    /**
     * Get IndexBeschreibung value
     * @return string|null
     */
    public function getIndexBeschreibung(): ?string
    {
        return $this->IndexBeschreibung;
    }
    /**
     * Set IndexBeschreibung value
     * @param string $indexBeschreibung
     * @return \THAG\XKfz\StructType\DatentypIndizierteListe
     */
    public function setIndexBeschreibung(?string $indexBeschreibung = null): self
    {
        $this->IndexBeschreibung = $indexBeschreibung;
        
        return $this;
    }
    /**
     * Get DatentypName value
     * @return string|null
     */
    public function getDatentypName(): ?string
    {
        return $this->DatentypName;
    }
    /**
     * Set DatentypName value
     * @param string $datentypName
     * @return \THAG\XKfz\StructType\DatentypIndizierteListe
     */
    public function setDatentypName(?string $datentypName = null): self
    {
        $this->DatentypName = $datentypName;
        
        return $this;
    }
    /**
     * Get DateneintragName value
     * @return string|null
     */
    public function getDateneintragName(): ?string
    {
        return $this->DateneintragName;
    }
    /**
     * Set DateneintragName value
     * @param string $dateneintragName
     * @return \THAG\XKfz\StructType\DatentypIndizierteListe
     */
    public function setDateneintragName(?string $dateneintragName = null): self
    {
        $this->DateneintragName = $dateneintragName;
        
        return $this;
    }
    /**
     * Get DateneintragBeschreibung value
     * @return string|null
     */
    public function getDateneintragBeschreibung(): ?string
    {
        return $this->DateneintragBeschreibung;
    }
    /**
     * Set DateneintragBeschreibung value
     * @param string $dateneintragBeschreibung
     * @return \THAG\XKfz\StructType\DatentypIndizierteListe
     */
    public function setDateneintragBeschreibung(?string $dateneintragBeschreibung = null): self
    {
        $this->DateneintragBeschreibung = $dateneintragBeschreibung;
        
        return $this;
    }
    /**
     * Get DatentypListeMinLaenge value
     * @return string|null
     */
    public function getDatentypListeMinLaenge(): ?string
    {
        return $this->DatentypListeMinLaenge;
    }
    /**
     * Set DatentypListeMinLaenge value
     * @param string $datentypListeMinLaenge
     * @return \THAG\XKfz\StructType\DatentypIndizierteListe
     */
    public function setDatentypListeMinLaenge(?string $datentypListeMinLaenge = null): self
    {
        $this->DatentypListeMinLaenge = $datentypListeMinLaenge;
        
        return $this;
    }
    /**
     * Get DatentypListeMaxLaenge value
     * @return string|null
     */
    public function getDatentypListeMaxLaenge(): ?string
    {
        return $this->DatentypListeMaxLaenge;
    }
    /**
     * Set DatentypListeMaxLaenge value
     * @param string $datentypListeMaxLaenge
     * @return \THAG\XKfz\StructType\DatentypIndizierteListe
     */
    public function setDatentypListeMaxLaenge(?string $datentypListeMaxLaenge = null): self
    {
        $this->DatentypListeMaxLaenge = $datentypListeMaxLaenge;
        
        return $this;
    }
    /**
     * Get DatenDefault value
     * @return string|null
     */
    public function getDatenDefault(): ?string
    {
        return $this->DatenDefault;
    }
    /**
     * Set DatenDefault value
     * @param string $datenDefault
     * @return \THAG\XKfz\StructType\DatentypIndizierteListe
     */
    public function setDatenDefault(?string $datenDefault = null): self
    {
        $this->DatenDefault = $datenDefault;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypIndizierteListe StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypIndizierteListe extends AbstractStructBase
{
    /**
     * The IndexDatentypName
     */
    public ?string $IndexDatentypName = null;

    /**
     * The IndexName
     */
    public ?string $IndexName = null;

    /**
     * The IndexBeschreibung
     */
    public ?string $IndexBeschreibung = null;

    /**
     * The DatentypName
     */
    public ?string $DatentypName = null;

    /**
     * The DateneintragName
     */
    public ?string $DateneintragName = null;

    /**
     * The DateneintragBeschreibung
     */
    public ?string $DateneintragBeschreibung = null;

    /**
     * The DatentypListeMinLaenge
     */
    public ?string $DatentypListeMinLaenge = null;

    /**
     * The DatentypListeMaxLaenge
     */
    public ?string $DatentypListeMaxLaenge = null;

    /**
     * The DatenDefault
     */
    public ?string $DatenDefault = null;

    /**
     * Constructor method for DatentypIndizierteListe
     *
     * @uses DatentypIndizierteListe::setIndexDatentypName()
     * @uses DatentypIndizierteListe::setIndexName()
     * @uses DatentypIndizierteListe::setIndexBeschreibung()
     * @uses DatentypIndizierteListe::setDatentypName()
     * @uses DatentypIndizierteListe::setDateneintragName()
     * @uses DatentypIndizierteListe::setDateneintragBeschreibung()
     * @uses DatentypIndizierteListe::setDatentypListeMinLaenge()
     * @uses DatentypIndizierteListe::setDatentypListeMaxLaenge()
     * @uses DatentypIndizierteListe::setDatenDefault()
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
     */
    public function getIndexDatentypName(): ?string
    {
        return $this->IndexDatentypName;
    }

    /**
     * Set IndexDatentypName value
     */
    public function setIndexDatentypName(?string $indexDatentypName = null): self
    {
        $this->IndexDatentypName = $indexDatentypName;

        return $this;
    }

    /**
     * Get IndexName value
     */
    public function getIndexName(): ?string
    {
        return $this->IndexName;
    }

    /**
     * Set IndexName value
     */
    public function setIndexName(?string $indexName = null): self
    {
        $this->IndexName = $indexName;

        return $this;
    }

    /**
     * Get IndexBeschreibung value
     */
    public function getIndexBeschreibung(): ?string
    {
        return $this->IndexBeschreibung;
    }

    /**
     * Set IndexBeschreibung value
     */
    public function setIndexBeschreibung(?string $indexBeschreibung = null): self
    {
        $this->IndexBeschreibung = $indexBeschreibung;

        return $this;
    }

    /**
     * Get DatentypName value
     */
    public function getDatentypName(): ?string
    {
        return $this->DatentypName;
    }

    /**
     * Set DatentypName value
     */
    public function setDatentypName(?string $datentypName = null): self
    {
        $this->DatentypName = $datentypName;

        return $this;
    }

    /**
     * Get DateneintragName value
     */
    public function getDateneintragName(): ?string
    {
        return $this->DateneintragName;
    }

    /**
     * Set DateneintragName value
     */
    public function setDateneintragName(?string $dateneintragName = null): self
    {
        $this->DateneintragName = $dateneintragName;

        return $this;
    }

    /**
     * Get DateneintragBeschreibung value
     */
    public function getDateneintragBeschreibung(): ?string
    {
        return $this->DateneintragBeschreibung;
    }

    /**
     * Set DateneintragBeschreibung value
     */
    public function setDateneintragBeschreibung(?string $dateneintragBeschreibung = null): self
    {
        $this->DateneintragBeschreibung = $dateneintragBeschreibung;

        return $this;
    }

    /**
     * Get DatentypListeMinLaenge value
     */
    public function getDatentypListeMinLaenge(): ?string
    {
        return $this->DatentypListeMinLaenge;
    }

    /**
     * Set DatentypListeMinLaenge value
     */
    public function setDatentypListeMinLaenge(?string $datentypListeMinLaenge = null): self
    {
        $this->DatentypListeMinLaenge = $datentypListeMinLaenge;

        return $this;
    }

    /**
     * Get DatentypListeMaxLaenge value
     */
    public function getDatentypListeMaxLaenge(): ?string
    {
        return $this->DatentypListeMaxLaenge;
    }

    /**
     * Set DatentypListeMaxLaenge value
     */
    public function setDatentypListeMaxLaenge(?string $datentypListeMaxLaenge = null): self
    {
        $this->DatentypListeMaxLaenge = $datentypListeMaxLaenge;

        return $this;
    }

    /**
     * Get DatenDefault value
     */
    public function getDatenDefault(): ?string
    {
        return $this->DatenDefault;
    }

    /**
     * Set DatenDefault value
     */
    public function setDatenDefault(?string $datenDefault = null): self
    {
        $this->DatenDefault = $datenDefault;

        return $this;
    }
}

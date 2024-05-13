<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypCodeRelationListe StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypCodeRelationListe extends AbstractStructBase
{
    /**
     * The CodeDatentypName
     */
    public ?string $CodeDatentypName = null;

    /**
     * The CodeName
     */
    public ?string $CodeName = null;

    /**
     * The CodeBeschreibung
     */
    public ?string $CodeBeschreibung = null;

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
     * The DatenDefault
     */
    public ?string $DatenDefault = null;

    /**
     * Constructor method for DatentypCodeRelationListe
     *
     * @uses DatentypCodeRelationListe::setCodeDatentypName()
     * @uses DatentypCodeRelationListe::setCodeName()
     * @uses DatentypCodeRelationListe::setCodeBeschreibung()
     * @uses DatentypCodeRelationListe::setDatentypName()
     * @uses DatentypCodeRelationListe::setDateneintragName()
     * @uses DatentypCodeRelationListe::setDateneintragBeschreibung()
     * @uses DatentypCodeRelationListe::setDatenDefault()
     */
    public function __construct(?string $codeDatentypName = null, ?string $codeName = null, ?string $codeBeschreibung = null, ?string $datentypName = null, ?string $dateneintragName = null, ?string $dateneintragBeschreibung = null, ?string $datenDefault = null)
    {
        $this
            ->setCodeDatentypName($codeDatentypName)
            ->setCodeName($codeName)
            ->setCodeBeschreibung($codeBeschreibung)
            ->setDatentypName($datentypName)
            ->setDateneintragName($dateneintragName)
            ->setDateneintragBeschreibung($dateneintragBeschreibung)
            ->setDatenDefault($datenDefault);
    }

    /**
     * Get CodeDatentypName value
     */
    public function getCodeDatentypName(): ?string
    {
        return $this->CodeDatentypName;
    }

    /**
     * Set CodeDatentypName value
     */
    public function setCodeDatentypName(?string $codeDatentypName = null): self
    {
        $this->CodeDatentypName = $codeDatentypName;

        return $this;
    }

    /**
     * Get CodeName value
     */
    public function getCodeName(): ?string
    {
        return $this->CodeName;
    }

    /**
     * Set CodeName value
     */
    public function setCodeName(?string $codeName = null): self
    {
        $this->CodeName = $codeName;

        return $this;
    }

    /**
     * Get CodeBeschreibung value
     */
    public function getCodeBeschreibung(): ?string
    {
        return $this->CodeBeschreibung;
    }

    /**
     * Set CodeBeschreibung value
     */
    public function setCodeBeschreibung(?string $codeBeschreibung = null): self
    {
        $this->CodeBeschreibung = $codeBeschreibung;

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

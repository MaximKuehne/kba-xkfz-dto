<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Fahrleistung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Fahrleistung extends AbstractStructBase
{
    /**
     * The kilometer
     */
    public ?int $kilometer = null;

    /**
     * The meilen
     */
    public ?int $meilen = null;

    /**
     * The stunden
     */
    public ?int $stunden = null;

    /**
     * The merkmalFahrleistungUnplausibel
     */
    public ?bool $merkmalFahrleistungUnplausibel = null;

    /**
     * Constructor method for Type.Fahrleistung
     *
     * @uses Type_Fahrleistung::setKilometer()
     * @uses Type_Fahrleistung::setMeilen()
     * @uses Type_Fahrleistung::setStunden()
     * @uses Type_Fahrleistung::setMerkmalFahrleistungUnplausibel()
     */
    public function __construct(?int $kilometer = null, ?int $meilen = null, ?int $stunden = null, ?bool $merkmalFahrleistungUnplausibel = null)
    {
        $this
            ->setKilometer($kilometer)
            ->setMeilen($meilen)
            ->setStunden($stunden)
            ->setMerkmalFahrleistungUnplausibel($merkmalFahrleistungUnplausibel);
    }

    /**
     * Get kilometer value
     */
    public function getKilometer(): ?int
    {
        return $this->kilometer;
    }

    /**
     * Set kilometer value
     */
    public function setKilometer(?int $kilometer = null): self
    {
        $this->kilometer = $kilometer;

        return $this;
    }

    /**
     * Get meilen value
     */
    public function getMeilen(): ?int
    {
        return $this->meilen;
    }

    /**
     * Set meilen value
     */
    public function setMeilen(?int $meilen = null): self
    {
        $this->meilen = $meilen;

        return $this;
    }

    /**
     * Get stunden value
     */
    public function getStunden(): ?int
    {
        return $this->stunden;
    }

    /**
     * Set stunden value
     */
    public function setStunden(?int $stunden = null): self
    {
        $this->stunden = $stunden;

        return $this;
    }

    /**
     * Get merkmalFahrleistungUnplausibel value
     */
    public function getMerkmalFahrleistungUnplausibel(): ?bool
    {
        return $this->merkmalFahrleistungUnplausibel;
    }

    /**
     * Set merkmalFahrleistungUnplausibel value
     */
    public function setMerkmalFahrleistungUnplausibel(?bool $merkmalFahrleistungUnplausibel = null): self
    {
        $this->merkmalFahrleistungUnplausibel = $merkmalFahrleistungUnplausibel;

        return $this;
    }
}

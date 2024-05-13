<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Fahrleistung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Fahrleistung extends AbstractStructBase
{
    /**
     * The kilometer
     * @var int|null
     */
    public ?int $kilometer = null;
    /**
     * The meilen
     * @var int|null
     */
    public ?int $meilen = null;
    /**
     * The stunden
     * @var int|null
     */
    public ?int $stunden = null;
    /**
     * The merkmalFahrleistungUnplausibel
     * @var bool|null
     */
    public ?bool $merkmalFahrleistungUnplausibel = null;
    /**
     * Constructor method for Type.Fahrleistung
     * @uses Type_Fahrleistung::setKilometer()
     * @uses Type_Fahrleistung::setMeilen()
     * @uses Type_Fahrleistung::setStunden()
     * @uses Type_Fahrleistung::setMerkmalFahrleistungUnplausibel()
     * @param int $kilometer
     * @param int $meilen
     * @param int $stunden
     * @param bool $merkmalFahrleistungUnplausibel
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
     * @return int|null
     */
    public function getKilometer(): ?int
    {
        return $this->kilometer;
    }
    /**
     * Set kilometer value
     * @param int $kilometer
     * @return \THAG\XKfz\StructType\Type_Fahrleistung
     */
    public function setKilometer(?int $kilometer = null): self
    {
        $this->kilometer = $kilometer;
        
        return $this;
    }
    /**
     * Get meilen value
     * @return int|null
     */
    public function getMeilen(): ?int
    {
        return $this->meilen;
    }
    /**
     * Set meilen value
     * @param int $meilen
     * @return \THAG\XKfz\StructType\Type_Fahrleistung
     */
    public function setMeilen(?int $meilen = null): self
    {
        $this->meilen = $meilen;
        
        return $this;
    }
    /**
     * Get stunden value
     * @return int|null
     */
    public function getStunden(): ?int
    {
        return $this->stunden;
    }
    /**
     * Set stunden value
     * @param int $stunden
     * @return \THAG\XKfz\StructType\Type_Fahrleistung
     */
    public function setStunden(?int $stunden = null): self
    {
        $this->stunden = $stunden;
        
        return $this;
    }
    /**
     * Get merkmalFahrleistungUnplausibel value
     * @return bool|null
     */
    public function getMerkmalFahrleistungUnplausibel(): ?bool
    {
        return $this->merkmalFahrleistungUnplausibel;
    }
    /**
     * Set merkmalFahrleistungUnplausibel value
     * @param bool $merkmalFahrleistungUnplausibel
     * @return \THAG\XKfz\StructType\Type_Fahrleistung
     */
    public function setMerkmalFahrleistungUnplausibel(?bool $merkmalFahrleistungUnplausibel = null): self
    {
        $this->merkmalFahrleistungUnplausibel = $merkmalFahrleistungUnplausibel;
        
        return $this;
    }
}

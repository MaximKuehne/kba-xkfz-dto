<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Steuerbefreiung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Steuerbefreiung extends AbstractStructBase
{
    /**
     * The antragSteuerbefreiung
     * @var bool|null
     */
    public ?bool $antragSteuerbefreiung = null;
    /**
     * The grundSteuerbefreiung
     * @var string|null
     */
    public ?string $grundSteuerbefreiung = null;
    /**
     * Constructor method for Type.Steuerbefreiung
     * @uses Type_Steuerbefreiung::setAntragSteuerbefreiung()
     * @uses Type_Steuerbefreiung::setGrundSteuerbefreiung()
     * @param bool $antragSteuerbefreiung
     * @param string $grundSteuerbefreiung
     */
    public function __construct(?bool $antragSteuerbefreiung = null, ?string $grundSteuerbefreiung = null)
    {
        $this
            ->setAntragSteuerbefreiung($antragSteuerbefreiung)
            ->setGrundSteuerbefreiung($grundSteuerbefreiung);
    }
    /**
     * Get antragSteuerbefreiung value
     * @return bool|null
     */
    public function getAntragSteuerbefreiung(): ?bool
    {
        return $this->antragSteuerbefreiung;
    }
    /**
     * Set antragSteuerbefreiung value
     * @param bool $antragSteuerbefreiung
     * @return \THAG\XKfz\StructType\Type_Steuerbefreiung
     */
    public function setAntragSteuerbefreiung(?bool $antragSteuerbefreiung = null): self
    {
        $this->antragSteuerbefreiung = $antragSteuerbefreiung;
        
        return $this;
    }
    /**
     * Get grundSteuerbefreiung value
     * @return string|null
     */
    public function getGrundSteuerbefreiung(): ?string
    {
        return $this->grundSteuerbefreiung;
    }
    /**
     * Set grundSteuerbefreiung value
     * @param string $grundSteuerbefreiung
     * @return \THAG\XKfz\StructType\Type_Steuerbefreiung
     */
    public function setGrundSteuerbefreiung(?string $grundSteuerbefreiung = null): self
    {
        $this->grundSteuerbefreiung = $grundSteuerbefreiung;
        
        return $this;
    }
}

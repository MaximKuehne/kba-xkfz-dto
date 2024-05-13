<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Steuerbefreiung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Steuerbefreiung extends AbstractStructBase
{
    /**
     * The antragSteuerbefreiung
     */
    public ?bool $antragSteuerbefreiung = null;

    /**
     * The grundSteuerbefreiung
     */
    public ?string $grundSteuerbefreiung = null;

    /**
     * Constructor method for Type.Steuerbefreiung
     *
     * @uses Type_Steuerbefreiung::setAntragSteuerbefreiung()
     * @uses Type_Steuerbefreiung::setGrundSteuerbefreiung()
     */
    public function __construct(?bool $antragSteuerbefreiung = null, ?string $grundSteuerbefreiung = null)
    {
        $this
            ->setAntragSteuerbefreiung($antragSteuerbefreiung)
            ->setGrundSteuerbefreiung($grundSteuerbefreiung);
    }

    /**
     * Get antragSteuerbefreiung value
     */
    public function getAntragSteuerbefreiung(): ?bool
    {
        return $this->antragSteuerbefreiung;
    }

    /**
     * Set antragSteuerbefreiung value
     */
    public function setAntragSteuerbefreiung(?bool $antragSteuerbefreiung = null): self
    {
        $this->antragSteuerbefreiung = $antragSteuerbefreiung;

        return $this;
    }

    /**
     * Get grundSteuerbefreiung value
     */
    public function getGrundSteuerbefreiung(): ?string
    {
        return $this->grundSteuerbefreiung;
    }

    /**
     * Set grundSteuerbefreiung value
     */
    public function setGrundSteuerbefreiung(?string $grundSteuerbefreiung = null): self
    {
        $this->grundSteuerbefreiung = $grundSteuerbefreiung;

        return $this;
    }
}

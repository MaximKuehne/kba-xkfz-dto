<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Energieverbrauchsdaten StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Energieverbrauchsdaten extends AbstractStructBase
{
    /**
     * The streckeGesamt
     */
    public ?float $streckeGesamt = null;

    /**
     * The streckeEntladungMotorAn
     */
    public ?float $streckeEntladungMotorAn = null;

    /**
     * The streckeEntladungMotorAus
     */
    public ?float $streckeEntladungMotorAus = null;

    /**
     * The streckeLadungserhoeht
     */
    public ?float $streckeLadungserhoeht = null;

    /**
     * The kraftstoffverbrauchGesamt
     */
    public ?float $kraftstoffverbrauchGesamt = null;

    /**
     * The kraftstoffverbrauchEntladung
     */
    public ?float $kraftstoffverbrauchEntladung = null;

    /**
     * The kraftstoffverbrauchLadungserhoeht
     */
    public ?float $kraftstoffverbrauchLadungserhoeht = null;

    /**
     * The zugefuehrteNetzenergieGesamt
     */
    public ?float $zugefuehrteNetzenergieGesamt = null;

    /**
     * Constructor method for Type.Energieverbrauchsdaten
     *
     * @uses Type_Energieverbrauchsdaten::setStreckeGesamt()
     * @uses Type_Energieverbrauchsdaten::setStreckeEntladungMotorAn()
     * @uses Type_Energieverbrauchsdaten::setStreckeEntladungMotorAus()
     * @uses Type_Energieverbrauchsdaten::setStreckeLadungserhoeht()
     * @uses Type_Energieverbrauchsdaten::setKraftstoffverbrauchGesamt()
     * @uses Type_Energieverbrauchsdaten::setKraftstoffverbrauchEntladung()
     * @uses Type_Energieverbrauchsdaten::setKraftstoffverbrauchLadungserhoeht()
     * @uses Type_Energieverbrauchsdaten::setZugefuehrteNetzenergieGesamt()
     */
    public function __construct(?float $streckeGesamt = null, ?float $streckeEntladungMotorAn = null, ?float $streckeEntladungMotorAus = null, ?float $streckeLadungserhoeht = null, ?float $kraftstoffverbrauchGesamt = null, ?float $kraftstoffverbrauchEntladung = null, ?float $kraftstoffverbrauchLadungserhoeht = null, ?float $zugefuehrteNetzenergieGesamt = null)
    {
        $this
            ->setStreckeGesamt($streckeGesamt)
            ->setStreckeEntladungMotorAn($streckeEntladungMotorAn)
            ->setStreckeEntladungMotorAus($streckeEntladungMotorAus)
            ->setStreckeLadungserhoeht($streckeLadungserhoeht)
            ->setKraftstoffverbrauchGesamt($kraftstoffverbrauchGesamt)
            ->setKraftstoffverbrauchEntladung($kraftstoffverbrauchEntladung)
            ->setKraftstoffverbrauchLadungserhoeht($kraftstoffverbrauchLadungserhoeht)
            ->setZugefuehrteNetzenergieGesamt($zugefuehrteNetzenergieGesamt);
    }

    /**
     * Get streckeGesamt value
     */
    public function getStreckeGesamt(): ?float
    {
        return $this->streckeGesamt;
    }

    /**
     * Set streckeGesamt value
     */
    public function setStreckeGesamt(?float $streckeGesamt = null): self
    {
        $this->streckeGesamt = $streckeGesamt;

        return $this;
    }

    /**
     * Get streckeEntladungMotorAn value
     */
    public function getStreckeEntladungMotorAn(): ?float
    {
        return $this->streckeEntladungMotorAn;
    }

    /**
     * Set streckeEntladungMotorAn value
     */
    public function setStreckeEntladungMotorAn(?float $streckeEntladungMotorAn = null): self
    {
        $this->streckeEntladungMotorAn = $streckeEntladungMotorAn;

        return $this;
    }

    /**
     * Get streckeEntladungMotorAus value
     */
    public function getStreckeEntladungMotorAus(): ?float
    {
        return $this->streckeEntladungMotorAus;
    }

    /**
     * Set streckeEntladungMotorAus value
     */
    public function setStreckeEntladungMotorAus(?float $streckeEntladungMotorAus = null): self
    {
        $this->streckeEntladungMotorAus = $streckeEntladungMotorAus;

        return $this;
    }

    /**
     * Get streckeLadungserhoeht value
     */
    public function getStreckeLadungserhoeht(): ?float
    {
        return $this->streckeLadungserhoeht;
    }

    /**
     * Set streckeLadungserhoeht value
     */
    public function setStreckeLadungserhoeht(?float $streckeLadungserhoeht = null): self
    {
        $this->streckeLadungserhoeht = $streckeLadungserhoeht;

        return $this;
    }

    /**
     * Get kraftstoffverbrauchGesamt value
     */
    public function getKraftstoffverbrauchGesamt(): ?float
    {
        return $this->kraftstoffverbrauchGesamt;
    }

    /**
     * Set kraftstoffverbrauchGesamt value
     */
    public function setKraftstoffverbrauchGesamt(?float $kraftstoffverbrauchGesamt = null): self
    {
        $this->kraftstoffverbrauchGesamt = $kraftstoffverbrauchGesamt;

        return $this;
    }

    /**
     * Get kraftstoffverbrauchEntladung value
     */
    public function getKraftstoffverbrauchEntladung(): ?float
    {
        return $this->kraftstoffverbrauchEntladung;
    }

    /**
     * Set kraftstoffverbrauchEntladung value
     */
    public function setKraftstoffverbrauchEntladung(?float $kraftstoffverbrauchEntladung = null): self
    {
        $this->kraftstoffverbrauchEntladung = $kraftstoffverbrauchEntladung;

        return $this;
    }

    /**
     * Get kraftstoffverbrauchLadungserhoeht value
     */
    public function getKraftstoffverbrauchLadungserhoeht(): ?float
    {
        return $this->kraftstoffverbrauchLadungserhoeht;
    }

    /**
     * Set kraftstoffverbrauchLadungserhoeht value
     */
    public function setKraftstoffverbrauchLadungserhoeht(?float $kraftstoffverbrauchLadungserhoeht = null): self
    {
        $this->kraftstoffverbrauchLadungserhoeht = $kraftstoffverbrauchLadungserhoeht;

        return $this;
    }

    /**
     * Get zugefuehrteNetzenergieGesamt value
     */
    public function getZugefuehrteNetzenergieGesamt(): ?float
    {
        return $this->zugefuehrteNetzenergieGesamt;
    }

    /**
     * Set zugefuehrteNetzenergieGesamt value
     */
    public function setZugefuehrteNetzenergieGesamt(?float $zugefuehrteNetzenergieGesamt = null): self
    {
        $this->zugefuehrteNetzenergieGesamt = $zugefuehrteNetzenergieGesamt;

        return $this;
    }
}

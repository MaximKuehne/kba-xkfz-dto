<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Energieverbrauchsdaten StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Energieverbrauchsdaten extends AbstractStructBase
{
    /**
     * The streckeGesamt
     * @var float|null
     */
    public ?float $streckeGesamt = null;
    /**
     * The streckeEntladungMotorAn
     * @var float|null
     */
    public ?float $streckeEntladungMotorAn = null;
    /**
     * The streckeEntladungMotorAus
     * @var float|null
     */
    public ?float $streckeEntladungMotorAus = null;
    /**
     * The streckeLadungserhoeht
     * @var float|null
     */
    public ?float $streckeLadungserhoeht = null;
    /**
     * The kraftstoffverbrauchGesamt
     * @var float|null
     */
    public ?float $kraftstoffverbrauchGesamt = null;
    /**
     * The kraftstoffverbrauchEntladung
     * @var float|null
     */
    public ?float $kraftstoffverbrauchEntladung = null;
    /**
     * The kraftstoffverbrauchLadungserhoeht
     * @var float|null
     */
    public ?float $kraftstoffverbrauchLadungserhoeht = null;
    /**
     * The zugefuehrteNetzenergieGesamt
     * @var float|null
     */
    public ?float $zugefuehrteNetzenergieGesamt = null;
    /**
     * Constructor method for Type.Energieverbrauchsdaten
     * @uses Type_Energieverbrauchsdaten::setStreckeGesamt()
     * @uses Type_Energieverbrauchsdaten::setStreckeEntladungMotorAn()
     * @uses Type_Energieverbrauchsdaten::setStreckeEntladungMotorAus()
     * @uses Type_Energieverbrauchsdaten::setStreckeLadungserhoeht()
     * @uses Type_Energieverbrauchsdaten::setKraftstoffverbrauchGesamt()
     * @uses Type_Energieverbrauchsdaten::setKraftstoffverbrauchEntladung()
     * @uses Type_Energieverbrauchsdaten::setKraftstoffverbrauchLadungserhoeht()
     * @uses Type_Energieverbrauchsdaten::setZugefuehrteNetzenergieGesamt()
     * @param float $streckeGesamt
     * @param float $streckeEntladungMotorAn
     * @param float $streckeEntladungMotorAus
     * @param float $streckeLadungserhoeht
     * @param float $kraftstoffverbrauchGesamt
     * @param float $kraftstoffverbrauchEntladung
     * @param float $kraftstoffverbrauchLadungserhoeht
     * @param float $zugefuehrteNetzenergieGesamt
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
     * @return float|null
     */
    public function getStreckeGesamt(): ?float
    {
        return $this->streckeGesamt;
    }
    /**
     * Set streckeGesamt value
     * @param float $streckeGesamt
     * @return \THAG\XKfz\StructType\Type_Energieverbrauchsdaten
     */
    public function setStreckeGesamt(?float $streckeGesamt = null): self
    {
        $this->streckeGesamt = $streckeGesamt;
        
        return $this;
    }
    /**
     * Get streckeEntladungMotorAn value
     * @return float|null
     */
    public function getStreckeEntladungMotorAn(): ?float
    {
        return $this->streckeEntladungMotorAn;
    }
    /**
     * Set streckeEntladungMotorAn value
     * @param float $streckeEntladungMotorAn
     * @return \THAG\XKfz\StructType\Type_Energieverbrauchsdaten
     */
    public function setStreckeEntladungMotorAn(?float $streckeEntladungMotorAn = null): self
    {
        $this->streckeEntladungMotorAn = $streckeEntladungMotorAn;
        
        return $this;
    }
    /**
     * Get streckeEntladungMotorAus value
     * @return float|null
     */
    public function getStreckeEntladungMotorAus(): ?float
    {
        return $this->streckeEntladungMotorAus;
    }
    /**
     * Set streckeEntladungMotorAus value
     * @param float $streckeEntladungMotorAus
     * @return \THAG\XKfz\StructType\Type_Energieverbrauchsdaten
     */
    public function setStreckeEntladungMotorAus(?float $streckeEntladungMotorAus = null): self
    {
        $this->streckeEntladungMotorAus = $streckeEntladungMotorAus;
        
        return $this;
    }
    /**
     * Get streckeLadungserhoeht value
     * @return float|null
     */
    public function getStreckeLadungserhoeht(): ?float
    {
        return $this->streckeLadungserhoeht;
    }
    /**
     * Set streckeLadungserhoeht value
     * @param float $streckeLadungserhoeht
     * @return \THAG\XKfz\StructType\Type_Energieverbrauchsdaten
     */
    public function setStreckeLadungserhoeht(?float $streckeLadungserhoeht = null): self
    {
        $this->streckeLadungserhoeht = $streckeLadungserhoeht;
        
        return $this;
    }
    /**
     * Get kraftstoffverbrauchGesamt value
     * @return float|null
     */
    public function getKraftstoffverbrauchGesamt(): ?float
    {
        return $this->kraftstoffverbrauchGesamt;
    }
    /**
     * Set kraftstoffverbrauchGesamt value
     * @param float $kraftstoffverbrauchGesamt
     * @return \THAG\XKfz\StructType\Type_Energieverbrauchsdaten
     */
    public function setKraftstoffverbrauchGesamt(?float $kraftstoffverbrauchGesamt = null): self
    {
        $this->kraftstoffverbrauchGesamt = $kraftstoffverbrauchGesamt;
        
        return $this;
    }
    /**
     * Get kraftstoffverbrauchEntladung value
     * @return float|null
     */
    public function getKraftstoffverbrauchEntladung(): ?float
    {
        return $this->kraftstoffverbrauchEntladung;
    }
    /**
     * Set kraftstoffverbrauchEntladung value
     * @param float $kraftstoffverbrauchEntladung
     * @return \THAG\XKfz\StructType\Type_Energieverbrauchsdaten
     */
    public function setKraftstoffverbrauchEntladung(?float $kraftstoffverbrauchEntladung = null): self
    {
        $this->kraftstoffverbrauchEntladung = $kraftstoffverbrauchEntladung;
        
        return $this;
    }
    /**
     * Get kraftstoffverbrauchLadungserhoeht value
     * @return float|null
     */
    public function getKraftstoffverbrauchLadungserhoeht(): ?float
    {
        return $this->kraftstoffverbrauchLadungserhoeht;
    }
    /**
     * Set kraftstoffverbrauchLadungserhoeht value
     * @param float $kraftstoffverbrauchLadungserhoeht
     * @return \THAG\XKfz\StructType\Type_Energieverbrauchsdaten
     */
    public function setKraftstoffverbrauchLadungserhoeht(?float $kraftstoffverbrauchLadungserhoeht = null): self
    {
        $this->kraftstoffverbrauchLadungserhoeht = $kraftstoffverbrauchLadungserhoeht;
        
        return $this;
    }
    /**
     * Get zugefuehrteNetzenergieGesamt value
     * @return float|null
     */
    public function getZugefuehrteNetzenergieGesamt(): ?float
    {
        return $this->zugefuehrteNetzenergieGesamt;
    }
    /**
     * Set zugefuehrteNetzenergieGesamt value
     * @param float $zugefuehrteNetzenergieGesamt
     * @return \THAG\XKfz\StructType\Type_Energieverbrauchsdaten
     */
    public function setZugefuehrteNetzenergieGesamt(?float $zugefuehrteNetzenergieGesamt = null): self
    {
        $this->zugefuehrteNetzenergieGesamt = $zugefuehrteNetzenergieGesamt;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteKennzeichenSucheUndZuteilung
 * StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteKennzeichenSucheUndZuteilung extends AbstractStructBase
{
    /**
     * The zuteilungWunschkennzeichen
     * @var \THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen $zuteilungWunschkennzeichen = null;
    /**
     * The zuteilungNaechstesKennzeichen
     * @var \THAG\XKfz\StructType\Type_KennzeichensucheNaechstesFreiesKennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Type_KennzeichensucheNaechstesFreiesKennzeichen $zuteilungNaechstesKennzeichen = null;
    /**
     * The zuteilungReservierung
     * @var \THAG\XKfz\StructType\Type_KennzeichenZurBearbeitungSperren|null
     */
    public ?\THAG\XKfz\StructType\Type_KennzeichenZurBearbeitungSperren $zuteilungReservierung = null;
    /**
     * Constructor method for Type.VorgangskomponenteKennzeichenSucheUndZuteilung
     * @uses Type_VorgangskomponenteKennzeichenSucheUndZuteilung::setZuteilungWunschkennzeichen()
     * @uses Type_VorgangskomponenteKennzeichenSucheUndZuteilung::setZuteilungNaechstesKennzeichen()
     * @uses Type_VorgangskomponenteKennzeichenSucheUndZuteilung::setZuteilungReservierung()
     * @param \THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen $zuteilungWunschkennzeichen
     * @param \THAG\XKfz\StructType\Type_KennzeichensucheNaechstesFreiesKennzeichen $zuteilungNaechstesKennzeichen
     * @param \THAG\XKfz\StructType\Type_KennzeichenZurBearbeitungSperren $zuteilungReservierung
     */
    public function __construct(?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen $zuteilungWunschkennzeichen = null, ?\THAG\XKfz\StructType\Type_KennzeichensucheNaechstesFreiesKennzeichen $zuteilungNaechstesKennzeichen = null, ?\THAG\XKfz\StructType\Type_KennzeichenZurBearbeitungSperren $zuteilungReservierung = null)
    {
        $this
            ->setZuteilungWunschkennzeichen($zuteilungWunschkennzeichen)
            ->setZuteilungNaechstesKennzeichen($zuteilungNaechstesKennzeichen)
            ->setZuteilungReservierung($zuteilungReservierung);
    }
    /**
     * Get zuteilungWunschkennzeichen value
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen|null
     */
    public function getZuteilungWunschkennzeichen(): ?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen
    {
        return $this->zuteilungWunschkennzeichen;
    }
    /**
     * Set zuteilungWunschkennzeichen value
     * @param \THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen $zuteilungWunschkennzeichen
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichenSucheUndZuteilung
     */
    public function setZuteilungWunschkennzeichen(?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen $zuteilungWunschkennzeichen = null): self
    {
        $this->zuteilungWunschkennzeichen = $zuteilungWunschkennzeichen;
        
        return $this;
    }
    /**
     * Get zuteilungNaechstesKennzeichen value
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheNaechstesFreiesKennzeichen|null
     */
    public function getZuteilungNaechstesKennzeichen(): ?\THAG\XKfz\StructType\Type_KennzeichensucheNaechstesFreiesKennzeichen
    {
        return $this->zuteilungNaechstesKennzeichen;
    }
    /**
     * Set zuteilungNaechstesKennzeichen value
     * @param \THAG\XKfz\StructType\Type_KennzeichensucheNaechstesFreiesKennzeichen $zuteilungNaechstesKennzeichen
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichenSucheUndZuteilung
     */
    public function setZuteilungNaechstesKennzeichen(?\THAG\XKfz\StructType\Type_KennzeichensucheNaechstesFreiesKennzeichen $zuteilungNaechstesKennzeichen = null): self
    {
        $this->zuteilungNaechstesKennzeichen = $zuteilungNaechstesKennzeichen;
        
        return $this;
    }
    /**
     * Get zuteilungReservierung value
     * @return \THAG\XKfz\StructType\Type_KennzeichenZurBearbeitungSperren|null
     */
    public function getZuteilungReservierung(): ?\THAG\XKfz\StructType\Type_KennzeichenZurBearbeitungSperren
    {
        return $this->zuteilungReservierung;
    }
    /**
     * Set zuteilungReservierung value
     * @param \THAG\XKfz\StructType\Type_KennzeichenZurBearbeitungSperren $zuteilungReservierung
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichenSucheUndZuteilung
     */
    public function setZuteilungReservierung(?\THAG\XKfz\StructType\Type_KennzeichenZurBearbeitungSperren $zuteilungReservierung = null): self
    {
        $this->zuteilungReservierung = $zuteilungReservierung;
        
        return $this;
    }
}

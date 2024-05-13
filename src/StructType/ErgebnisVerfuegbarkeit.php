<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ergebnisVerfuegbarkeit StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ErgebnisVerfuegbarkeit extends AbstractStructBase
{
    /**
     * The zeitpunktAnfrage
     * @var string|null
     */
    public ?string $zeitpunktAnfrage = null;
    /**
     * The zeitpunktEmpfang
     * @var string|null
     */
    public ?string $zeitpunktEmpfang = null;
    /**
     * The zeitpunktBestaetigung
     * @var string|null
     */
    public ?string $zeitpunktBestaetigung = null;
    /**
     * The verfuegbareNachrichten
     * @var \THAG\XKfz\StructType\Type_ListeVerfuegbarerNachrichten|null
     */
    public ?\THAG\XKfz\StructType\Type_ListeVerfuegbarerNachrichten $verfuegbareNachrichten = null;
    /**
     * Constructor method for ergebnisVerfuegbarkeit
     * @uses ErgebnisVerfuegbarkeit::setZeitpunktAnfrage()
     * @uses ErgebnisVerfuegbarkeit::setZeitpunktEmpfang()
     * @uses ErgebnisVerfuegbarkeit::setZeitpunktBestaetigung()
     * @uses ErgebnisVerfuegbarkeit::setVerfuegbareNachrichten()
     * @param string $zeitpunktAnfrage
     * @param string $zeitpunktEmpfang
     * @param string $zeitpunktBestaetigung
     * @param \THAG\XKfz\StructType\Type_ListeVerfuegbarerNachrichten $verfuegbareNachrichten
     */
    public function __construct(?string $zeitpunktAnfrage = null, ?string $zeitpunktEmpfang = null, ?string $zeitpunktBestaetigung = null, ?\THAG\XKfz\StructType\Type_ListeVerfuegbarerNachrichten $verfuegbareNachrichten = null)
    {
        $this
            ->setZeitpunktAnfrage($zeitpunktAnfrage)
            ->setZeitpunktEmpfang($zeitpunktEmpfang)
            ->setZeitpunktBestaetigung($zeitpunktBestaetigung)
            ->setVerfuegbareNachrichten($verfuegbareNachrichten);
    }
    /**
     * Get zeitpunktAnfrage value
     * @return string|null
     */
    public function getZeitpunktAnfrage(): ?string
    {
        return $this->zeitpunktAnfrage;
    }
    /**
     * Set zeitpunktAnfrage value
     * @param string $zeitpunktAnfrage
     * @return \THAG\XKfz\StructType\ErgebnisVerfuegbarkeit
     */
    public function setZeitpunktAnfrage(?string $zeitpunktAnfrage = null): self
    {
        $this->zeitpunktAnfrage = $zeitpunktAnfrage;
        
        return $this;
    }
    /**
     * Get zeitpunktEmpfang value
     * @return string|null
     */
    public function getZeitpunktEmpfang(): ?string
    {
        return $this->zeitpunktEmpfang;
    }
    /**
     * Set zeitpunktEmpfang value
     * @param string $zeitpunktEmpfang
     * @return \THAG\XKfz\StructType\ErgebnisVerfuegbarkeit
     */
    public function setZeitpunktEmpfang(?string $zeitpunktEmpfang = null): self
    {
        $this->zeitpunktEmpfang = $zeitpunktEmpfang;
        
        return $this;
    }
    /**
     * Get zeitpunktBestaetigung value
     * @return string|null
     */
    public function getZeitpunktBestaetigung(): ?string
    {
        return $this->zeitpunktBestaetigung;
    }
    /**
     * Set zeitpunktBestaetigung value
     * @param string $zeitpunktBestaetigung
     * @return \THAG\XKfz\StructType\ErgebnisVerfuegbarkeit
     */
    public function setZeitpunktBestaetigung(?string $zeitpunktBestaetigung = null): self
    {
        $this->zeitpunktBestaetigung = $zeitpunktBestaetigung;
        
        return $this;
    }
    /**
     * Get verfuegbareNachrichten value
     * @return \THAG\XKfz\StructType\Type_ListeVerfuegbarerNachrichten|null
     */
    public function getVerfuegbareNachrichten(): ?\THAG\XKfz\StructType\Type_ListeVerfuegbarerNachrichten
    {
        return $this->verfuegbareNachrichten;
    }
    /**
     * Set verfuegbareNachrichten value
     * @param \THAG\XKfz\StructType\Type_ListeVerfuegbarerNachrichten $verfuegbareNachrichten
     * @return \THAG\XKfz\StructType\ErgebnisVerfuegbarkeit
     */
    public function setVerfuegbareNachrichten(?\THAG\XKfz\StructType\Type_ListeVerfuegbarerNachrichten $verfuegbareNachrichten = null): self
    {
        $this->verfuegbareNachrichten = $verfuegbareNachrichten;
        
        return $this;
    }
}

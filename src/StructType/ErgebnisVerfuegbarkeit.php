<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ergebnisVerfuegbarkeit StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ErgebnisVerfuegbarkeit extends AbstractStructBase
{
    /**
     * The zeitpunktAnfrage
     */
    public ?string $zeitpunktAnfrage = null;

    /**
     * The zeitpunktEmpfang
     */
    public ?string $zeitpunktEmpfang = null;

    /**
     * The zeitpunktBestaetigung
     */
    public ?string $zeitpunktBestaetigung = null;

    /**
     * The verfuegbareNachrichten
     */
    public ?\THAG\XKfz\StructType\Type_ListeVerfuegbarerNachrichten $verfuegbareNachrichten = null;

    /**
     * Constructor method for ergebnisVerfuegbarkeit
     *
     * @uses ErgebnisVerfuegbarkeit::setZeitpunktAnfrage()
     * @uses ErgebnisVerfuegbarkeit::setZeitpunktEmpfang()
     * @uses ErgebnisVerfuegbarkeit::setZeitpunktBestaetigung()
     * @uses ErgebnisVerfuegbarkeit::setVerfuegbareNachrichten()
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
     */
    public function getZeitpunktAnfrage(): ?string
    {
        return $this->zeitpunktAnfrage;
    }

    /**
     * Set zeitpunktAnfrage value
     */
    public function setZeitpunktAnfrage(?string $zeitpunktAnfrage = null): self
    {
        $this->zeitpunktAnfrage = $zeitpunktAnfrage;

        return $this;
    }

    /**
     * Get zeitpunktEmpfang value
     */
    public function getZeitpunktEmpfang(): ?string
    {
        return $this->zeitpunktEmpfang;
    }

    /**
     * Set zeitpunktEmpfang value
     */
    public function setZeitpunktEmpfang(?string $zeitpunktEmpfang = null): self
    {
        $this->zeitpunktEmpfang = $zeitpunktEmpfang;

        return $this;
    }

    /**
     * Get zeitpunktBestaetigung value
     */
    public function getZeitpunktBestaetigung(): ?string
    {
        return $this->zeitpunktBestaetigung;
    }

    /**
     * Set zeitpunktBestaetigung value
     */
    public function setZeitpunktBestaetigung(?string $zeitpunktBestaetigung = null): self
    {
        $this->zeitpunktBestaetigung = $zeitpunktBestaetigung;

        return $this;
    }

    /**
     * Get verfuegbareNachrichten value
     */
    public function getVerfuegbareNachrichten(): ?\THAG\XKfz\StructType\Type_ListeVerfuegbarerNachrichten
    {
        return $this->verfuegbareNachrichten;
    }

    /**
     * Set verfuegbareNachrichten value
     */
    public function setVerfuegbareNachrichten(?\THAG\XKfz\StructType\Type_ListeVerfuegbarerNachrichten $verfuegbareNachrichten = null): self
    {
        $this->verfuegbareNachrichten = $verfuegbareNachrichten;

        return $this;
    }
}

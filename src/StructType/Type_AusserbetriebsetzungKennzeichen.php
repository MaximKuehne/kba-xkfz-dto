<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AusserbetriebsetzungKennzeichen StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AusserbetriebsetzungKennzeichen extends AbstractStructBase
{
    /**
     * The DatumEntstempelungKennzeichen
     */
    public ?string $DatumEntstempelungKennzeichen = null;

    /**
     * The DatumEntstempelungWechselkennzeichen
     */
    public ?string $DatumEntstempelungWechselkennzeichen = null;

    /**
     * The DatumAblaufKennzeichenreservierung
     */
    public ?string $DatumAblaufKennzeichenreservierung = null;

    /**
     * Constructor method for Type.AusserbetriebsetzungKennzeichen
     *
     * @uses Type_AusserbetriebsetzungKennzeichen::setDatumEntstempelungKennzeichen()
     * @uses Type_AusserbetriebsetzungKennzeichen::setDatumEntstempelungWechselkennzeichen()
     * @uses Type_AusserbetriebsetzungKennzeichen::setDatumAblaufKennzeichenreservierung()
     */
    public function __construct(?string $datumEntstempelungKennzeichen = null, ?string $datumEntstempelungWechselkennzeichen = null, ?string $datumAblaufKennzeichenreservierung = null)
    {
        $this
            ->setDatumEntstempelungKennzeichen($datumEntstempelungKennzeichen)
            ->setDatumEntstempelungWechselkennzeichen($datumEntstempelungWechselkennzeichen)
            ->setDatumAblaufKennzeichenreservierung($datumAblaufKennzeichenreservierung);
    }

    /**
     * Get DatumEntstempelungKennzeichen value
     */
    public function getDatumEntstempelungKennzeichen(): ?string
    {
        return $this->DatumEntstempelungKennzeichen;
    }

    /**
     * Set DatumEntstempelungKennzeichen value
     */
    public function setDatumEntstempelungKennzeichen(?string $datumEntstempelungKennzeichen = null): self
    {
        $this->DatumEntstempelungKennzeichen = $datumEntstempelungKennzeichen;

        return $this;
    }

    /**
     * Get DatumEntstempelungWechselkennzeichen value
     */
    public function getDatumEntstempelungWechselkennzeichen(): ?string
    {
        return $this->DatumEntstempelungWechselkennzeichen;
    }

    /**
     * Set DatumEntstempelungWechselkennzeichen value
     */
    public function setDatumEntstempelungWechselkennzeichen(?string $datumEntstempelungWechselkennzeichen = null): self
    {
        $this->DatumEntstempelungWechselkennzeichen = $datumEntstempelungWechselkennzeichen;

        return $this;
    }

    /**
     * Get DatumAblaufKennzeichenreservierung value
     */
    public function getDatumAblaufKennzeichenreservierung(): ?string
    {
        return $this->DatumAblaufKennzeichenreservierung;
    }

    /**
     * Set DatumAblaufKennzeichenreservierung value
     */
    public function setDatumAblaufKennzeichenreservierung(?string $datumAblaufKennzeichenreservierung = null): self
    {
        $this->DatumAblaufKennzeichenreservierung = $datumAblaufKennzeichenreservierung;

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AusserbetriebsetzungKennzeichen StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AusserbetriebsetzungKennzeichen extends AbstractStructBase
{
    /**
     * The DatumEntstempelungKennzeichen
     * @var string|null
     */
    public ?string $DatumEntstempelungKennzeichen = null;
    /**
     * The DatumEntstempelungWechselkennzeichen
     * @var string|null
     */
    public ?string $DatumEntstempelungWechselkennzeichen = null;
    /**
     * The DatumAblaufKennzeichenreservierung
     * @var string|null
     */
    public ?string $DatumAblaufKennzeichenreservierung = null;
    /**
     * Constructor method for Type.AusserbetriebsetzungKennzeichen
     * @uses Type_AusserbetriebsetzungKennzeichen::setDatumEntstempelungKennzeichen()
     * @uses Type_AusserbetriebsetzungKennzeichen::setDatumEntstempelungWechselkennzeichen()
     * @uses Type_AusserbetriebsetzungKennzeichen::setDatumAblaufKennzeichenreservierung()
     * @param string $datumEntstempelungKennzeichen
     * @param string $datumEntstempelungWechselkennzeichen
     * @param string $datumAblaufKennzeichenreservierung
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
     * @return string|null
     */
    public function getDatumEntstempelungKennzeichen(): ?string
    {
        return $this->DatumEntstempelungKennzeichen;
    }
    /**
     * Set DatumEntstempelungKennzeichen value
     * @param string $datumEntstempelungKennzeichen
     * @return \THAG\XKfz\StructType\Type_AusserbetriebsetzungKennzeichen
     */
    public function setDatumEntstempelungKennzeichen(?string $datumEntstempelungKennzeichen = null): self
    {
        $this->DatumEntstempelungKennzeichen = $datumEntstempelungKennzeichen;
        
        return $this;
    }
    /**
     * Get DatumEntstempelungWechselkennzeichen value
     * @return string|null
     */
    public function getDatumEntstempelungWechselkennzeichen(): ?string
    {
        return $this->DatumEntstempelungWechselkennzeichen;
    }
    /**
     * Set DatumEntstempelungWechselkennzeichen value
     * @param string $datumEntstempelungWechselkennzeichen
     * @return \THAG\XKfz\StructType\Type_AusserbetriebsetzungKennzeichen
     */
    public function setDatumEntstempelungWechselkennzeichen(?string $datumEntstempelungWechselkennzeichen = null): self
    {
        $this->DatumEntstempelungWechselkennzeichen = $datumEntstempelungWechselkennzeichen;
        
        return $this;
    }
    /**
     * Get DatumAblaufKennzeichenreservierung value
     * @return string|null
     */
    public function getDatumAblaufKennzeichenreservierung(): ?string
    {
        return $this->DatumAblaufKennzeichenreservierung;
    }
    /**
     * Set DatumAblaufKennzeichenreservierung value
     * @param string $datumAblaufKennzeichenreservierung
     * @return \THAG\XKfz\StructType\Type_AusserbetriebsetzungKennzeichen
     */
    public function setDatumAblaufKennzeichenreservierung(?string $datumAblaufKennzeichenreservierung = null): self
    {
        $this->DatumAblaufKennzeichenreservierung = $datumAblaufKennzeichenreservierung;
        
        return $this;
    }
}

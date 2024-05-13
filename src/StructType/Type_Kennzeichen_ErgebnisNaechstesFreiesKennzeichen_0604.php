<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kennzeichen.ErgebnisNaechstesFreiesKennzeichen.0604
 * StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichen_ErgebnisNaechstesFreiesKennzeichen_0604 extends AbstractStructBase
{
    /**
     * The naechstesFreiesKennzeichen
     * @var \THAG\XKfz\StructType\NaechstesFreiesKennzeichen|null
     */
    public ?\THAG\XKfz\StructType\NaechstesFreiesKennzeichen $naechstesFreiesKennzeichen = null;
    /**
     * Constructor method for Type.Kennzeichen.ErgebnisNaechstesFreiesKennzeichen.0604
     * @uses Type_Kennzeichen_ErgebnisNaechstesFreiesKennzeichen_0604::setNaechstesFreiesKennzeichen()
     * @param \THAG\XKfz\StructType\NaechstesFreiesKennzeichen $naechstesFreiesKennzeichen
     */
    public function __construct(?\THAG\XKfz\StructType\NaechstesFreiesKennzeichen $naechstesFreiesKennzeichen = null)
    {
        $this
            ->setNaechstesFreiesKennzeichen($naechstesFreiesKennzeichen);
    }
    /**
     * Get naechstesFreiesKennzeichen value
     * @return \THAG\XKfz\StructType\NaechstesFreiesKennzeichen|null
     */
    public function getNaechstesFreiesKennzeichen(): ?\THAG\XKfz\StructType\NaechstesFreiesKennzeichen
    {
        return $this->naechstesFreiesKennzeichen;
    }
    /**
     * Set naechstesFreiesKennzeichen value
     * @param \THAG\XKfz\StructType\NaechstesFreiesKennzeichen $naechstesFreiesKennzeichen
     * @return \THAG\XKfz\StructType\Type_Kennzeichen_ErgebnisNaechstesFreiesKennzeichen_0604
     */
    public function setNaechstesFreiesKennzeichen(?\THAG\XKfz\StructType\NaechstesFreiesKennzeichen $naechstesFreiesKennzeichen = null): self
    {
        $this->naechstesFreiesKennzeichen = $naechstesFreiesKennzeichen;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ListeUmruestungen StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ListeUmruestungen extends AbstractStructBase
{
    /**
     * The umruestung
     * @var \THAG\XKfz\StructType\Type_Umruestung|null
     */
    public ?\THAG\XKfz\StructType\Type_Umruestung $umruestung = null;
    /**
     * Constructor method for Type.ListeUmruestungen
     * @uses Type_ListeUmruestungen::setUmruestung()
     * @param \THAG\XKfz\StructType\Type_Umruestung $umruestung
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Umruestung $umruestung = null)
    {
        $this
            ->setUmruestung($umruestung);
    }
    /**
     * Get umruestung value
     * @return \THAG\XKfz\StructType\Type_Umruestung|null
     */
    public function getUmruestung(): ?\THAG\XKfz\StructType\Type_Umruestung
    {
        return $this->umruestung;
    }
    /**
     * Set umruestung value
     * @param \THAG\XKfz\StructType\Type_Umruestung $umruestung
     * @return \THAG\XKfz\StructType\Type_ListeUmruestungen
     */
    public function setUmruestung(?\THAG\XKfz\StructType\Type_Umruestung $umruestung = null): self
    {
        $this->umruestung = $umruestung;
        
        return $this;
    }
}

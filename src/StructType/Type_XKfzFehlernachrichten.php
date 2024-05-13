<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.XKfzFehlernachrichten StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_XKfzFehlernachrichten extends AbstractStructBase
{
    /**
     * The kommunikation_quittung_0002
     * @var \THAG\XKfz\StructType\Kommunikation_quittung_0002|null
     */
    public ?\THAG\XKfz\StructType\Kommunikation_quittung_0002 $kommunikation_quittung_0002 = null;
    /**
     * Constructor method for Type.XKfzFehlernachrichten
     * @uses Type_XKfzFehlernachrichten::setKommunikation_quittung_0002()
     * @param \THAG\XKfz\StructType\Kommunikation_quittung_0002 $kommunikation_quittung_0002
     */
    public function __construct(?\THAG\XKfz\StructType\Kommunikation_quittung_0002 $kommunikation_quittung_0002 = null)
    {
        $this
            ->setKommunikation_quittung_0002($kommunikation_quittung_0002);
    }
    /**
     * Get kommunikation_quittung value
     * @return kommunikation_quittung
     */
    public function getKommunikation_quittung_0002(): ?\THAG\XKfz\StructType\Kommunikation_quittung_0002
    {
        return $this->{'kommunikation.quittung.0002'};
    }
    /**
     * Set kommunikation_quittung value
     * @param kommunikation_quittung $kommunikation_quittung
     * @return \THAG\XKfz\StructType\Type_XKfzFehlernachrichten
     */
    public function setKommunikation_quittung_0002(?\THAG\XKfz\StructType\Kommunikation_quittung_0002 $kommunikation_quittung_0002 = null): self
    {
        $this->kommunikation_quittung_0002 = $this->{'kommunikation.quittung.0002'} = $kommunikation_quittung_0002;
        
        return $this;
    }
}

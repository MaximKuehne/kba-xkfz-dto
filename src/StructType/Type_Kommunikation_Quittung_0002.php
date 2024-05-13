<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kommunikation.Quittung.0002 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kommunikation_Quittung_0002 extends AbstractStructBase
{
    /**
     * The quittung
     * @var \THAG\XKfz\StructType\Quittung_1|null
     */
    public ?\THAG\XKfz\StructType\Quittung_1 $quittung = null;
    /**
     * Constructor method for Type.Kommunikation.Quittung.0002
     * @uses Type_Kommunikation_Quittung_0002::setQuittung()
     * @param \THAG\XKfz\StructType\Quittung_1 $quittung
     */
    public function __construct(?\THAG\XKfz\StructType\Quittung_1 $quittung = null)
    {
        $this
            ->setQuittung($quittung);
    }
    /**
     * Get quittung value
     * @return \THAG\XKfz\StructType\Quittung_1|null
     */
    public function getQuittung(): ?\THAG\XKfz\StructType\Quittung_1
    {
        return $this->quittung;
    }
    /**
     * Set quittung value
     * @param \THAG\XKfz\StructType\Quittung_1 $quittung
     * @return \THAG\XKfz\StructType\Type_Kommunikation_Quittung_0002
     */
    public function setQuittung(?\THAG\XKfz\StructType\Quittung_1 $quittung = null): self
    {
        $this->quittung = $quittung;
        
        return $this;
    }
}

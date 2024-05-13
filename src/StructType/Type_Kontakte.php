<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kontakte StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kontakte extends AbstractStructBase
{
    /**
     * The kontakt
     * @var \THAG\XKfz\StructType\Type_Kontakt|null
     */
    public ?\THAG\XKfz\StructType\Type_Kontakt $kontakt = null;
    /**
     * Constructor method for Type.Kontakte
     * @uses Type_Kontakte::setKontakt()
     * @param \THAG\XKfz\StructType\Type_Kontakt $kontakt
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Kontakt $kontakt = null)
    {
        $this
            ->setKontakt($kontakt);
    }
    /**
     * Get kontakt value
     * @return \THAG\XKfz\StructType\Type_Kontakt|null
     */
    public function getKontakt(): ?\THAG\XKfz\StructType\Type_Kontakt
    {
        return $this->kontakt;
    }
    /**
     * Set kontakt value
     * @param \THAG\XKfz\StructType\Type_Kontakt $kontakt
     * @return \THAG\XKfz\StructType\Type_Kontakte
     */
    public function setKontakt(?\THAG\XKfz\StructType\Type_Kontakt $kontakt = null): self
    {
        $this->kontakt = $kontakt;
        
        return $this;
    }
}

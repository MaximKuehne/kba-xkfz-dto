<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ListeGebuehrenposition StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ListeGebuehrenposition extends AbstractStructBase
{
    /**
     * The position
     * @var \THAG\XKfz\StructType\Type_Gebuehrenposition|null
     */
    public ?\THAG\XKfz\StructType\Type_Gebuehrenposition $position = null;
    /**
     * The summePositionen
     * @var \THAG\XKfz\StructType\Type_Gebuehrenposition|null
     */
    public ?\THAG\XKfz\StructType\Type_Gebuehrenposition $summePositionen = null;
    /**
     * Constructor method for Type.ListeGebuehrenposition
     * @uses Type_ListeGebuehrenposition::setPosition()
     * @uses Type_ListeGebuehrenposition::setSummePositionen()
     * @param \THAG\XKfz\StructType\Type_Gebuehrenposition $position
     * @param \THAG\XKfz\StructType\Type_Gebuehrenposition $summePositionen
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Gebuehrenposition $position = null, ?\THAG\XKfz\StructType\Type_Gebuehrenposition $summePositionen = null)
    {
        $this
            ->setPosition($position)
            ->setSummePositionen($summePositionen);
    }
    /**
     * Get position value
     * @return \THAG\XKfz\StructType\Type_Gebuehrenposition|null
     */
    public function getPosition(): ?\THAG\XKfz\StructType\Type_Gebuehrenposition
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param \THAG\XKfz\StructType\Type_Gebuehrenposition $position
     * @return \THAG\XKfz\StructType\Type_ListeGebuehrenposition
     */
    public function setPosition(?\THAG\XKfz\StructType\Type_Gebuehrenposition $position = null): self
    {
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get summePositionen value
     * @return \THAG\XKfz\StructType\Type_Gebuehrenposition|null
     */
    public function getSummePositionen(): ?\THAG\XKfz\StructType\Type_Gebuehrenposition
    {
        return $this->summePositionen;
    }
    /**
     * Set summePositionen value
     * @param \THAG\XKfz\StructType\Type_Gebuehrenposition $summePositionen
     * @return \THAG\XKfz\StructType\Type_ListeGebuehrenposition
     */
    public function setSummePositionen(?\THAG\XKfz\StructType\Type_Gebuehrenposition $summePositionen = null): self
    {
        $this->summePositionen = $summePositionen;
        
        return $this;
    }
}

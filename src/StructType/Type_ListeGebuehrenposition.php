<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ListeGebuehrenposition StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ListeGebuehrenposition extends AbstractStructBase
{
    /**
     * The position
     */
    public ?\THAG\XKfz\StructType\Type_Gebuehrenposition $position = null;

    /**
     * The summePositionen
     */
    public ?\THAG\XKfz\StructType\Type_Gebuehrenposition $summePositionen = null;

    /**
     * Constructor method for Type.ListeGebuehrenposition
     *
     * @uses Type_ListeGebuehrenposition::setPosition()
     * @uses Type_ListeGebuehrenposition::setSummePositionen()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Gebuehrenposition $position = null, ?\THAG\XKfz\StructType\Type_Gebuehrenposition $summePositionen = null)
    {
        $this
            ->setPosition($position)
            ->setSummePositionen($summePositionen);
    }

    /**
     * Get position value
     */
    public function getPosition(): ?\THAG\XKfz\StructType\Type_Gebuehrenposition
    {
        return $this->position;
    }

    /**
     * Set position value
     */
    public function setPosition(?\THAG\XKfz\StructType\Type_Gebuehrenposition $position = null): self
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get summePositionen value
     */
    public function getSummePositionen(): ?\THAG\XKfz\StructType\Type_Gebuehrenposition
    {
        return $this->summePositionen;
    }

    /**
     * Set summePositionen value
     */
    public function setSummePositionen(?\THAG\XKfz\StructType\Type_Gebuehrenposition $summePositionen = null): self
    {
        $this->summePositionen = $summePositionen;

        return $this;
    }
}

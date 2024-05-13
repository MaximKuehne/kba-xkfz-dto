<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeBonitaetsmerkmal StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeBonitaetsmerkmal extends AbstractStructBase
{
    /**
     * The Bonitaetsmerkmal
     */
    public ?\THAG\XKfz\StructType\Bonitaetsmerkmal $Bonitaetsmerkmal = null;

    /**
     * Constructor method for ListeBonitaetsmerkmal
     *
     * @uses ListeBonitaetsmerkmal::setBonitaetsmerkmal()
     */
    public function __construct(?\THAG\XKfz\StructType\Bonitaetsmerkmal $bonitaetsmerkmal = null)
    {
        $this
            ->setBonitaetsmerkmal($bonitaetsmerkmal);
    }

    /**
     * Get Bonitaetsmerkmal value
     */
    public function getBonitaetsmerkmal(): ?\THAG\XKfz\StructType\Bonitaetsmerkmal
    {
        return $this->Bonitaetsmerkmal;
    }

    /**
     * Set Bonitaetsmerkmal value
     */
    public function setBonitaetsmerkmal(?\THAG\XKfz\StructType\Bonitaetsmerkmal $bonitaetsmerkmal = null): self
    {
        $this->Bonitaetsmerkmal = $bonitaetsmerkmal;

        return $this;
    }
}

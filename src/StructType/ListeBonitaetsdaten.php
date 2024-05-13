<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeBonitaetsdaten StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeBonitaetsdaten extends AbstractStructBase
{
    /**
     * The Bonitaetsdaten
     */
    public ?\THAG\XKfz\StructType\Bonitaetsdaten $Bonitaetsdaten = null;

    /**
     * Constructor method for ListeBonitaetsdaten
     *
     * @uses ListeBonitaetsdaten::setBonitaetsdaten()
     */
    public function __construct(?\THAG\XKfz\StructType\Bonitaetsdaten $bonitaetsdaten = null)
    {
        $this
            ->setBonitaetsdaten($bonitaetsdaten);
    }

    /**
     * Get Bonitaetsdaten value
     */
    public function getBonitaetsdaten(): ?\THAG\XKfz\StructType\Bonitaetsdaten
    {
        return $this->Bonitaetsdaten;
    }

    /**
     * Set Bonitaetsdaten value
     */
    public function setBonitaetsdaten(?\THAG\XKfz\StructType\Bonitaetsdaten $bonitaetsdaten = null): self
    {
        $this->Bonitaetsdaten = $bonitaetsdaten;

        return $this;
    }
}

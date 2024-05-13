<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeBonitaetsmerkmal StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeBonitaetsmerkmal extends AbstractStructBase
{
    /**
     * The Bonitaetsmerkmal
     * @var \THAG\XKfz\StructType\Bonitaetsmerkmal|null
     */
    public ?\THAG\XKfz\StructType\Bonitaetsmerkmal $Bonitaetsmerkmal = null;
    /**
     * Constructor method for ListeBonitaetsmerkmal
     * @uses ListeBonitaetsmerkmal::setBonitaetsmerkmal()
     * @param \THAG\XKfz\StructType\Bonitaetsmerkmal $bonitaetsmerkmal
     */
    public function __construct(?\THAG\XKfz\StructType\Bonitaetsmerkmal $bonitaetsmerkmal = null)
    {
        $this
            ->setBonitaetsmerkmal($bonitaetsmerkmal);
    }
    /**
     * Get Bonitaetsmerkmal value
     * @return \THAG\XKfz\StructType\Bonitaetsmerkmal|null
     */
    public function getBonitaetsmerkmal(): ?\THAG\XKfz\StructType\Bonitaetsmerkmal
    {
        return $this->Bonitaetsmerkmal;
    }
    /**
     * Set Bonitaetsmerkmal value
     * @param \THAG\XKfz\StructType\Bonitaetsmerkmal $bonitaetsmerkmal
     * @return \THAG\XKfz\StructType\ListeBonitaetsmerkmal
     */
    public function setBonitaetsmerkmal(?\THAG\XKfz\StructType\Bonitaetsmerkmal $bonitaetsmerkmal = null): self
    {
        $this->Bonitaetsmerkmal = $bonitaetsmerkmal;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeGruppe StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeGruppe extends AbstractStructBase
{
    /**
     * The Gruppe
     * @var \THAG\XKfz\StructType\Gruppe|null
     */
    public ?\THAG\XKfz\StructType\Gruppe $Gruppe = null;
    /**
     * Constructor method for ListeGruppe
     * @uses ListeGruppe::setGruppe()
     * @param \THAG\XKfz\StructType\Gruppe $gruppe
     */
    public function __construct(?\THAG\XKfz\StructType\Gruppe $gruppe = null)
    {
        $this
            ->setGruppe($gruppe);
    }
    /**
     * Get Gruppe value
     * @return \THAG\XKfz\StructType\Gruppe|null
     */
    public function getGruppe(): ?\THAG\XKfz\StructType\Gruppe
    {
        return $this->Gruppe;
    }
    /**
     * Set Gruppe value
     * @param \THAG\XKfz\StructType\Gruppe $gruppe
     * @return \THAG\XKfz\StructType\ListeGruppe
     */
    public function setGruppe(?\THAG\XKfz\StructType\Gruppe $gruppe = null): self
    {
        $this->Gruppe = $gruppe;
        
        return $this;
    }
}

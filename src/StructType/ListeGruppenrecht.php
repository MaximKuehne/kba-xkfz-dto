<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeGruppenrecht StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeGruppenrecht extends AbstractStructBase
{
    /**
     * The Gruppenrecht
     * @var \THAG\XKfz\StructType\Gruppenrecht|null
     */
    public ?\THAG\XKfz\StructType\Gruppenrecht $Gruppenrecht = null;
    /**
     * Constructor method for ListeGruppenrecht
     * @uses ListeGruppenrecht::setGruppenrecht()
     * @param \THAG\XKfz\StructType\Gruppenrecht $gruppenrecht
     */
    public function __construct(?\THAG\XKfz\StructType\Gruppenrecht $gruppenrecht = null)
    {
        $this
            ->setGruppenrecht($gruppenrecht);
    }
    /**
     * Get Gruppenrecht value
     * @return \THAG\XKfz\StructType\Gruppenrecht|null
     */
    public function getGruppenrecht(): ?\THAG\XKfz\StructType\Gruppenrecht
    {
        return $this->Gruppenrecht;
    }
    /**
     * Set Gruppenrecht value
     * @param \THAG\XKfz\StructType\Gruppenrecht $gruppenrecht
     * @return \THAG\XKfz\StructType\ListeGruppenrecht
     */
    public function setGruppenrecht(?\THAG\XKfz\StructType\Gruppenrecht $gruppenrecht = null): self
    {
        $this->Gruppenrecht = $gruppenrecht;
        
        return $this;
    }
}

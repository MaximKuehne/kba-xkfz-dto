<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeVbRechercheAntwort StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeVbRechercheAntwort extends AbstractStructBase
{
    /**
     * The VbRechercheAntwort
     * @var \THAG\XKfz\StructType\VbRechercheAntwort|null
     */
    public ?\THAG\XKfz\StructType\VbRechercheAntwort $VbRechercheAntwort = null;
    /**
     * Constructor method for ListeVbRechercheAntwort
     * @uses ListeVbRechercheAntwort::setVbRechercheAntwort()
     * @param \THAG\XKfz\StructType\VbRechercheAntwort $vbRechercheAntwort
     */
    public function __construct(?\THAG\XKfz\StructType\VbRechercheAntwort $vbRechercheAntwort = null)
    {
        $this
            ->setVbRechercheAntwort($vbRechercheAntwort);
    }
    /**
     * Get VbRechercheAntwort value
     * @return \THAG\XKfz\StructType\VbRechercheAntwort|null
     */
    public function getVbRechercheAntwort(): ?\THAG\XKfz\StructType\VbRechercheAntwort
    {
        return $this->VbRechercheAntwort;
    }
    /**
     * Set VbRechercheAntwort value
     * @param \THAG\XKfz\StructType\VbRechercheAntwort $vbRechercheAntwort
     * @return \THAG\XKfz\StructType\ListeVbRechercheAntwort
     */
    public function setVbRechercheAntwort(?\THAG\XKfz\StructType\VbRechercheAntwort $vbRechercheAntwort = null): self
    {
        $this->VbRechercheAntwort = $vbRechercheAntwort;
        
        return $this;
    }
}

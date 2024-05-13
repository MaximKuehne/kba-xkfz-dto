<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeFzRechercheAntwort StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeFzRechercheAntwort extends AbstractStructBase
{
    /**
     * The FzRechercheAntwort
     * @var \THAG\XKfz\StructType\FzRechercheAntwort|null
     */
    public ?\THAG\XKfz\StructType\FzRechercheAntwort $FzRechercheAntwort = null;
    /**
     * Constructor method for ListeFzRechercheAntwort
     * @uses ListeFzRechercheAntwort::setFzRechercheAntwort()
     * @param \THAG\XKfz\StructType\FzRechercheAntwort $fzRechercheAntwort
     */
    public function __construct(?\THAG\XKfz\StructType\FzRechercheAntwort $fzRechercheAntwort = null)
    {
        $this
            ->setFzRechercheAntwort($fzRechercheAntwort);
    }
    /**
     * Get FzRechercheAntwort value
     * @return \THAG\XKfz\StructType\FzRechercheAntwort|null
     */
    public function getFzRechercheAntwort(): ?\THAG\XKfz\StructType\FzRechercheAntwort
    {
        return $this->FzRechercheAntwort;
    }
    /**
     * Set FzRechercheAntwort value
     * @param \THAG\XKfz\StructType\FzRechercheAntwort $fzRechercheAntwort
     * @return \THAG\XKfz\StructType\ListeFzRechercheAntwort
     */
    public function setFzRechercheAntwort(?\THAG\XKfz\StructType\FzRechercheAntwort $fzRechercheAntwort = null): self
    {
        $this->FzRechercheAntwort = $fzRechercheAntwort;
        
        return $this;
    }
}

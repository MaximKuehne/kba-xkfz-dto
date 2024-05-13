<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeFzRechercheAntwort StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeFzRechercheAntwort extends AbstractStructBase
{
    /**
     * The FzRechercheAntwort
     */
    public ?\THAG\XKfz\StructType\FzRechercheAntwort $FzRechercheAntwort = null;

    /**
     * Constructor method for ListeFzRechercheAntwort
     *
     * @uses ListeFzRechercheAntwort::setFzRechercheAntwort()
     */
    public function __construct(?\THAG\XKfz\StructType\FzRechercheAntwort $fzRechercheAntwort = null)
    {
        $this
            ->setFzRechercheAntwort($fzRechercheAntwort);
    }

    /**
     * Get FzRechercheAntwort value
     */
    public function getFzRechercheAntwort(): ?\THAG\XKfz\StructType\FzRechercheAntwort
    {
        return $this->FzRechercheAntwort;
    }

    /**
     * Set FzRechercheAntwort value
     */
    public function setFzRechercheAntwort(?\THAG\XKfz\StructType\FzRechercheAntwort $fzRechercheAntwort = null): self
    {
        $this->FzRechercheAntwort = $fzRechercheAntwort;

        return $this;
    }
}

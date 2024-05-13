<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeFeldVuIndividualisierung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeFeldVuIndividualisierung extends AbstractStructBase
{
    /**
     * The FeldVuIndividualisierung
     */
    public ?\THAG\XKfz\StructType\FeldVuIndividualisierung $FeldVuIndividualisierung = null;

    /**
     * Constructor method for ListeFeldVuIndividualisierung
     *
     * @uses ListeFeldVuIndividualisierung::setFeldVuIndividualisierung()
     */
    public function __construct(?\THAG\XKfz\StructType\FeldVuIndividualisierung $feldVuIndividualisierung = null)
    {
        $this
            ->setFeldVuIndividualisierung($feldVuIndividualisierung);
    }

    /**
     * Get FeldVuIndividualisierung value
     */
    public function getFeldVuIndividualisierung(): ?\THAG\XKfz\StructType\FeldVuIndividualisierung
    {
        return $this->FeldVuIndividualisierung;
    }

    /**
     * Set FeldVuIndividualisierung value
     */
    public function setFeldVuIndividualisierung(?\THAG\XKfz\StructType\FeldVuIndividualisierung $feldVuIndividualisierung = null): self
    {
        $this->FeldVuIndividualisierung = $feldVuIndividualisierung;

        return $this;
    }
}

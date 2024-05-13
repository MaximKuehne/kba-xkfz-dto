<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeFeldVuIndividualisierung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeFeldVuIndividualisierung extends AbstractStructBase
{
    /**
     * The FeldVuIndividualisierung
     * @var \THAG\XKfz\StructType\FeldVuIndividualisierung|null
     */
    public ?\THAG\XKfz\StructType\FeldVuIndividualisierung $FeldVuIndividualisierung = null;
    /**
     * Constructor method for ListeFeldVuIndividualisierung
     * @uses ListeFeldVuIndividualisierung::setFeldVuIndividualisierung()
     * @param \THAG\XKfz\StructType\FeldVuIndividualisierung $feldVuIndividualisierung
     */
    public function __construct(?\THAG\XKfz\StructType\FeldVuIndividualisierung $feldVuIndividualisierung = null)
    {
        $this
            ->setFeldVuIndividualisierung($feldVuIndividualisierung);
    }
    /**
     * Get FeldVuIndividualisierung value
     * @return \THAG\XKfz\StructType\FeldVuIndividualisierung|null
     */
    public function getFeldVuIndividualisierung(): ?\THAG\XKfz\StructType\FeldVuIndividualisierung
    {
        return $this->FeldVuIndividualisierung;
    }
    /**
     * Set FeldVuIndividualisierung value
     * @param \THAG\XKfz\StructType\FeldVuIndividualisierung $feldVuIndividualisierung
     * @return \THAG\XKfz\StructType\ListeFeldVuIndividualisierung
     */
    public function setFeldVuIndividualisierung(?\THAG\XKfz\StructType\FeldVuIndividualisierung $feldVuIndividualisierung = null): self
    {
        $this->FeldVuIndividualisierung = $feldVuIndividualisierung;
        
        return $this;
    }
}

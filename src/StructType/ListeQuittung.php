<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeQuittung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeQuittung extends AbstractStructBase
{
    /**
     * The Quittung
     * @var \THAG\XKfz\StructType\Quittung|null
     */
    public ?\THAG\XKfz\StructType\Quittung $Quittung = null;
    /**
     * Constructor method for ListeQuittung
     * @uses ListeQuittung::setQuittung()
     * @param \THAG\XKfz\StructType\Quittung $quittung
     */
    public function __construct(?\THAG\XKfz\StructType\Quittung $quittung = null)
    {
        $this
            ->setQuittung($quittung);
    }
    /**
     * Get Quittung value
     * @return \THAG\XKfz\StructType\Quittung|null
     */
    public function getQuittung(): ?\THAG\XKfz\StructType\Quittung
    {
        return $this->Quittung;
    }
    /**
     * Set Quittung value
     * @param \THAG\XKfz\StructType\Quittung $quittung
     * @return \THAG\XKfz\StructType\ListeQuittung
     */
    public function setQuittung(?\THAG\XKfz\StructType\Quittung $quittung = null): self
    {
        $this->Quittung = $quittung;
        
        return $this;
    }
}

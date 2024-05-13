<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeQuittung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeQuittung extends AbstractStructBase
{
    /**
     * The Quittung
     */
    public ?\THAG\XKfz\StructType\Quittung $Quittung = null;

    /**
     * Constructor method for ListeQuittung
     *
     * @uses ListeQuittung::setQuittung()
     */
    public function __construct(?\THAG\XKfz\StructType\Quittung $quittung = null)
    {
        $this
            ->setQuittung($quittung);
    }

    /**
     * Get Quittung value
     */
    public function getQuittung(): ?\THAG\XKfz\StructType\Quittung
    {
        return $this->Quittung;
    }

    /**
     * Set Quittung value
     */
    public function setQuittung(?\THAG\XKfz\StructType\Quittung $quittung = null): self
    {
        $this->Quittung = $quittung;

        return $this;
    }
}

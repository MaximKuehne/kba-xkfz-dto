<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeVersicherung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeVersicherung extends AbstractStructBase
{
    /**
     * The Versicherung
     */
    public ?\THAG\XKfz\StructType\Versicherung $Versicherung = null;

    /**
     * Constructor method for ListeVersicherung
     *
     * @uses ListeVersicherung::setVersicherung()
     */
    public function __construct(?\THAG\XKfz\StructType\Versicherung $versicherung = null)
    {
        $this
            ->setVersicherung($versicherung);
    }

    /**
     * Get Versicherung value
     */
    public function getVersicherung(): ?\THAG\XKfz\StructType\Versicherung
    {
        return $this->Versicherung;
    }

    /**
     * Set Versicherung value
     */
    public function setVersicherung(?\THAG\XKfz\StructType\Versicherung $versicherung = null): self
    {
        $this->Versicherung = $versicherung;

        return $this;
    }
}

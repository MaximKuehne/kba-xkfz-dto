<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeUebermittlungsRechercheAntwort StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeUebermittlungsRechercheAntwort extends AbstractStructBase
{
    /**
     * The UebermittlungsRechercheAntwort
     */
    public ?\THAG\XKfz\StructType\UebermittlungsRechercheAntwort $UebermittlungsRechercheAntwort = null;

    /**
     * Constructor method for ListeUebermittlungsRechercheAntwort
     *
     * @uses ListeUebermittlungsRechercheAntwort::setUebermittlungsRechercheAntwort()
     */
    public function __construct(?\THAG\XKfz\StructType\UebermittlungsRechercheAntwort $uebermittlungsRechercheAntwort = null)
    {
        $this
            ->setUebermittlungsRechercheAntwort($uebermittlungsRechercheAntwort);
    }

    /**
     * Get UebermittlungsRechercheAntwort value
     */
    public function getUebermittlungsRechercheAntwort(): ?\THAG\XKfz\StructType\UebermittlungsRechercheAntwort
    {
        return $this->UebermittlungsRechercheAntwort;
    }

    /**
     * Set UebermittlungsRechercheAntwort value
     */
    public function setUebermittlungsRechercheAntwort(?\THAG\XKfz\StructType\UebermittlungsRechercheAntwort $uebermittlungsRechercheAntwort = null): self
    {
        $this->UebermittlungsRechercheAntwort = $uebermittlungsRechercheAntwort;

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FahrzeugakteZXTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FahrzeugakteZXTyp extends AbstractStructBase
{
    /**
     * The Zulassungsabschnitt
     */
    public ?\THAG\XKfz\StructType\ZulassungsabschnittZXTyp $Zulassungsabschnitt = null;

    /**
     * Constructor method for FahrzeugakteZXTyp
     *
     * @uses FahrzeugakteZXTyp::setZulassungsabschnitt()
     */
    public function __construct(?\THAG\XKfz\StructType\ZulassungsabschnittZXTyp $zulassungsabschnitt = null)
    {
        $this
            ->setZulassungsabschnitt($zulassungsabschnitt);
    }

    /**
     * Get Zulassungsabschnitt value
     */
    public function getZulassungsabschnitt(): ?\THAG\XKfz\StructType\ZulassungsabschnittZXTyp
    {
        return $this->Zulassungsabschnitt;
    }

    /**
     * Set Zulassungsabschnitt value
     */
    public function setZulassungsabschnitt(?\THAG\XKfz\StructType\ZulassungsabschnittZXTyp $zulassungsabschnitt = null): self
    {
        $this->Zulassungsabschnitt = $zulassungsabschnitt;

        return $this;
    }
}

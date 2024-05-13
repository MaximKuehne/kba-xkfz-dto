<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FahrzeugakteZXTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FahrzeugakteZXTyp extends AbstractStructBase
{
    /**
     * The Zulassungsabschnitt
     * @var \THAG\XKfz\StructType\ZulassungsabschnittZXTyp|null
     */
    public ?\THAG\XKfz\StructType\ZulassungsabschnittZXTyp $Zulassungsabschnitt = null;
    /**
     * Constructor method for FahrzeugakteZXTyp
     * @uses FahrzeugakteZXTyp::setZulassungsabschnitt()
     * @param \THAG\XKfz\StructType\ZulassungsabschnittZXTyp $zulassungsabschnitt
     */
    public function __construct(?\THAG\XKfz\StructType\ZulassungsabschnittZXTyp $zulassungsabschnitt = null)
    {
        $this
            ->setZulassungsabschnitt($zulassungsabschnitt);
    }
    /**
     * Get Zulassungsabschnitt value
     * @return \THAG\XKfz\StructType\ZulassungsabschnittZXTyp|null
     */
    public function getZulassungsabschnitt(): ?\THAG\XKfz\StructType\ZulassungsabschnittZXTyp
    {
        return $this->Zulassungsabschnitt;
    }
    /**
     * Set Zulassungsabschnitt value
     * @param \THAG\XKfz\StructType\ZulassungsabschnittZXTyp $zulassungsabschnitt
     * @return \THAG\XKfz\StructType\FahrzeugakteZXTyp
     */
    public function setZulassungsabschnitt(?\THAG\XKfz\StructType\ZulassungsabschnittZXTyp $zulassungsabschnitt = null): self
    {
        $this->Zulassungsabschnitt = $zulassungsabschnitt;
        
        return $this;
    }
}

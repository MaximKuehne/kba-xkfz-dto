<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeVorlage StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeVorlage extends AbstractStructBase
{
    /**
     * The VorlageUebersicht
     */
    public ?\THAG\XKfz\StructType\VorlageUebersicht $VorlageUebersicht = null;

    /**
     * Constructor method for ListeVorlage
     *
     * @uses ListeVorlage::setVorlageUebersicht()
     */
    public function __construct(?\THAG\XKfz\StructType\VorlageUebersicht $vorlageUebersicht = null)
    {
        $this
            ->setVorlageUebersicht($vorlageUebersicht);
    }

    /**
     * Get VorlageUebersicht value
     */
    public function getVorlageUebersicht(): ?\THAG\XKfz\StructType\VorlageUebersicht
    {
        return $this->VorlageUebersicht;
    }

    /**
     * Set VorlageUebersicht value
     */
    public function setVorlageUebersicht(?\THAG\XKfz\StructType\VorlageUebersicht $vorlageUebersicht = null): self
    {
        $this->VorlageUebersicht = $vorlageUebersicht;

        return $this;
    }
}

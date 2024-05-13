<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeVorlage StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeVorlage extends AbstractStructBase
{
    /**
     * The VorlageUebersicht
     * @var \THAG\XKfz\StructType\VorlageUebersicht|null
     */
    public ?\THAG\XKfz\StructType\VorlageUebersicht $VorlageUebersicht = null;
    /**
     * Constructor method for ListeVorlage
     * @uses ListeVorlage::setVorlageUebersicht()
     * @param \THAG\XKfz\StructType\VorlageUebersicht $vorlageUebersicht
     */
    public function __construct(?\THAG\XKfz\StructType\VorlageUebersicht $vorlageUebersicht = null)
    {
        $this
            ->setVorlageUebersicht($vorlageUebersicht);
    }
    /**
     * Get VorlageUebersicht value
     * @return \THAG\XKfz\StructType\VorlageUebersicht|null
     */
    public function getVorlageUebersicht(): ?\THAG\XKfz\StructType\VorlageUebersicht
    {
        return $this->VorlageUebersicht;
    }
    /**
     * Set VorlageUebersicht value
     * @param \THAG\XKfz\StructType\VorlageUebersicht $vorlageUebersicht
     * @return \THAG\XKfz\StructType\ListeVorlage
     */
    public function setVorlageUebersicht(?\THAG\XKfz\StructType\VorlageUebersicht $vorlageUebersicht = null): self
    {
        $this->VorlageUebersicht = $vorlageUebersicht;
        
        return $this;
    }
}

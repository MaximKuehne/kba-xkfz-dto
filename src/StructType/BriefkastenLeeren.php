<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BriefkastenLeeren StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class BriefkastenLeeren extends AbstractStructBase
{
    /**
     * The ListeNachrichtenId
     * @var \THAG\XKfz\StructType\ListeNachrichtenId|null
     */
    public ?\THAG\XKfz\StructType\ListeNachrichtenId $ListeNachrichtenId = null;
    /**
     * Constructor method for BriefkastenLeeren
     * @uses BriefkastenLeeren::setListeNachrichtenId()
     * @param \THAG\XKfz\StructType\ListeNachrichtenId $listeNachrichtenId
     */
    public function __construct(?\THAG\XKfz\StructType\ListeNachrichtenId $listeNachrichtenId = null)
    {
        $this
            ->setListeNachrichtenId($listeNachrichtenId);
    }
    /**
     * Get ListeNachrichtenId value
     * @return \THAG\XKfz\StructType\ListeNachrichtenId|null
     */
    public function getListeNachrichtenId(): ?\THAG\XKfz\StructType\ListeNachrichtenId
    {
        return $this->ListeNachrichtenId;
    }
    /**
     * Set ListeNachrichtenId value
     * @param \THAG\XKfz\StructType\ListeNachrichtenId $listeNachrichtenId
     * @return \THAG\XKfz\StructType\BriefkastenLeeren
     */
    public function setListeNachrichtenId(?\THAG\XKfz\StructType\ListeNachrichtenId $listeNachrichtenId = null): self
    {
        $this->ListeNachrichtenId = $listeNachrichtenId;
        
        return $this;
    }
}

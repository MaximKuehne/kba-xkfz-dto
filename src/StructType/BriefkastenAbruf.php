<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BriefkastenAbruf StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class BriefkastenAbruf extends AbstractStructBase
{
    /**
     * The ListeNachrichtenId
     */
    public ?\THAG\XKfz\StructType\ListeNachrichtenId $ListeNachrichtenId = null;

    /**
     * Constructor method for BriefkastenAbruf
     *
     * @uses BriefkastenAbruf::setListeNachrichtenId()
     */
    public function __construct(?\THAG\XKfz\StructType\ListeNachrichtenId $listeNachrichtenId = null)
    {
        $this
            ->setListeNachrichtenId($listeNachrichtenId);
    }

    /**
     * Get ListeNachrichtenId value
     */
    public function getListeNachrichtenId(): ?\THAG\XKfz\StructType\ListeNachrichtenId
    {
        return $this->ListeNachrichtenId;
    }

    /**
     * Set ListeNachrichtenId value
     */
    public function setListeNachrichtenId(?\THAG\XKfz\StructType\ListeNachrichtenId $listeNachrichtenId = null): self
    {
        $this->ListeNachrichtenId = $listeNachrichtenId;

        return $this;
    }
}

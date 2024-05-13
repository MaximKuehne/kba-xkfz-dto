<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeNachrichtenUebersicht StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeNachrichtenUebersicht extends AbstractStructBase
{
    /**
     * The NachrichtenUebersicht
     */
    public ?\THAG\XKfz\StructType\NachrichtenUebersicht $NachrichtenUebersicht = null;

    /**
     * Constructor method for ListeNachrichtenUebersicht
     *
     * @uses ListeNachrichtenUebersicht::setNachrichtenUebersicht()
     */
    public function __construct(?\THAG\XKfz\StructType\NachrichtenUebersicht $nachrichtenUebersicht = null)
    {
        $this
            ->setNachrichtenUebersicht($nachrichtenUebersicht);
    }

    /**
     * Get NachrichtenUebersicht value
     */
    public function getNachrichtenUebersicht(): ?\THAG\XKfz\StructType\NachrichtenUebersicht
    {
        return $this->NachrichtenUebersicht;
    }

    /**
     * Set NachrichtenUebersicht value
     */
    public function setNachrichtenUebersicht(?\THAG\XKfz\StructType\NachrichtenUebersicht $nachrichtenUebersicht = null): self
    {
        $this->NachrichtenUebersicht = $nachrichtenUebersicht;

        return $this;
    }
}

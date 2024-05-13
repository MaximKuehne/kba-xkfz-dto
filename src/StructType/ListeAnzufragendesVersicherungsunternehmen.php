<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeAnzufragendesVersicherungsunternehmen StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeAnzufragendesVersicherungsunternehmen extends AbstractStructBase
{
    /**
     * The AnzufragendesVersicherungsunternehmen
     */
    public ?\THAG\XKfz\StructType\AnzufragendesVersicherungsunternehmen $AnzufragendesVersicherungsunternehmen = null;

    /**
     * Constructor method for ListeAnzufragendesVersicherungsunternehmen
     *
     * @uses ListeAnzufragendesVersicherungsunternehmen::setAnzufragendesVersicherungsunternehmen()
     */
    public function __construct(?\THAG\XKfz\StructType\AnzufragendesVersicherungsunternehmen $anzufragendesVersicherungsunternehmen = null)
    {
        $this
            ->setAnzufragendesVersicherungsunternehmen($anzufragendesVersicherungsunternehmen);
    }

    /**
     * Get AnzufragendesVersicherungsunternehmen value
     */
    public function getAnzufragendesVersicherungsunternehmen(): ?\THAG\XKfz\StructType\AnzufragendesVersicherungsunternehmen
    {
        return $this->AnzufragendesVersicherungsunternehmen;
    }

    /**
     * Set AnzufragendesVersicherungsunternehmen value
     */
    public function setAnzufragendesVersicherungsunternehmen(?\THAG\XKfz\StructType\AnzufragendesVersicherungsunternehmen $anzufragendesVersicherungsunternehmen = null): self
    {
        $this->AnzufragendesVersicherungsunternehmen = $anzufragendesVersicherungsunternehmen;

        return $this;
    }
}

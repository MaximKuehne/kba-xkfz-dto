<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ListeMonetaereEinnahmen StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ListeMonetaereEinnahmen extends AbstractStructBase
{
    /**
     * The monetaereEinnahme
     */
    public ?\THAG\XKfz\StructType\Type_MonetaereEinnahme $monetaereEinnahme = null;

    /**
     * Constructor method for Type.ListeMonetaereEinnahmen
     *
     * @uses Type_ListeMonetaereEinnahmen::setMonetaereEinnahme()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_MonetaereEinnahme $monetaereEinnahme = null)
    {
        $this
            ->setMonetaereEinnahme($monetaereEinnahme);
    }

    /**
     * Get monetaereEinnahme value
     */
    public function getMonetaereEinnahme(): ?\THAG\XKfz\StructType\Type_MonetaereEinnahme
    {
        return $this->monetaereEinnahme;
    }

    /**
     * Set monetaereEinnahme value
     */
    public function setMonetaereEinnahme(?\THAG\XKfz\StructType\Type_MonetaereEinnahme $monetaereEinnahme = null): self
    {
        $this->monetaereEinnahme = $monetaereEinnahme;

        return $this;
    }
}

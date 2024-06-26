<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Zulassungsmitteilung.ErgebnisSicherheitscodes.0405
 * StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Zulassungsmitteilung_ErgebnisSicherheitscodes_0405 extends AbstractStructBase
{
    /**
     * The sicherheitscodes
     */
    public ?\THAG\XKfz\StructType\Sicherheitscodes $sicherheitscodes = null;

    /**
     * Constructor method for Type.Zulassungsmitteilung.ErgebnisSicherheitscodes.0405
     *
     * @uses Type_Zulassungsmitteilung_ErgebnisSicherheitscodes_0405::setSicherheitscodes()
     */
    public function __construct(?\THAG\XKfz\StructType\Sicherheitscodes $sicherheitscodes = null)
    {
        $this
            ->setSicherheitscodes($sicherheitscodes);
    }

    /**
     * Get sicherheitscodes value
     */
    public function getSicherheitscodes(): ?\THAG\XKfz\StructType\Sicherheitscodes
    {
        return $this->sicherheitscodes;
    }

    /**
     * Set sicherheitscodes value
     */
    public function setSicherheitscodes(?\THAG\XKfz\StructType\Sicherheitscodes $sicherheitscodes = null): self
    {
        $this->sicherheitscodes = $sicherheitscodes;

        return $this;
    }
}

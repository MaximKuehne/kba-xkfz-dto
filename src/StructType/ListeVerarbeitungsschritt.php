<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeVerarbeitungsschritt StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeVerarbeitungsschritt extends AbstractStructBase
{
    /**
     * The Verarbeitungsschritt
     */
    public ?\THAG\XKfz\StructType\Verarbeitungsschritt $Verarbeitungsschritt = null;

    /**
     * Constructor method for ListeVerarbeitungsschritt
     *
     * @uses ListeVerarbeitungsschritt::setVerarbeitungsschritt()
     */
    public function __construct(?\THAG\XKfz\StructType\Verarbeitungsschritt $verarbeitungsschritt = null)
    {
        $this
            ->setVerarbeitungsschritt($verarbeitungsschritt);
    }

    /**
     * Get Verarbeitungsschritt value
     */
    public function getVerarbeitungsschritt(): ?\THAG\XKfz\StructType\Verarbeitungsschritt
    {
        return $this->Verarbeitungsschritt;
    }

    /**
     * Set Verarbeitungsschritt value
     */
    public function setVerarbeitungsschritt(?\THAG\XKfz\StructType\Verarbeitungsschritt $verarbeitungsschritt = null): self
    {
        $this->Verarbeitungsschritt = $verarbeitungsschritt;

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeVerarbeitungskontext StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeVerarbeitungskontext extends AbstractStructBase
{
    /**
     * The Verarbeitungskontext
     */
    public ?\THAG\XKfz\StructType\Verarbeitungskontext $Verarbeitungskontext = null;

    /**
     * Constructor method for ListeVerarbeitungskontext
     *
     * @uses ListeVerarbeitungskontext::setVerarbeitungskontext()
     */
    public function __construct(?\THAG\XKfz\StructType\Verarbeitungskontext $verarbeitungskontext = null)
    {
        $this
            ->setVerarbeitungskontext($verarbeitungskontext);
    }

    /**
     * Get Verarbeitungskontext value
     */
    public function getVerarbeitungskontext(): ?\THAG\XKfz\StructType\Verarbeitungskontext
    {
        return $this->Verarbeitungskontext;
    }

    /**
     * Set Verarbeitungskontext value
     */
    public function setVerarbeitungskontext(?\THAG\XKfz\StructType\Verarbeitungskontext $verarbeitungskontext = null): self
    {
        $this->Verarbeitungskontext = $verarbeitungskontext;

        return $this;
    }
}

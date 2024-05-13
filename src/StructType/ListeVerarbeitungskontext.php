<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeVerarbeitungskontext StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeVerarbeitungskontext extends AbstractStructBase
{
    /**
     * The Verarbeitungskontext
     * @var \THAG\XKfz\StructType\Verarbeitungskontext|null
     */
    public ?\THAG\XKfz\StructType\Verarbeitungskontext $Verarbeitungskontext = null;
    /**
     * Constructor method for ListeVerarbeitungskontext
     * @uses ListeVerarbeitungskontext::setVerarbeitungskontext()
     * @param \THAG\XKfz\StructType\Verarbeitungskontext $verarbeitungskontext
     */
    public function __construct(?\THAG\XKfz\StructType\Verarbeitungskontext $verarbeitungskontext = null)
    {
        $this
            ->setVerarbeitungskontext($verarbeitungskontext);
    }
    /**
     * Get Verarbeitungskontext value
     * @return \THAG\XKfz\StructType\Verarbeitungskontext|null
     */
    public function getVerarbeitungskontext(): ?\THAG\XKfz\StructType\Verarbeitungskontext
    {
        return $this->Verarbeitungskontext;
    }
    /**
     * Set Verarbeitungskontext value
     * @param \THAG\XKfz\StructType\Verarbeitungskontext $verarbeitungskontext
     * @return \THAG\XKfz\StructType\ListeVerarbeitungskontext
     */
    public function setVerarbeitungskontext(?\THAG\XKfz\StructType\Verarbeitungskontext $verarbeitungskontext = null): self
    {
        $this->Verarbeitungskontext = $verarbeitungskontext;
        
        return $this;
    }
}

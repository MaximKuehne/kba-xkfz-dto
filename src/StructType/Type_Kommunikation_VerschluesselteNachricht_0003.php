<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kommunikation.VerschluesselteNachricht.0003
 * StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kommunikation_VerschluesselteNachricht_0003 extends AbstractStructBase
{
    /**
     * The verschluesselteNachricht
     * @var \THAG\XKfz\StructType\VerschluesselteNachricht|null
     */
    public ?\THAG\XKfz\StructType\VerschluesselteNachricht $verschluesselteNachricht = null;
    /**
     * Constructor method for Type.Kommunikation.VerschluesselteNachricht.0003
     * @uses Type_Kommunikation_VerschluesselteNachricht_0003::setVerschluesselteNachricht()
     * @param \THAG\XKfz\StructType\VerschluesselteNachricht $verschluesselteNachricht
     */
    public function __construct(?\THAG\XKfz\StructType\VerschluesselteNachricht $verschluesselteNachricht = null)
    {
        $this
            ->setVerschluesselteNachricht($verschluesselteNachricht);
    }
    /**
     * Get verschluesselteNachricht value
     * @return \THAG\XKfz\StructType\VerschluesselteNachricht|null
     */
    public function getVerschluesselteNachricht(): ?\THAG\XKfz\StructType\VerschluesselteNachricht
    {
        return $this->verschluesselteNachricht;
    }
    /**
     * Set verschluesselteNachricht value
     * @param \THAG\XKfz\StructType\VerschluesselteNachricht $verschluesselteNachricht
     * @return \THAG\XKfz\StructType\Type_Kommunikation_VerschluesselteNachricht_0003
     */
    public function setVerschluesselteNachricht(?\THAG\XKfz\StructType\VerschluesselteNachricht $verschluesselteNachricht = null): self
    {
        $this->verschluesselteNachricht = $verschluesselteNachricht;
        
        return $this;
    }
}

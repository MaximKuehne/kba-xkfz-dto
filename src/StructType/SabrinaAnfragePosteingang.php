<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sabrinaAnfragePosteingang StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class SabrinaAnfragePosteingang extends AbstractStructBase
{
    /**
     * The kommunikationskanal
     * @var \THAG\XKfz\StructType\Code_KommunikationskanalSABRINA|null
     */
    public ?\THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal = null;
    /**
     * Constructor method for sabrinaAnfragePosteingang
     * @uses SabrinaAnfragePosteingang::setKommunikationskanal()
     * @param \THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal
     */
    public function __construct(?\THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal = null)
    {
        $this
            ->setKommunikationskanal($kommunikationskanal);
    }
    /**
     * Get kommunikationskanal value
     * @return \THAG\XKfz\StructType\Code_KommunikationskanalSABRINA|null
     */
    public function getKommunikationskanal(): ?\THAG\XKfz\StructType\Code_KommunikationskanalSABRINA
    {
        return $this->kommunikationskanal;
    }
    /**
     * Set kommunikationskanal value
     * @param \THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal
     * @return \THAG\XKfz\StructType\SabrinaAnfragePosteingang
     */
    public function setKommunikationskanal(?\THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal = null): self
    {
        $this->kommunikationskanal = $kommunikationskanal;
        
        return $this;
    }
}

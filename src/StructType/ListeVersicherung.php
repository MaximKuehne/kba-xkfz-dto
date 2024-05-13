<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeVersicherung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeVersicherung extends AbstractStructBase
{
    /**
     * The Versicherung
     * @var \THAG\XKfz\StructType\Versicherung|null
     */
    public ?\THAG\XKfz\StructType\Versicherung $Versicherung = null;
    /**
     * Constructor method for ListeVersicherung
     * @uses ListeVersicherung::setVersicherung()
     * @param \THAG\XKfz\StructType\Versicherung $versicherung
     */
    public function __construct(?\THAG\XKfz\StructType\Versicherung $versicherung = null)
    {
        $this
            ->setVersicherung($versicherung);
    }
    /**
     * Get Versicherung value
     * @return \THAG\XKfz\StructType\Versicherung|null
     */
    public function getVersicherung(): ?\THAG\XKfz\StructType\Versicherung
    {
        return $this->Versicherung;
    }
    /**
     * Set Versicherung value
     * @param \THAG\XKfz\StructType\Versicherung $versicherung
     * @return \THAG\XKfz\StructType\ListeVersicherung
     */
    public function setVersicherung(?\THAG\XKfz\StructType\Versicherung $versicherung = null): self
    {
        $this->Versicherung = $versicherung;
        
        return $this;
    }
}

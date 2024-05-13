<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeRechteklasse StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeRechteklasse extends AbstractStructBase
{
    /**
     * The Rechteklasse
     * @var \THAG\XKfz\StructType\Rechteklasse|null
     */
    public ?\THAG\XKfz\StructType\Rechteklasse $Rechteklasse = null;
    /**
     * Constructor method for ListeRechteklasse
     * @uses ListeRechteklasse::setRechteklasse()
     * @param \THAG\XKfz\StructType\Rechteklasse $rechteklasse
     */
    public function __construct(?\THAG\XKfz\StructType\Rechteklasse $rechteklasse = null)
    {
        $this
            ->setRechteklasse($rechteklasse);
    }
    /**
     * Get Rechteklasse value
     * @return \THAG\XKfz\StructType\Rechteklasse|null
     */
    public function getRechteklasse(): ?\THAG\XKfz\StructType\Rechteklasse
    {
        return $this->Rechteklasse;
    }
    /**
     * Set Rechteklasse value
     * @param \THAG\XKfz\StructType\Rechteklasse $rechteklasse
     * @return \THAG\XKfz\StructType\ListeRechteklasse
     */
    public function setRechteklasse(?\THAG\XKfz\StructType\Rechteklasse $rechteklasse = null): self
    {
        $this->Rechteklasse = $rechteklasse;
        
        return $this;
    }
}

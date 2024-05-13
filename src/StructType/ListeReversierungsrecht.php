<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeReversierungsrecht StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeReversierungsrecht extends AbstractStructBase
{
    /**
     * The Rechtnummer
     * @var string|null
     */
    public ?string $Rechtnummer = null;
    /**
     * Constructor method for ListeReversierungsrecht
     * @uses ListeReversierungsrecht::setRechtnummer()
     * @param string $rechtnummer
     */
    public function __construct(?string $rechtnummer = null)
    {
        $this
            ->setRechtnummer($rechtnummer);
    }
    /**
     * Get Rechtnummer value
     * @return string|null
     */
    public function getRechtnummer(): ?string
    {
        return $this->Rechtnummer;
    }
    /**
     * Set Rechtnummer value
     * @param string $rechtnummer
     * @return \THAG\XKfz\StructType\ListeReversierungsrecht
     */
    public function setRechtnummer(?string $rechtnummer = null): self
    {
        $this->Rechtnummer = $rechtnummer;
        
        return $this;
    }
}

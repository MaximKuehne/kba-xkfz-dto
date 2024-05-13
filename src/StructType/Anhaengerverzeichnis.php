<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Anhaengerverzeichnis StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Anhaengerverzeichnis extends AbstractStructBase
{
    /**
     * The HinweisAusstellung
     * @var bool|null
     */
    public ?bool $HinweisAusstellung = null;
    /**
     * The DatumAusstellung
     * @var string|null
     */
    public ?string $DatumAusstellung = null;
    /**
     * Constructor method for Anhaengerverzeichnis
     * @uses Anhaengerverzeichnis::setHinweisAusstellung()
     * @uses Anhaengerverzeichnis::setDatumAusstellung()
     * @param bool $hinweisAusstellung
     * @param string $datumAusstellung
     */
    public function __construct(?bool $hinweisAusstellung = null, ?string $datumAusstellung = null)
    {
        $this
            ->setHinweisAusstellung($hinweisAusstellung)
            ->setDatumAusstellung($datumAusstellung);
    }
    /**
     * Get HinweisAusstellung value
     * @return bool|null
     */
    public function getHinweisAusstellung(): ?bool
    {
        return $this->HinweisAusstellung;
    }
    /**
     * Set HinweisAusstellung value
     * @param bool $hinweisAusstellung
     * @return \THAG\XKfz\StructType\Anhaengerverzeichnis
     */
    public function setHinweisAusstellung(?bool $hinweisAusstellung = null): self
    {
        $this->HinweisAusstellung = $hinweisAusstellung;
        
        return $this;
    }
    /**
     * Get DatumAusstellung value
     * @return string|null
     */
    public function getDatumAusstellung(): ?string
    {
        return $this->DatumAusstellung;
    }
    /**
     * Set DatumAusstellung value
     * @param string $datumAusstellung
     * @return \THAG\XKfz\StructType\Anhaengerverzeichnis
     */
    public function setDatumAusstellung(?string $datumAusstellung = null): self
    {
        $this->DatumAusstellung = $datumAusstellung;
        
        return $this;
    }
}

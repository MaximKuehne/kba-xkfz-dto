<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.StatusuebergangAuskunft StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_StatusuebergangAuskunft extends AbstractStructBase
{
    /**
     * The status
     * @var \THAG\XKfz\StructType\Code_StatusElektronischerAntragAuskunft|null
     */
    public ?\THAG\XKfz\StructType\Code_StatusElektronischerAntragAuskunft $status = null;
    /**
     * The zeitpunktDesStatusuebergangs
     * @var string|null
     */
    public ?string $zeitpunktDesStatusuebergangs = null;
    /**
     * Constructor method for Type.StatusuebergangAuskunft
     * @uses Type_StatusuebergangAuskunft::setStatus()
     * @uses Type_StatusuebergangAuskunft::setZeitpunktDesStatusuebergangs()
     * @param \THAG\XKfz\StructType\Code_StatusElektronischerAntragAuskunft $status
     * @param string $zeitpunktDesStatusuebergangs
     */
    public function __construct(?\THAG\XKfz\StructType\Code_StatusElektronischerAntragAuskunft $status = null, ?string $zeitpunktDesStatusuebergangs = null)
    {
        $this
            ->setStatus($status)
            ->setZeitpunktDesStatusuebergangs($zeitpunktDesStatusuebergangs);
    }
    /**
     * Get status value
     * @return \THAG\XKfz\StructType\Code_StatusElektronischerAntragAuskunft|null
     */
    public function getStatus(): ?\THAG\XKfz\StructType\Code_StatusElektronischerAntragAuskunft
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param \THAG\XKfz\StructType\Code_StatusElektronischerAntragAuskunft $status
     * @return \THAG\XKfz\StructType\Type_StatusuebergangAuskunft
     */
    public function setStatus(?\THAG\XKfz\StructType\Code_StatusElektronischerAntragAuskunft $status = null): self
    {
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get zeitpunktDesStatusuebergangs value
     * @return string|null
     */
    public function getZeitpunktDesStatusuebergangs(): ?string
    {
        return $this->zeitpunktDesStatusuebergangs;
    }
    /**
     * Set zeitpunktDesStatusuebergangs value
     * @param string $zeitpunktDesStatusuebergangs
     * @return \THAG\XKfz\StructType\Type_StatusuebergangAuskunft
     */
    public function setZeitpunktDesStatusuebergangs(?string $zeitpunktDesStatusuebergangs = null): self
    {
        $this->zeitpunktDesStatusuebergangs = $zeitpunktDesStatusuebergangs;
        
        return $this;
    }
}

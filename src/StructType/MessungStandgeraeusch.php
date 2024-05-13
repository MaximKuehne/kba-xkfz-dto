<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for messungStandgeraeusch StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class MessungStandgeraeusch extends AbstractStructBase
{
    /**
     * The geraeuschwert
     * @var float|null
     */
    public ?float $geraeuschwert = null;
    /**
     * The geraeuschwertSoll
     * @var float|null
     */
    public ?float $geraeuschwertSoll = null;
    /**
     * Constructor method for messungStandgeraeusch
     * @uses MessungStandgeraeusch::setGeraeuschwert()
     * @uses MessungStandgeraeusch::setGeraeuschwertSoll()
     * @param float $geraeuschwert
     * @param float $geraeuschwertSoll
     */
    public function __construct(?float $geraeuschwert = null, ?float $geraeuschwertSoll = null)
    {
        $this
            ->setGeraeuschwert($geraeuschwert)
            ->setGeraeuschwertSoll($geraeuschwertSoll);
    }
    /**
     * Get geraeuschwert value
     * @return float|null
     */
    public function getGeraeuschwert(): ?float
    {
        return $this->geraeuschwert;
    }
    /**
     * Set geraeuschwert value
     * @param float $geraeuschwert
     * @return \THAG\XKfz\StructType\MessungStandgeraeusch
     */
    public function setGeraeuschwert(?float $geraeuschwert = null): self
    {
        $this->geraeuschwert = $geraeuschwert;
        
        return $this;
    }
    /**
     * Get geraeuschwertSoll value
     * @return float|null
     */
    public function getGeraeuschwertSoll(): ?float
    {
        return $this->geraeuschwertSoll;
    }
    /**
     * Set geraeuschwertSoll value
     * @param float $geraeuschwertSoll
     * @return \THAG\XKfz\StructType\MessungStandgeraeusch
     */
    public function setGeraeuschwertSoll(?float $geraeuschwertSoll = null): self
    {
        $this->geraeuschwertSoll = $geraeuschwertSoll;
        
        return $this;
    }
}

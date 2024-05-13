<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for messungStandgeraeusch StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class MessungStandgeraeusch extends AbstractStructBase
{
    /**
     * The geraeuschwert
     */
    public ?float $geraeuschwert = null;

    /**
     * The geraeuschwertSoll
     */
    public ?float $geraeuschwertSoll = null;

    /**
     * Constructor method for messungStandgeraeusch
     *
     * @uses MessungStandgeraeusch::setGeraeuschwert()
     * @uses MessungStandgeraeusch::setGeraeuschwertSoll()
     */
    public function __construct(?float $geraeuschwert = null, ?float $geraeuschwertSoll = null)
    {
        $this
            ->setGeraeuschwert($geraeuschwert)
            ->setGeraeuschwertSoll($geraeuschwertSoll);
    }

    /**
     * Get geraeuschwert value
     */
    public function getGeraeuschwert(): ?float
    {
        return $this->geraeuschwert;
    }

    /**
     * Set geraeuschwert value
     */
    public function setGeraeuschwert(?float $geraeuschwert = null): self
    {
        $this->geraeuschwert = $geraeuschwert;

        return $this;
    }

    /**
     * Get geraeuschwertSoll value
     */
    public function getGeraeuschwertSoll(): ?float
    {
        return $this->geraeuschwertSoll;
    }

    /**
     * Set geraeuschwertSoll value
     */
    public function setGeraeuschwertSoll(?float $geraeuschwertSoll = null): self
    {
        $this->geraeuschwertSoll = $geraeuschwertSoll;

        return $this;
    }
}

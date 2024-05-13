<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Statusuebergang StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Statusuebergang extends AbstractStructBase
{
    /**
     * The status
     */
    public ?\THAG\XKfz\StructType\Code_StatusElektronischerAntrag $status = null;

    /**
     * The zeitpunktDesStatusuebergangs
     */
    public ?string $zeitpunktDesStatusuebergangs = null;

    /**
     * The referenzVeranlasser
     */
    public ?\THAG\XKfz\StructType\Type_ReferenzAntragsteller $referenzVeranlasser = null;

    /**
     * Constructor method for Type.Statusuebergang
     *
     * @uses Type_Statusuebergang::setStatus()
     * @uses Type_Statusuebergang::setZeitpunktDesStatusuebergangs()
     * @uses Type_Statusuebergang::setReferenzVeranlasser()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_StatusElektronischerAntrag $status = null, ?string $zeitpunktDesStatusuebergangs = null, ?\THAG\XKfz\StructType\Type_ReferenzAntragsteller $referenzVeranlasser = null)
    {
        $this
            ->setStatus($status)
            ->setZeitpunktDesStatusuebergangs($zeitpunktDesStatusuebergangs)
            ->setReferenzVeranlasser($referenzVeranlasser);
    }

    /**
     * Get status value
     */
    public function getStatus(): ?\THAG\XKfz\StructType\Code_StatusElektronischerAntrag
    {
        return $this->status;
    }

    /**
     * Set status value
     */
    public function setStatus(?\THAG\XKfz\StructType\Code_StatusElektronischerAntrag $status = null): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get zeitpunktDesStatusuebergangs value
     */
    public function getZeitpunktDesStatusuebergangs(): ?string
    {
        return $this->zeitpunktDesStatusuebergangs;
    }

    /**
     * Set zeitpunktDesStatusuebergangs value
     */
    public function setZeitpunktDesStatusuebergangs(?string $zeitpunktDesStatusuebergangs = null): self
    {
        $this->zeitpunktDesStatusuebergangs = $zeitpunktDesStatusuebergangs;

        return $this;
    }

    /**
     * Get referenzVeranlasser value
     */
    public function getReferenzVeranlasser(): ?\THAG\XKfz\StructType\Type_ReferenzAntragsteller
    {
        return $this->referenzVeranlasser;
    }

    /**
     * Set referenzVeranlasser value
     */
    public function setReferenzVeranlasser(?\THAG\XKfz\StructType\Type_ReferenzAntragsteller $referenzVeranlasser = null): self
    {
        $this->referenzVeranlasser = $referenzVeranlasser;

        return $this;
    }
}

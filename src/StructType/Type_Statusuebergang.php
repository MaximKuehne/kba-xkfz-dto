<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Statusuebergang StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Statusuebergang extends AbstractStructBase
{
    /**
     * The status
     * @var \THAG\XKfz\StructType\Code_StatusElektronischerAntrag|null
     */
    public ?\THAG\XKfz\StructType\Code_StatusElektronischerAntrag $status = null;
    /**
     * The zeitpunktDesStatusuebergangs
     * @var string|null
     */
    public ?string $zeitpunktDesStatusuebergangs = null;
    /**
     * The referenzVeranlasser
     * @var \THAG\XKfz\StructType\Type_ReferenzAntragsteller|null
     */
    public ?\THAG\XKfz\StructType\Type_ReferenzAntragsteller $referenzVeranlasser = null;
    /**
     * Constructor method for Type.Statusuebergang
     * @uses Type_Statusuebergang::setStatus()
     * @uses Type_Statusuebergang::setZeitpunktDesStatusuebergangs()
     * @uses Type_Statusuebergang::setReferenzVeranlasser()
     * @param \THAG\XKfz\StructType\Code_StatusElektronischerAntrag $status
     * @param string $zeitpunktDesStatusuebergangs
     * @param \THAG\XKfz\StructType\Type_ReferenzAntragsteller $referenzVeranlasser
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
     * @return \THAG\XKfz\StructType\Code_StatusElektronischerAntrag|null
     */
    public function getStatus(): ?\THAG\XKfz\StructType\Code_StatusElektronischerAntrag
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param \THAG\XKfz\StructType\Code_StatusElektronischerAntrag $status
     * @return \THAG\XKfz\StructType\Type_Statusuebergang
     */
    public function setStatus(?\THAG\XKfz\StructType\Code_StatusElektronischerAntrag $status = null): self
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
     * @return \THAG\XKfz\StructType\Type_Statusuebergang
     */
    public function setZeitpunktDesStatusuebergangs(?string $zeitpunktDesStatusuebergangs = null): self
    {
        $this->zeitpunktDesStatusuebergangs = $zeitpunktDesStatusuebergangs;
        
        return $this;
    }
    /**
     * Get referenzVeranlasser value
     * @return \THAG\XKfz\StructType\Type_ReferenzAntragsteller|null
     */
    public function getReferenzVeranlasser(): ?\THAG\XKfz\StructType\Type_ReferenzAntragsteller
    {
        return $this->referenzVeranlasser;
    }
    /**
     * Set referenzVeranlasser value
     * @param \THAG\XKfz\StructType\Type_ReferenzAntragsteller $referenzVeranlasser
     * @return \THAG\XKfz\StructType\Type_Statusuebergang
     */
    public function setReferenzVeranlasser(?\THAG\XKfz\StructType\Type_ReferenzAntragsteller $referenzVeranlasser = null): self
    {
        $this->referenzVeranlasser = $referenzVeranlasser;
        
        return $this;
    }
}

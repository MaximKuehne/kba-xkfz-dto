<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturncodeUndReturntextTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ReturncodeUndReturntextTyp extends AbstractStructBase
{
    /**
     * The Returncode
     */
    public ?string $Returncode = null;

    /**
     * The Returntext
     */
    public ?string $Returntext = null;

    /**
     * Constructor method for ReturncodeUndReturntextTyp
     *
     * @uses ReturncodeUndReturntextTyp::setReturncode()
     * @uses ReturncodeUndReturntextTyp::setReturntext()
     */
    public function __construct(?string $returncode = null, ?string $returntext = null)
    {
        $this
            ->setReturncode($returncode)
            ->setReturntext($returntext);
    }

    /**
     * Get Returncode value
     */
    public function getReturncode(): ?string
    {
        return $this->Returncode;
    }

    /**
     * Set Returncode value
     */
    public function setReturncode(?string $returncode = null): self
    {
        $this->Returncode = $returncode;

        return $this;
    }

    /**
     * Get Returntext value
     */
    public function getReturntext(): ?string
    {
        return $this->Returntext;
    }

    /**
     * Set Returntext value
     */
    public function setReturntext(?string $returntext = null): self
    {
        $this->Returntext = $returntext;

        return $this;
    }
}

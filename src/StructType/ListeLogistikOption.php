<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeLogistikOption StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeLogistikOption extends AbstractStructBase
{
    /**
     * The LogistikOption
     */
    public ?string $LogistikOption = null;

    /**
     * Constructor method for ListeLogistikOption
     *
     * @uses ListeLogistikOption::setLogistikOption()
     */
    public function __construct(?string $logistikOption = null)
    {
        $this
            ->setLogistikOption($logistikOption);
    }

    /**
     * Get LogistikOption value
     */
    public function getLogistikOption(): ?string
    {
        return $this->LogistikOption;
    }

    /**
     * Set LogistikOption value
     */
    public function setLogistikOption(?string $logistikOption = null): self
    {
        $this->LogistikOption = $logistikOption;

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypFeldindividualisierung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypFeldindividualisierung extends AbstractStructBase
{
    /**
     * The CodeDatentypName
     */
    public ?string $CodeDatentypName = null;

    /**
     * The VorgangFeldStatus
     */
    public ?string $VorgangFeldStatus = null;

    /**
     * The DatentypName
     */
    public ?string $DatentypName = null;

    /**
     * Constructor method for DatentypFeldindividualisierung
     *
     * @uses DatentypFeldindividualisierung::setCodeDatentypName()
     * @uses DatentypFeldindividualisierung::setVorgangFeldStatus()
     * @uses DatentypFeldindividualisierung::setDatentypName()
     */
    public function __construct(?string $codeDatentypName = null, ?string $vorgangFeldStatus = null, ?string $datentypName = null)
    {
        $this
            ->setCodeDatentypName($codeDatentypName)
            ->setVorgangFeldStatus($vorgangFeldStatus)
            ->setDatentypName($datentypName);
    }

    /**
     * Get CodeDatentypName value
     */
    public function getCodeDatentypName(): ?string
    {
        return $this->CodeDatentypName;
    }

    /**
     * Set CodeDatentypName value
     */
    public function setCodeDatentypName(?string $codeDatentypName = null): self
    {
        $this->CodeDatentypName = $codeDatentypName;

        return $this;
    }

    /**
     * Get VorgangFeldStatus value
     */
    public function getVorgangFeldStatus(): ?string
    {
        return $this->VorgangFeldStatus;
    }

    /**
     * Set VorgangFeldStatus value
     */
    public function setVorgangFeldStatus(?string $vorgangFeldStatus = null): self
    {
        $this->VorgangFeldStatus = $vorgangFeldStatus;

        return $this;
    }

    /**
     * Get DatentypName value
     */
    public function getDatentypName(): ?string
    {
        return $this->DatentypName;
    }

    /**
     * Set DatentypName value
     */
    public function setDatentypName(?string $datentypName = null): self
    {
        $this->DatentypName = $datentypName;

        return $this;
    }
}

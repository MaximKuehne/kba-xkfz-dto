<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypFeldindividualisierung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypFeldindividualisierung extends AbstractStructBase
{
    /**
     * The CodeDatentypName
     * @var string|null
     */
    public ?string $CodeDatentypName = null;
    /**
     * The VorgangFeldStatus
     * @var string|null
     */
    public ?string $VorgangFeldStatus = null;
    /**
     * The DatentypName
     * @var string|null
     */
    public ?string $DatentypName = null;
    /**
     * Constructor method for DatentypFeldindividualisierung
     * @uses DatentypFeldindividualisierung::setCodeDatentypName()
     * @uses DatentypFeldindividualisierung::setVorgangFeldStatus()
     * @uses DatentypFeldindividualisierung::setDatentypName()
     * @param string $codeDatentypName
     * @param string $vorgangFeldStatus
     * @param string $datentypName
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
     * @return string|null
     */
    public function getCodeDatentypName(): ?string
    {
        return $this->CodeDatentypName;
    }
    /**
     * Set CodeDatentypName value
     * @param string $codeDatentypName
     * @return \THAG\XKfz\StructType\DatentypFeldindividualisierung
     */
    public function setCodeDatentypName(?string $codeDatentypName = null): self
    {
        $this->CodeDatentypName = $codeDatentypName;
        
        return $this;
    }
    /**
     * Get VorgangFeldStatus value
     * @return string|null
     */
    public function getVorgangFeldStatus(): ?string
    {
        return $this->VorgangFeldStatus;
    }
    /**
     * Set VorgangFeldStatus value
     * @param string $vorgangFeldStatus
     * @return \THAG\XKfz\StructType\DatentypFeldindividualisierung
     */
    public function setVorgangFeldStatus(?string $vorgangFeldStatus = null): self
    {
        $this->VorgangFeldStatus = $vorgangFeldStatus;
        
        return $this;
    }
    /**
     * Get DatentypName value
     * @return string|null
     */
    public function getDatentypName(): ?string
    {
        return $this->DatentypName;
    }
    /**
     * Set DatentypName value
     * @param string $datentypName
     * @return \THAG\XKfz\StructType\DatentypFeldindividualisierung
     */
    public function setDatentypName(?string $datentypName = null): self
    {
        $this->DatentypName = $datentypName;
        
        return $this;
    }
}

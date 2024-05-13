<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ITD_GDV_060.ListeAuftragStatus StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ITD_GDV_060_ListeAuftragStatus extends AbstractStructBase
{
    /**
     * The AuftragStatus
     */
    public ?\THAG\XKfz\StructType\ITD_GDV_060_AuftragStatus $AuftragStatus = null;

    /**
     * Constructor method for ITD_GDV_060.ListeAuftragStatus
     *
     * @uses ITD_GDV_060_ListeAuftragStatus::setAuftragStatus()
     */
    public function __construct(?\THAG\XKfz\StructType\ITD_GDV_060_AuftragStatus $auftragStatus = null)
    {
        $this
            ->setAuftragStatus($auftragStatus);
    }

    /**
     * Get AuftragStatus value
     */
    public function getAuftragStatus(): ?\THAG\XKfz\StructType\ITD_GDV_060_AuftragStatus
    {
        return $this->AuftragStatus;
    }

    /**
     * Set AuftragStatus value
     */
    public function setAuftragStatus(?\THAG\XKfz\StructType\ITD_GDV_060_AuftragStatus $auftragStatus = null): self
    {
        $this->AuftragStatus = $auftragStatus;

        return $this;
    }
}

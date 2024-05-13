<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ITD_GDV_060.ListeAuftragStatus.ListeVkzLogistikDaten
 * StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ITD_GDV_060_ListeAuftragStatus_ListeVkzLogistikDaten extends AbstractStructBase
{
    /**
     * The VkzLogistikDaten
     */
    public ?\THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_VkzLogistikDaten $VkzLogistikDaten = null;

    /**
     * Constructor method for ITD_GDV_060.ListeAuftragStatus.ListeVkzLogistikDaten
     *
     * @uses ITD_GDV_060_ListeAuftragStatus_ListeVkzLogistikDaten::setVkzLogistikDaten()
     */
    public function __construct(?\THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_VkzLogistikDaten $vkzLogistikDaten = null)
    {
        $this
            ->setVkzLogistikDaten($vkzLogistikDaten);
    }

    /**
     * Get VkzLogistikDaten value
     */
    public function getVkzLogistikDaten(): ?\THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_VkzLogistikDaten
    {
        return $this->VkzLogistikDaten;
    }

    /**
     * Set VkzLogistikDaten value
     */
    public function setVkzLogistikDaten(?\THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_VkzLogistikDaten $vkzLogistikDaten = null): self
    {
        $this->VkzLogistikDaten = $vkzLogistikDaten;

        return $this;
    }
}

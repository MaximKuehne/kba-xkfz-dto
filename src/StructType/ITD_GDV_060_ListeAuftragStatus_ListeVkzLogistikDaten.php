<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ITD_GDV_060.ListeAuftragStatus.ListeVkzLogistikDaten
 * StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ITD_GDV_060_ListeAuftragStatus_ListeVkzLogistikDaten extends AbstractStructBase
{
    /**
     * The VkzLogistikDaten
     * @var \THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_VkzLogistikDaten|null
     */
    public ?\THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_VkzLogistikDaten $VkzLogistikDaten = null;
    /**
     * Constructor method for ITD_GDV_060.ListeAuftragStatus.ListeVkzLogistikDaten
     * @uses ITD_GDV_060_ListeAuftragStatus_ListeVkzLogistikDaten::setVkzLogistikDaten()
     * @param \THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_VkzLogistikDaten $vkzLogistikDaten
     */
    public function __construct(?\THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_VkzLogistikDaten $vkzLogistikDaten = null)
    {
        $this
            ->setVkzLogistikDaten($vkzLogistikDaten);
    }
    /**
     * Get VkzLogistikDaten value
     * @return \THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_VkzLogistikDaten|null
     */
    public function getVkzLogistikDaten(): ?\THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_VkzLogistikDaten
    {
        return $this->VkzLogistikDaten;
    }
    /**
     * Set VkzLogistikDaten value
     * @param \THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_VkzLogistikDaten $vkzLogistikDaten
     * @return \THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_ListeVkzLogistikDaten
     */
    public function setVkzLogistikDaten(?\THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_VkzLogistikDaten $vkzLogistikDaten = null): self
    {
        $this->VkzLogistikDaten = $vkzLogistikDaten;
        
        return $this;
    }
}

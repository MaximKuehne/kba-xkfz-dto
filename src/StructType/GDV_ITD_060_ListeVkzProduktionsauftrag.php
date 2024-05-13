<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GDV_ITD_060.ListeVkzProduktionsauftrag StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class GDV_ITD_060_ListeVkzProduktionsauftrag extends AbstractStructBase
{
    /**
     * The VkzProduktionsauftrag
     */
    public ?\THAG\XKfz\StructType\GDV_ITD_060_VkzProduktionsauftrag $VkzProduktionsauftrag = null;

    /**
     * Constructor method for GDV_ITD_060.ListeVkzProduktionsauftrag
     *
     * @uses GDV_ITD_060_ListeVkzProduktionsauftrag::setVkzProduktionsauftrag()
     */
    public function __construct(?\THAG\XKfz\StructType\GDV_ITD_060_VkzProduktionsauftrag $vkzProduktionsauftrag = null)
    {
        $this
            ->setVkzProduktionsauftrag($vkzProduktionsauftrag);
    }

    /**
     * Get VkzProduktionsauftrag value
     */
    public function getVkzProduktionsauftrag(): ?\THAG\XKfz\StructType\GDV_ITD_060_VkzProduktionsauftrag
    {
        return $this->VkzProduktionsauftrag;
    }

    /**
     * Set VkzProduktionsauftrag value
     */
    public function setVkzProduktionsauftrag(?\THAG\XKfz\StructType\GDV_ITD_060_VkzProduktionsauftrag $vkzProduktionsauftrag = null): self
    {
        $this->VkzProduktionsauftrag = $vkzProduktionsauftrag;

        return $this;
    }
}

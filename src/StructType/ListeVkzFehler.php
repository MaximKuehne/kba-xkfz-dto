<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeVkzFehler StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeVkzFehler extends AbstractStructBase
{
    /**
     * The VkzFehler
     * @var \THAG\XKfz\StructType\VkzFehler|null
     */
    public ?\THAG\XKfz\StructType\VkzFehler $VkzFehler = null;
    /**
     * Constructor method for ListeVkzFehler
     * @uses ListeVkzFehler::setVkzFehler()
     * @param \THAG\XKfz\StructType\VkzFehler $vkzFehler
     */
    public function __construct(?\THAG\XKfz\StructType\VkzFehler $vkzFehler = null)
    {
        $this
            ->setVkzFehler($vkzFehler);
    }
    /**
     * Get VkzFehler value
     * @return \THAG\XKfz\StructType\VkzFehler|null
     */
    public function getVkzFehler(): ?\THAG\XKfz\StructType\VkzFehler
    {
        return $this->VkzFehler;
    }
    /**
     * Set VkzFehler value
     * @param \THAG\XKfz\StructType\VkzFehler $vkzFehler
     * @return \THAG\XKfz\StructType\ListeVkzFehler
     */
    public function setVkzFehler(?\THAG\XKfz\StructType\VkzFehler $vkzFehler = null): self
    {
        $this->VkzFehler = $vkzFehler;
        
        return $this;
    }
}

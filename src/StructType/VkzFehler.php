<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VkzFehler StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VkzFehler extends AbstractStructBase
{
    /**
     * The VkzFehlercode
     * @var string|null
     */
    public ?string $VkzFehlercode = null;
    /**
     * The VkzFehlertext
     * @var string|null
     */
    public ?string $VkzFehlertext = null;
    /**
     * The VkzFehlerbeschreibung
     * @var string|null
     */
    public ?string $VkzFehlerbeschreibung = null;
    /**
     * Constructor method for VkzFehler
     * @uses VkzFehler::setVkzFehlercode()
     * @uses VkzFehler::setVkzFehlertext()
     * @uses VkzFehler::setVkzFehlerbeschreibung()
     * @param string $vkzFehlercode
     * @param string $vkzFehlertext
     * @param string $vkzFehlerbeschreibung
     */
    public function __construct(?string $vkzFehlercode = null, ?string $vkzFehlertext = null, ?string $vkzFehlerbeschreibung = null)
    {
        $this
            ->setVkzFehlercode($vkzFehlercode)
            ->setVkzFehlertext($vkzFehlertext)
            ->setVkzFehlerbeschreibung($vkzFehlerbeschreibung);
    }
    /**
     * Get VkzFehlercode value
     * @return string|null
     */
    public function getVkzFehlercode(): ?string
    {
        return $this->VkzFehlercode;
    }
    /**
     * Set VkzFehlercode value
     * @param string $vkzFehlercode
     * @return \THAG\XKfz\StructType\VkzFehler
     */
    public function setVkzFehlercode(?string $vkzFehlercode = null): self
    {
        $this->VkzFehlercode = $vkzFehlercode;
        
        return $this;
    }
    /**
     * Get VkzFehlertext value
     * @return string|null
     */
    public function getVkzFehlertext(): ?string
    {
        return $this->VkzFehlertext;
    }
    /**
     * Set VkzFehlertext value
     * @param string $vkzFehlertext
     * @return \THAG\XKfz\StructType\VkzFehler
     */
    public function setVkzFehlertext(?string $vkzFehlertext = null): self
    {
        $this->VkzFehlertext = $vkzFehlertext;
        
        return $this;
    }
    /**
     * Get VkzFehlerbeschreibung value
     * @return string|null
     */
    public function getVkzFehlerbeschreibung(): ?string
    {
        return $this->VkzFehlerbeschreibung;
    }
    /**
     * Set VkzFehlerbeschreibung value
     * @param string $vkzFehlerbeschreibung
     * @return \THAG\XKfz\StructType\VkzFehler
     */
    public function setVkzFehlerbeschreibung(?string $vkzFehlerbeschreibung = null): self
    {
        $this->VkzFehlerbeschreibung = $vkzFehlerbeschreibung;
        
        return $this;
    }
}

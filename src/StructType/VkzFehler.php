<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VkzFehler StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VkzFehler extends AbstractStructBase
{
    /**
     * The VkzFehlercode
     */
    public ?string $VkzFehlercode = null;

    /**
     * The VkzFehlertext
     */
    public ?string $VkzFehlertext = null;

    /**
     * The VkzFehlerbeschreibung
     */
    public ?string $VkzFehlerbeschreibung = null;

    /**
     * Constructor method for VkzFehler
     *
     * @uses VkzFehler::setVkzFehlercode()
     * @uses VkzFehler::setVkzFehlertext()
     * @uses VkzFehler::setVkzFehlerbeschreibung()
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
     */
    public function getVkzFehlercode(): ?string
    {
        return $this->VkzFehlercode;
    }

    /**
     * Set VkzFehlercode value
     */
    public function setVkzFehlercode(?string $vkzFehlercode = null): self
    {
        $this->VkzFehlercode = $vkzFehlercode;

        return $this;
    }

    /**
     * Get VkzFehlertext value
     */
    public function getVkzFehlertext(): ?string
    {
        return $this->VkzFehlertext;
    }

    /**
     * Set VkzFehlertext value
     */
    public function setVkzFehlertext(?string $vkzFehlertext = null): self
    {
        $this->VkzFehlertext = $vkzFehlertext;

        return $this;
    }

    /**
     * Get VkzFehlerbeschreibung value
     */
    public function getVkzFehlerbeschreibung(): ?string
    {
        return $this->VkzFehlerbeschreibung;
    }

    /**
     * Set VkzFehlerbeschreibung value
     */
    public function setVkzFehlerbeschreibung(?string $vkzFehlerbeschreibung = null): self
    {
        $this->VkzFehlerbeschreibung = $vkzFehlerbeschreibung;

        return $this;
    }
}

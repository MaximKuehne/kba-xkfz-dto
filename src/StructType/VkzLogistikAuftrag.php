<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VkzLogistikAuftrag StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VkzLogistikAuftrag extends AbstractStructBase
{
    /**
     * The VkzGroesse
     */
    public ?string $VkzGroesse = null;

    /**
     * The VkzTraegerplatteVersenden
     */
    public ?string $VkzTraegerplatteVersenden = null;

    /**
     * The EmpfaengerIstHalter
     */
    public ?string $EmpfaengerIstHalter = null;

    /**
     * The LogistikEmpfaenger
     */
    public ?\THAG\XKfz\StructType\LogistikEmpfaenger $LogistikEmpfaenger = null;

    /**
     * The ListeLogistikOption
     */
    public ?\THAG\XKfz\StructType\ListeLogistikOption $ListeLogistikOption = null;

    /**
     * Constructor method for VkzLogistikAuftrag
     *
     * @uses VkzLogistikAuftrag::setVkzGroesse()
     * @uses VkzLogistikAuftrag::setVkzTraegerplatteVersenden()
     * @uses VkzLogistikAuftrag::setEmpfaengerIstHalter()
     * @uses VkzLogistikAuftrag::setLogistikEmpfaenger()
     * @uses VkzLogistikAuftrag::setListeLogistikOption()
     */
    public function __construct(?string $vkzGroesse = null, ?string $vkzTraegerplatteVersenden = null, ?string $empfaengerIstHalter = null, ?\THAG\XKfz\StructType\LogistikEmpfaenger $logistikEmpfaenger = null, ?\THAG\XKfz\StructType\ListeLogistikOption $listeLogistikOption = null)
    {
        $this
            ->setVkzGroesse($vkzGroesse)
            ->setVkzTraegerplatteVersenden($vkzTraegerplatteVersenden)
            ->setEmpfaengerIstHalter($empfaengerIstHalter)
            ->setLogistikEmpfaenger($logistikEmpfaenger)
            ->setListeLogistikOption($listeLogistikOption);
    }

    /**
     * Get VkzGroesse value
     */
    public function getVkzGroesse(): ?string
    {
        return $this->VkzGroesse;
    }

    /**
     * Set VkzGroesse value
     */
    public function setVkzGroesse(?string $vkzGroesse = null): self
    {
        $this->VkzGroesse = $vkzGroesse;

        return $this;
    }

    /**
     * Get VkzTraegerplatteVersenden value
     */
    public function getVkzTraegerplatteVersenden(): ?string
    {
        return $this->VkzTraegerplatteVersenden;
    }

    /**
     * Set VkzTraegerplatteVersenden value
     */
    public function setVkzTraegerplatteVersenden(?string $vkzTraegerplatteVersenden = null): self
    {
        $this->VkzTraegerplatteVersenden = $vkzTraegerplatteVersenden;

        return $this;
    }

    /**
     * Get EmpfaengerIstHalter value
     */
    public function getEmpfaengerIstHalter(): ?string
    {
        return $this->EmpfaengerIstHalter;
    }

    /**
     * Set EmpfaengerIstHalter value
     */
    public function setEmpfaengerIstHalter(?string $empfaengerIstHalter = null): self
    {
        $this->EmpfaengerIstHalter = $empfaengerIstHalter;

        return $this;
    }

    /**
     * Get LogistikEmpfaenger value
     */
    public function getLogistikEmpfaenger(): ?\THAG\XKfz\StructType\LogistikEmpfaenger
    {
        return $this->LogistikEmpfaenger;
    }

    /**
     * Set LogistikEmpfaenger value
     */
    public function setLogistikEmpfaenger(?\THAG\XKfz\StructType\LogistikEmpfaenger $logistikEmpfaenger = null): self
    {
        $this->LogistikEmpfaenger = $logistikEmpfaenger;

        return $this;
    }

    /**
     * Get ListeLogistikOption value
     */
    public function getListeLogistikOption(): ?\THAG\XKfz\StructType\ListeLogistikOption
    {
        return $this->ListeLogistikOption;
    }

    /**
     * Set ListeLogistikOption value
     */
    public function setListeLogistikOption(?\THAG\XKfz\StructType\ListeLogistikOption $listeLogistikOption = null): self
    {
        $this->ListeLogistikOption = $listeLogistikOption;

        return $this;
    }
}

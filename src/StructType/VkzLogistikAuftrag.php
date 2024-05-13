<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VkzLogistikAuftrag StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VkzLogistikAuftrag extends AbstractStructBase
{
    /**
     * The VkzGroesse
     * @var string|null
     */
    public ?string $VkzGroesse = null;
    /**
     * The VkzTraegerplatteVersenden
     * @var string|null
     */
    public ?string $VkzTraegerplatteVersenden = null;
    /**
     * The EmpfaengerIstHalter
     * @var string|null
     */
    public ?string $EmpfaengerIstHalter = null;
    /**
     * The LogistikEmpfaenger
     * @var \THAG\XKfz\StructType\LogistikEmpfaenger|null
     */
    public ?\THAG\XKfz\StructType\LogistikEmpfaenger $LogistikEmpfaenger = null;
    /**
     * The ListeLogistikOption
     * @var \THAG\XKfz\StructType\ListeLogistikOption|null
     */
    public ?\THAG\XKfz\StructType\ListeLogistikOption $ListeLogistikOption = null;
    /**
     * Constructor method for VkzLogistikAuftrag
     * @uses VkzLogistikAuftrag::setVkzGroesse()
     * @uses VkzLogistikAuftrag::setVkzTraegerplatteVersenden()
     * @uses VkzLogistikAuftrag::setEmpfaengerIstHalter()
     * @uses VkzLogistikAuftrag::setLogistikEmpfaenger()
     * @uses VkzLogistikAuftrag::setListeLogistikOption()
     * @param string $vkzGroesse
     * @param string $vkzTraegerplatteVersenden
     * @param string $empfaengerIstHalter
     * @param \THAG\XKfz\StructType\LogistikEmpfaenger $logistikEmpfaenger
     * @param \THAG\XKfz\StructType\ListeLogistikOption $listeLogistikOption
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
     * @return string|null
     */
    public function getVkzGroesse(): ?string
    {
        return $this->VkzGroesse;
    }
    /**
     * Set VkzGroesse value
     * @param string $vkzGroesse
     * @return \THAG\XKfz\StructType\VkzLogistikAuftrag
     */
    public function setVkzGroesse(?string $vkzGroesse = null): self
    {
        $this->VkzGroesse = $vkzGroesse;
        
        return $this;
    }
    /**
     * Get VkzTraegerplatteVersenden value
     * @return string|null
     */
    public function getVkzTraegerplatteVersenden(): ?string
    {
        return $this->VkzTraegerplatteVersenden;
    }
    /**
     * Set VkzTraegerplatteVersenden value
     * @param string $vkzTraegerplatteVersenden
     * @return \THAG\XKfz\StructType\VkzLogistikAuftrag
     */
    public function setVkzTraegerplatteVersenden(?string $vkzTraegerplatteVersenden = null): self
    {
        $this->VkzTraegerplatteVersenden = $vkzTraegerplatteVersenden;
        
        return $this;
    }
    /**
     * Get EmpfaengerIstHalter value
     * @return string|null
     */
    public function getEmpfaengerIstHalter(): ?string
    {
        return $this->EmpfaengerIstHalter;
    }
    /**
     * Set EmpfaengerIstHalter value
     * @param string $empfaengerIstHalter
     * @return \THAG\XKfz\StructType\VkzLogistikAuftrag
     */
    public function setEmpfaengerIstHalter(?string $empfaengerIstHalter = null): self
    {
        $this->EmpfaengerIstHalter = $empfaengerIstHalter;
        
        return $this;
    }
    /**
     * Get LogistikEmpfaenger value
     * @return \THAG\XKfz\StructType\LogistikEmpfaenger|null
     */
    public function getLogistikEmpfaenger(): ?\THAG\XKfz\StructType\LogistikEmpfaenger
    {
        return $this->LogistikEmpfaenger;
    }
    /**
     * Set LogistikEmpfaenger value
     * @param \THAG\XKfz\StructType\LogistikEmpfaenger $logistikEmpfaenger
     * @return \THAG\XKfz\StructType\VkzLogistikAuftrag
     */
    public function setLogistikEmpfaenger(?\THAG\XKfz\StructType\LogistikEmpfaenger $logistikEmpfaenger = null): self
    {
        $this->LogistikEmpfaenger = $logistikEmpfaenger;
        
        return $this;
    }
    /**
     * Get ListeLogistikOption value
     * @return \THAG\XKfz\StructType\ListeLogistikOption|null
     */
    public function getListeLogistikOption(): ?\THAG\XKfz\StructType\ListeLogistikOption
    {
        return $this->ListeLogistikOption;
    }
    /**
     * Set ListeLogistikOption value
     * @param \THAG\XKfz\StructType\ListeLogistikOption $listeLogistikOption
     * @return \THAG\XKfz\StructType\VkzLogistikAuftrag
     */
    public function setListeLogistikOption(?\THAG\XKfz\StructType\ListeLogistikOption $listeLogistikOption = null): self
    {
        $this->ListeLogistikOption = $listeLogistikOption;
        
        return $this;
    }
}

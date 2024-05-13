<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Versicherungsnehmer StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Versicherungsnehmer extends AbstractStructBase
{
    /**
     * The NatuerlichePerson
     * @var \THAG\XKfz\StructType\NatuerlichePerson|null
     */
    public ?\THAG\XKfz\StructType\NatuerlichePerson $NatuerlichePerson = null;
    /**
     * The JuristischePerson
     * @var \THAG\XKfz\StructType\JuristischePerson|null
     */
    public ?\THAG\XKfz\StructType\JuristischePerson $JuristischePerson = null;
    /**
     * The Vereinigung
     * @var \THAG\XKfz\StructType\Vereinigung|null
     */
    public ?\THAG\XKfz\StructType\Vereinigung $Vereinigung = null;
    /**
     * The Anschrift
     * @var \THAG\XKfz\StructType\Anschrift|null
     */
    public ?\THAG\XKfz\StructType\Anschrift $Anschrift = null;
    /**
     * The KundennummerVU
     * @var string|null
     */
    public ?string $KundennummerVU = null;
    /**
     * The KundennummerVM
     * @var string|null
     */
    public ?string $KundennummerVM = null;
    /**
     * Constructor method for Versicherungsnehmer
     * @uses Versicherungsnehmer::setNatuerlichePerson()
     * @uses Versicherungsnehmer::setJuristischePerson()
     * @uses Versicherungsnehmer::setVereinigung()
     * @uses Versicherungsnehmer::setAnschrift()
     * @uses Versicherungsnehmer::setKundennummerVU()
     * @uses Versicherungsnehmer::setKundennummerVM()
     * @param \THAG\XKfz\StructType\NatuerlichePerson $natuerlichePerson
     * @param \THAG\XKfz\StructType\JuristischePerson $juristischePerson
     * @param \THAG\XKfz\StructType\Vereinigung $vereinigung
     * @param \THAG\XKfz\StructType\Anschrift $anschrift
     * @param string $kundennummerVU
     * @param string $kundennummerVM
     */
    public function __construct(?\THAG\XKfz\StructType\NatuerlichePerson $natuerlichePerson = null, ?\THAG\XKfz\StructType\JuristischePerson $juristischePerson = null, ?\THAG\XKfz\StructType\Vereinigung $vereinigung = null, ?\THAG\XKfz\StructType\Anschrift $anschrift = null, ?string $kundennummerVU = null, ?string $kundennummerVM = null)
    {
        $this
            ->setNatuerlichePerson($natuerlichePerson)
            ->setJuristischePerson($juristischePerson)
            ->setVereinigung($vereinigung)
            ->setAnschrift($anschrift)
            ->setKundennummerVU($kundennummerVU)
            ->setKundennummerVM($kundennummerVM);
    }
    /**
     * Get NatuerlichePerson value
     * @return \THAG\XKfz\StructType\NatuerlichePerson|null
     */
    public function getNatuerlichePerson(): ?\THAG\XKfz\StructType\NatuerlichePerson
    {
        return $this->NatuerlichePerson;
    }
    /**
     * Set NatuerlichePerson value
     * @param \THAG\XKfz\StructType\NatuerlichePerson $natuerlichePerson
     * @return \THAG\XKfz\StructType\Versicherungsnehmer
     */
    public function setNatuerlichePerson(?\THAG\XKfz\StructType\NatuerlichePerson $natuerlichePerson = null): self
    {
        $this->NatuerlichePerson = $natuerlichePerson;
        
        return $this;
    }
    /**
     * Get JuristischePerson value
     * @return \THAG\XKfz\StructType\JuristischePerson|null
     */
    public function getJuristischePerson(): ?\THAG\XKfz\StructType\JuristischePerson
    {
        return $this->JuristischePerson;
    }
    /**
     * Set JuristischePerson value
     * @param \THAG\XKfz\StructType\JuristischePerson $juristischePerson
     * @return \THAG\XKfz\StructType\Versicherungsnehmer
     */
    public function setJuristischePerson(?\THAG\XKfz\StructType\JuristischePerson $juristischePerson = null): self
    {
        $this->JuristischePerson = $juristischePerson;
        
        return $this;
    }
    /**
     * Get Vereinigung value
     * @return \THAG\XKfz\StructType\Vereinigung|null
     */
    public function getVereinigung(): ?\THAG\XKfz\StructType\Vereinigung
    {
        return $this->Vereinigung;
    }
    /**
     * Set Vereinigung value
     * @param \THAG\XKfz\StructType\Vereinigung $vereinigung
     * @return \THAG\XKfz\StructType\Versicherungsnehmer
     */
    public function setVereinigung(?\THAG\XKfz\StructType\Vereinigung $vereinigung = null): self
    {
        $this->Vereinigung = $vereinigung;
        
        return $this;
    }
    /**
     * Get Anschrift value
     * @return \THAG\XKfz\StructType\Anschrift|null
     */
    public function getAnschrift(): ?\THAG\XKfz\StructType\Anschrift
    {
        return $this->Anschrift;
    }
    /**
     * Set Anschrift value
     * @param \THAG\XKfz\StructType\Anschrift $anschrift
     * @return \THAG\XKfz\StructType\Versicherungsnehmer
     */
    public function setAnschrift(?\THAG\XKfz\StructType\Anschrift $anschrift = null): self
    {
        $this->Anschrift = $anschrift;
        
        return $this;
    }
    /**
     * Get KundennummerVU value
     * @return string|null
     */
    public function getKundennummerVU(): ?string
    {
        return $this->KundennummerVU;
    }
    /**
     * Set KundennummerVU value
     * @param string $kundennummerVU
     * @return \THAG\XKfz\StructType\Versicherungsnehmer
     */
    public function setKundennummerVU(?string $kundennummerVU = null): self
    {
        $this->KundennummerVU = $kundennummerVU;
        
        return $this;
    }
    /**
     * Get KundennummerVM value
     * @return string|null
     */
    public function getKundennummerVM(): ?string
    {
        return $this->KundennummerVM;
    }
    /**
     * Set KundennummerVM value
     * @param string $kundennummerVM
     * @return \THAG\XKfz\StructType\Versicherungsnehmer
     */
    public function setKundennummerVM(?string $kundennummerVM = null): self
    {
        $this->KundennummerVM = $kundennummerVM;
        
        return $this;
    }
}

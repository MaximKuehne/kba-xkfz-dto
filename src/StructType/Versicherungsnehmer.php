<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Versicherungsnehmer StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Versicherungsnehmer extends AbstractStructBase
{
    /**
     * The NatuerlichePerson
     */
    public ?\THAG\XKfz\StructType\NatuerlichePerson $NatuerlichePerson = null;

    /**
     * The JuristischePerson
     */
    public ?\THAG\XKfz\StructType\JuristischePerson $JuristischePerson = null;

    /**
     * The Vereinigung
     */
    public ?\THAG\XKfz\StructType\Vereinigung $Vereinigung = null;

    /**
     * The Anschrift
     */
    public ?\THAG\XKfz\StructType\Anschrift $Anschrift = null;

    /**
     * The KundennummerVU
     */
    public ?string $KundennummerVU = null;

    /**
     * The KundennummerVM
     */
    public ?string $KundennummerVM = null;

    /**
     * Constructor method for Versicherungsnehmer
     *
     * @uses Versicherungsnehmer::setNatuerlichePerson()
     * @uses Versicherungsnehmer::setJuristischePerson()
     * @uses Versicherungsnehmer::setVereinigung()
     * @uses Versicherungsnehmer::setAnschrift()
     * @uses Versicherungsnehmer::setKundennummerVU()
     * @uses Versicherungsnehmer::setKundennummerVM()
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
     */
    public function getNatuerlichePerson(): ?\THAG\XKfz\StructType\NatuerlichePerson
    {
        return $this->NatuerlichePerson;
    }

    /**
     * Set NatuerlichePerson value
     */
    public function setNatuerlichePerson(?\THAG\XKfz\StructType\NatuerlichePerson $natuerlichePerson = null): self
    {
        $this->NatuerlichePerson = $natuerlichePerson;

        return $this;
    }

    /**
     * Get JuristischePerson value
     */
    public function getJuristischePerson(): ?\THAG\XKfz\StructType\JuristischePerson
    {
        return $this->JuristischePerson;
    }

    /**
     * Set JuristischePerson value
     */
    public function setJuristischePerson(?\THAG\XKfz\StructType\JuristischePerson $juristischePerson = null): self
    {
        $this->JuristischePerson = $juristischePerson;

        return $this;
    }

    /**
     * Get Vereinigung value
     */
    public function getVereinigung(): ?\THAG\XKfz\StructType\Vereinigung
    {
        return $this->Vereinigung;
    }

    /**
     * Set Vereinigung value
     */
    public function setVereinigung(?\THAG\XKfz\StructType\Vereinigung $vereinigung = null): self
    {
        $this->Vereinigung = $vereinigung;

        return $this;
    }

    /**
     * Get Anschrift value
     */
    public function getAnschrift(): ?\THAG\XKfz\StructType\Anschrift
    {
        return $this->Anschrift;
    }

    /**
     * Set Anschrift value
     */
    public function setAnschrift(?\THAG\XKfz\StructType\Anschrift $anschrift = null): self
    {
        $this->Anschrift = $anschrift;

        return $this;
    }

    /**
     * Get KundennummerVU value
     */
    public function getKundennummerVU(): ?string
    {
        return $this->KundennummerVU;
    }

    /**
     * Set KundennummerVU value
     */
    public function setKundennummerVU(?string $kundennummerVU = null): self
    {
        $this->KundennummerVU = $kundennummerVU;

        return $this;
    }

    /**
     * Get KundennummerVM value
     */
    public function getKundennummerVM(): ?string
    {
        return $this->KundennummerVM;
    }

    /**
     * Set KundennummerVM value
     */
    public function setKundennummerVM(?string $kundennummerVM = null): self
    {
        $this->KundennummerVM = $kundennummerVM;

        return $this;
    }
}

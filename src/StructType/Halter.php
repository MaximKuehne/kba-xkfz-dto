<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Halter StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Halter extends AbstractStructBase
{
    /**
     * The HalterAbweichendVonVersicherungsnehmer
     */
    public ?string $HalterAbweichendVonVersicherungsnehmer = null;

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
     * Constructor method for Halter
     *
     * @uses Halter::setHalterAbweichendVonVersicherungsnehmer()
     * @uses Halter::setNatuerlichePerson()
     * @uses Halter::setJuristischePerson()
     * @uses Halter::setVereinigung()
     * @uses Halter::setAnschrift()
     */
    public function __construct(?string $halterAbweichendVonVersicherungsnehmer = null, ?\THAG\XKfz\StructType\NatuerlichePerson $natuerlichePerson = null, ?\THAG\XKfz\StructType\JuristischePerson $juristischePerson = null, ?\THAG\XKfz\StructType\Vereinigung $vereinigung = null, ?\THAG\XKfz\StructType\Anschrift $anschrift = null)
    {
        $this
            ->setHalterAbweichendVonVersicherungsnehmer($halterAbweichendVonVersicherungsnehmer)
            ->setNatuerlichePerson($natuerlichePerson)
            ->setJuristischePerson($juristischePerson)
            ->setVereinigung($vereinigung)
            ->setAnschrift($anschrift);
    }

    /**
     * Get HalterAbweichendVonVersicherungsnehmer value
     */
    public function getHalterAbweichendVonVersicherungsnehmer(): ?string
    {
        return $this->HalterAbweichendVonVersicherungsnehmer;
    }

    /**
     * Set HalterAbweichendVonVersicherungsnehmer value
     */
    public function setHalterAbweichendVonVersicherungsnehmer(?string $halterAbweichendVonVersicherungsnehmer = null): self
    {
        $this->HalterAbweichendVonVersicherungsnehmer = $halterAbweichendVonVersicherungsnehmer;

        return $this;
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
}

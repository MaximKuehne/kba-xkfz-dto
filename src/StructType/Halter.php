<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Halter StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Halter extends AbstractStructBase
{
    /**
     * The HalterAbweichendVonVersicherungsnehmer
     * @var string|null
     */
    public ?string $HalterAbweichendVonVersicherungsnehmer = null;
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
     * Constructor method for Halter
     * @uses Halter::setHalterAbweichendVonVersicherungsnehmer()
     * @uses Halter::setNatuerlichePerson()
     * @uses Halter::setJuristischePerson()
     * @uses Halter::setVereinigung()
     * @uses Halter::setAnschrift()
     * @param string $halterAbweichendVonVersicherungsnehmer
     * @param \THAG\XKfz\StructType\NatuerlichePerson $natuerlichePerson
     * @param \THAG\XKfz\StructType\JuristischePerson $juristischePerson
     * @param \THAG\XKfz\StructType\Vereinigung $vereinigung
     * @param \THAG\XKfz\StructType\Anschrift $anschrift
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
     * @return string|null
     */
    public function getHalterAbweichendVonVersicherungsnehmer(): ?string
    {
        return $this->HalterAbweichendVonVersicherungsnehmer;
    }
    /**
     * Set HalterAbweichendVonVersicherungsnehmer value
     * @param string $halterAbweichendVonVersicherungsnehmer
     * @return \THAG\XKfz\StructType\Halter
     */
    public function setHalterAbweichendVonVersicherungsnehmer(?string $halterAbweichendVonVersicherungsnehmer = null): self
    {
        $this->HalterAbweichendVonVersicherungsnehmer = $halterAbweichendVonVersicherungsnehmer;
        
        return $this;
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
     * @return \THAG\XKfz\StructType\Halter
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
     * @return \THAG\XKfz\StructType\Halter
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
     * @return \THAG\XKfz\StructType\Halter
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
     * @return \THAG\XKfz\StructType\Halter
     */
    public function setAnschrift(?\THAG\XKfz\StructType\Anschrift $anschrift = null): self
    {
        $this->Anschrift = $anschrift;
        
        return $this;
    }
}

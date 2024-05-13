<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UngebundenerVermittler StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class UngebundenerVermittler extends AbstractStructBase
{
    /**
     * The GDVVermittlernummer
     * @var string|null
     */
    public ?string $GDVVermittlernummer = null;
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
     * The Anschrift
     * @var \THAG\XKfz\StructType\Anschrift|null
     */
    public ?\THAG\XKfz\StructType\Anschrift $Anschrift = null;
    /**
     * The Kontaktdaten
     * @var \THAG\XKfz\StructType\Kontaktdaten|null
     */
    public ?\THAG\XKfz\StructType\Kontaktdaten $Kontaktdaten = null;
    /**
     * Constructor method for UngebundenerVermittler
     * @uses UngebundenerVermittler::setGDVVermittlernummer()
     * @uses UngebundenerVermittler::setNatuerlichePerson()
     * @uses UngebundenerVermittler::setJuristischePerson()
     * @uses UngebundenerVermittler::setAnschrift()
     * @uses UngebundenerVermittler::setKontaktdaten()
     * @param string $gDVVermittlernummer
     * @param \THAG\XKfz\StructType\NatuerlichePerson $natuerlichePerson
     * @param \THAG\XKfz\StructType\JuristischePerson $juristischePerson
     * @param \THAG\XKfz\StructType\Anschrift $anschrift
     * @param \THAG\XKfz\StructType\Kontaktdaten $kontaktdaten
     */
    public function __construct(?string $gDVVermittlernummer = null, ?\THAG\XKfz\StructType\NatuerlichePerson $natuerlichePerson = null, ?\THAG\XKfz\StructType\JuristischePerson $juristischePerson = null, ?\THAG\XKfz\StructType\Anschrift $anschrift = null, ?\THAG\XKfz\StructType\Kontaktdaten $kontaktdaten = null)
    {
        $this
            ->setGDVVermittlernummer($gDVVermittlernummer)
            ->setNatuerlichePerson($natuerlichePerson)
            ->setJuristischePerson($juristischePerson)
            ->setAnschrift($anschrift)
            ->setKontaktdaten($kontaktdaten);
    }
    /**
     * Get GDVVermittlernummer value
     * @return string|null
     */
    public function getGDVVermittlernummer(): ?string
    {
        return $this->GDVVermittlernummer;
    }
    /**
     * Set GDVVermittlernummer value
     * @param string $gDVVermittlernummer
     * @return \THAG\XKfz\StructType\UngebundenerVermittler
     */
    public function setGDVVermittlernummer(?string $gDVVermittlernummer = null): self
    {
        $this->GDVVermittlernummer = $gDVVermittlernummer;
        
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
     * @return \THAG\XKfz\StructType\UngebundenerVermittler
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
     * @return \THAG\XKfz\StructType\UngebundenerVermittler
     */
    public function setJuristischePerson(?\THAG\XKfz\StructType\JuristischePerson $juristischePerson = null): self
    {
        $this->JuristischePerson = $juristischePerson;
        
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
     * @return \THAG\XKfz\StructType\UngebundenerVermittler
     */
    public function setAnschrift(?\THAG\XKfz\StructType\Anschrift $anschrift = null): self
    {
        $this->Anschrift = $anschrift;
        
        return $this;
    }
    /**
     * Get Kontaktdaten value
     * @return \THAG\XKfz\StructType\Kontaktdaten|null
     */
    public function getKontaktdaten(): ?\THAG\XKfz\StructType\Kontaktdaten
    {
        return $this->Kontaktdaten;
    }
    /**
     * Set Kontaktdaten value
     * @param \THAG\XKfz\StructType\Kontaktdaten $kontaktdaten
     * @return \THAG\XKfz\StructType\UngebundenerVermittler
     */
    public function setKontaktdaten(?\THAG\XKfz\StructType\Kontaktdaten $kontaktdaten = null): self
    {
        $this->Kontaktdaten = $kontaktdaten;
        
        return $this;
    }
}

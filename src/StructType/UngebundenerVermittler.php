<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UngebundenerVermittler StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class UngebundenerVermittler extends AbstractStructBase
{
    /**
     * The GDVVermittlernummer
     */
    public ?string $GDVVermittlernummer = null;

    /**
     * The NatuerlichePerson
     */
    public ?\THAG\XKfz\StructType\NatuerlichePerson $NatuerlichePerson = null;

    /**
     * The JuristischePerson
     */
    public ?\THAG\XKfz\StructType\JuristischePerson $JuristischePerson = null;

    /**
     * The Anschrift
     */
    public ?\THAG\XKfz\StructType\Anschrift $Anschrift = null;

    /**
     * The Kontaktdaten
     */
    public ?\THAG\XKfz\StructType\Kontaktdaten $Kontaktdaten = null;

    /**
     * Constructor method for UngebundenerVermittler
     *
     * @uses UngebundenerVermittler::setGDVVermittlernummer()
     * @uses UngebundenerVermittler::setNatuerlichePerson()
     * @uses UngebundenerVermittler::setJuristischePerson()
     * @uses UngebundenerVermittler::setAnschrift()
     * @uses UngebundenerVermittler::setKontaktdaten()
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
     */
    public function getGDVVermittlernummer(): ?string
    {
        return $this->GDVVermittlernummer;
    }

    /**
     * Set GDVVermittlernummer value
     */
    public function setGDVVermittlernummer(?string $gDVVermittlernummer = null): self
    {
        $this->GDVVermittlernummer = $gDVVermittlernummer;

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
     * Get Kontaktdaten value
     */
    public function getKontaktdaten(): ?\THAG\XKfz\StructType\Kontaktdaten
    {
        return $this->Kontaktdaten;
    }

    /**
     * Set Kontaktdaten value
     */
    public function setKontaktdaten(?\THAG\XKfz\StructType\Kontaktdaten $kontaktdaten = null): self
    {
        $this->Kontaktdaten = $kontaktdaten;

        return $this;
    }
}

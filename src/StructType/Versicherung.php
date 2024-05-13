<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Versicherung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Versicherung extends AbstractStructBase
{
    /**
     * The Unternehmensart
     */
    public ?string $Unternehmensart = null;

    /**
     * The Versicherungsunternehmensnummer
     */
    public ?string $Versicherungsunternehmensnummer = null;

    /**
     * The Name1
     */
    public ?string $Name1 = null;

    /**
     * The Name2
     */
    public ?string $Name2 = null;

    /**
     * The Name3
     */
    public ?string $Name3 = null;

    /**
     * The Name4
     */
    public ?string $Name4 = null;

    /**
     * The GeschaeftsstelleVersicherung
     */
    public ?string $GeschaeftsstelleVersicherung = null;

    /**
     * The AgenturVersicherung
     */
    public ?string $AgenturVersicherung = null;

    /**
     * The DatumVersicherungsbeginn
     */
    public ?string $DatumVersicherungsbeginn = null;

    /**
     * The Versicherungsscheinnummer
     */
    public ?string $Versicherungsscheinnummer = null;

    /**
     * The InterneVermerkeVersicherung
     */
    public ?string $InterneVermerkeVersicherung = null;

    /**
     * Constructor method for Versicherung
     *
     * @uses Versicherung::setUnternehmensart()
     * @uses Versicherung::setVersicherungsunternehmensnummer()
     * @uses Versicherung::setName1()
     * @uses Versicherung::setName2()
     * @uses Versicherung::setName3()
     * @uses Versicherung::setName4()
     * @uses Versicherung::setGeschaeftsstelleVersicherung()
     * @uses Versicherung::setAgenturVersicherung()
     * @uses Versicherung::setDatumVersicherungsbeginn()
     * @uses Versicherung::setVersicherungsscheinnummer()
     * @uses Versicherung::setInterneVermerkeVersicherung()
     */
    public function __construct(?string $unternehmensart = null, ?string $versicherungsunternehmensnummer = null, ?string $name1 = null, ?string $name2 = null, ?string $name3 = null, ?string $name4 = null, ?string $geschaeftsstelleVersicherung = null, ?string $agenturVersicherung = null, ?string $datumVersicherungsbeginn = null, ?string $versicherungsscheinnummer = null, ?string $interneVermerkeVersicherung = null)
    {
        $this
            ->setUnternehmensart($unternehmensart)
            ->setVersicherungsunternehmensnummer($versicherungsunternehmensnummer)
            ->setName1($name1)
            ->setName2($name2)
            ->setName3($name3)
            ->setName4($name4)
            ->setGeschaeftsstelleVersicherung($geschaeftsstelleVersicherung)
            ->setAgenturVersicherung($agenturVersicherung)
            ->setDatumVersicherungsbeginn($datumVersicherungsbeginn)
            ->setVersicherungsscheinnummer($versicherungsscheinnummer)
            ->setInterneVermerkeVersicherung($interneVermerkeVersicherung);
    }

    /**
     * Get Unternehmensart value
     */
    public function getUnternehmensart(): ?string
    {
        return $this->Unternehmensart;
    }

    /**
     * Set Unternehmensart value
     */
    public function setUnternehmensart(?string $unternehmensart = null): self
    {
        $this->Unternehmensart = $unternehmensart;

        return $this;
    }

    /**
     * Get Versicherungsunternehmensnummer value
     */
    public function getVersicherungsunternehmensnummer(): ?string
    {
        return $this->Versicherungsunternehmensnummer;
    }

    /**
     * Set Versicherungsunternehmensnummer value
     */
    public function setVersicherungsunternehmensnummer(?string $versicherungsunternehmensnummer = null): self
    {
        $this->Versicherungsunternehmensnummer = $versicherungsunternehmensnummer;

        return $this;
    }

    /**
     * Get Name1 value
     */
    public function getName1(): ?string
    {
        return $this->Name1;
    }

    /**
     * Set Name1 value
     */
    public function setName1(?string $name1 = null): self
    {
        $this->Name1 = $name1;

        return $this;
    }

    /**
     * Get Name2 value
     */
    public function getName2(): ?string
    {
        return $this->Name2;
    }

    /**
     * Set Name2 value
     */
    public function setName2(?string $name2 = null): self
    {
        $this->Name2 = $name2;

        return $this;
    }

    /**
     * Get Name3 value
     */
    public function getName3(): ?string
    {
        return $this->Name3;
    }

    /**
     * Set Name3 value
     */
    public function setName3(?string $name3 = null): self
    {
        $this->Name3 = $name3;

        return $this;
    }

    /**
     * Get Name4 value
     */
    public function getName4(): ?string
    {
        return $this->Name4;
    }

    /**
     * Set Name4 value
     */
    public function setName4(?string $name4 = null): self
    {
        $this->Name4 = $name4;

        return $this;
    }

    /**
     * Get GeschaeftsstelleVersicherung value
     */
    public function getGeschaeftsstelleVersicherung(): ?string
    {
        return $this->GeschaeftsstelleVersicherung;
    }

    /**
     * Set GeschaeftsstelleVersicherung value
     */
    public function setGeschaeftsstelleVersicherung(?string $geschaeftsstelleVersicherung = null): self
    {
        $this->GeschaeftsstelleVersicherung = $geschaeftsstelleVersicherung;

        return $this;
    }

    /**
     * Get AgenturVersicherung value
     */
    public function getAgenturVersicherung(): ?string
    {
        return $this->AgenturVersicherung;
    }

    /**
     * Set AgenturVersicherung value
     */
    public function setAgenturVersicherung(?string $agenturVersicherung = null): self
    {
        $this->AgenturVersicherung = $agenturVersicherung;

        return $this;
    }

    /**
     * Get DatumVersicherungsbeginn value
     */
    public function getDatumVersicherungsbeginn(): ?string
    {
        return $this->DatumVersicherungsbeginn;
    }

    /**
     * Set DatumVersicherungsbeginn value
     */
    public function setDatumVersicherungsbeginn(?string $datumVersicherungsbeginn = null): self
    {
        $this->DatumVersicherungsbeginn = $datumVersicherungsbeginn;

        return $this;
    }

    /**
     * Get Versicherungsscheinnummer value
     */
    public function getVersicherungsscheinnummer(): ?string
    {
        return $this->Versicherungsscheinnummer;
    }

    /**
     * Set Versicherungsscheinnummer value
     */
    public function setVersicherungsscheinnummer(?string $versicherungsscheinnummer = null): self
    {
        $this->Versicherungsscheinnummer = $versicherungsscheinnummer;

        return $this;
    }

    /**
     * Get InterneVermerkeVersicherung value
     */
    public function getInterneVermerkeVersicherung(): ?string
    {
        return $this->InterneVermerkeVersicherung;
    }

    /**
     * Set InterneVermerkeVersicherung value
     */
    public function setInterneVermerkeVersicherung(?string $interneVermerkeVersicherung = null): self
    {
        $this->InterneVermerkeVersicherung = $interneVermerkeVersicherung;

        return $this;
    }
}

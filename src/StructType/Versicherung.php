<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Versicherung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Versicherung extends AbstractStructBase
{
    /**
     * The Unternehmensart
     * @var string|null
     */
    public ?string $Unternehmensart = null;
    /**
     * The Versicherungsunternehmensnummer
     * @var string|null
     */
    public ?string $Versicherungsunternehmensnummer = null;
    /**
     * The Name1
     * @var string|null
     */
    public ?string $Name1 = null;
    /**
     * The Name2
     * @var string|null
     */
    public ?string $Name2 = null;
    /**
     * The Name3
     * @var string|null
     */
    public ?string $Name3 = null;
    /**
     * The Name4
     * @var string|null
     */
    public ?string $Name4 = null;
    /**
     * The GeschaeftsstelleVersicherung
     * @var string|null
     */
    public ?string $GeschaeftsstelleVersicherung = null;
    /**
     * The AgenturVersicherung
     * @var string|null
     */
    public ?string $AgenturVersicherung = null;
    /**
     * The DatumVersicherungsbeginn
     * @var string|null
     */
    public ?string $DatumVersicherungsbeginn = null;
    /**
     * The Versicherungsscheinnummer
     * @var string|null
     */
    public ?string $Versicherungsscheinnummer = null;
    /**
     * The InterneVermerkeVersicherung
     * @var string|null
     */
    public ?string $InterneVermerkeVersicherung = null;
    /**
     * Constructor method for Versicherung
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
     * @param string $unternehmensart
     * @param string $versicherungsunternehmensnummer
     * @param string $name1
     * @param string $name2
     * @param string $name3
     * @param string $name4
     * @param string $geschaeftsstelleVersicherung
     * @param string $agenturVersicherung
     * @param string $datumVersicherungsbeginn
     * @param string $versicherungsscheinnummer
     * @param string $interneVermerkeVersicherung
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
     * @return string|null
     */
    public function getUnternehmensart(): ?string
    {
        return $this->Unternehmensart;
    }
    /**
     * Set Unternehmensart value
     * @param string $unternehmensart
     * @return \THAG\XKfz\StructType\Versicherung
     */
    public function setUnternehmensart(?string $unternehmensart = null): self
    {
        $this->Unternehmensart = $unternehmensart;
        
        return $this;
    }
    /**
     * Get Versicherungsunternehmensnummer value
     * @return string|null
     */
    public function getVersicherungsunternehmensnummer(): ?string
    {
        return $this->Versicherungsunternehmensnummer;
    }
    /**
     * Set Versicherungsunternehmensnummer value
     * @param string $versicherungsunternehmensnummer
     * @return \THAG\XKfz\StructType\Versicherung
     */
    public function setVersicherungsunternehmensnummer(?string $versicherungsunternehmensnummer = null): self
    {
        $this->Versicherungsunternehmensnummer = $versicherungsunternehmensnummer;
        
        return $this;
    }
    /**
     * Get Name1 value
     * @return string|null
     */
    public function getName1(): ?string
    {
        return $this->Name1;
    }
    /**
     * Set Name1 value
     * @param string $name1
     * @return \THAG\XKfz\StructType\Versicherung
     */
    public function setName1(?string $name1 = null): self
    {
        $this->Name1 = $name1;
        
        return $this;
    }
    /**
     * Get Name2 value
     * @return string|null
     */
    public function getName2(): ?string
    {
        return $this->Name2;
    }
    /**
     * Set Name2 value
     * @param string $name2
     * @return \THAG\XKfz\StructType\Versicherung
     */
    public function setName2(?string $name2 = null): self
    {
        $this->Name2 = $name2;
        
        return $this;
    }
    /**
     * Get Name3 value
     * @return string|null
     */
    public function getName3(): ?string
    {
        return $this->Name3;
    }
    /**
     * Set Name3 value
     * @param string $name3
     * @return \THAG\XKfz\StructType\Versicherung
     */
    public function setName3(?string $name3 = null): self
    {
        $this->Name3 = $name3;
        
        return $this;
    }
    /**
     * Get Name4 value
     * @return string|null
     */
    public function getName4(): ?string
    {
        return $this->Name4;
    }
    /**
     * Set Name4 value
     * @param string $name4
     * @return \THAG\XKfz\StructType\Versicherung
     */
    public function setName4(?string $name4 = null): self
    {
        $this->Name4 = $name4;
        
        return $this;
    }
    /**
     * Get GeschaeftsstelleVersicherung value
     * @return string|null
     */
    public function getGeschaeftsstelleVersicherung(): ?string
    {
        return $this->GeschaeftsstelleVersicherung;
    }
    /**
     * Set GeschaeftsstelleVersicherung value
     * @param string $geschaeftsstelleVersicherung
     * @return \THAG\XKfz\StructType\Versicherung
     */
    public function setGeschaeftsstelleVersicherung(?string $geschaeftsstelleVersicherung = null): self
    {
        $this->GeschaeftsstelleVersicherung = $geschaeftsstelleVersicherung;
        
        return $this;
    }
    /**
     * Get AgenturVersicherung value
     * @return string|null
     */
    public function getAgenturVersicherung(): ?string
    {
        return $this->AgenturVersicherung;
    }
    /**
     * Set AgenturVersicherung value
     * @param string $agenturVersicherung
     * @return \THAG\XKfz\StructType\Versicherung
     */
    public function setAgenturVersicherung(?string $agenturVersicherung = null): self
    {
        $this->AgenturVersicherung = $agenturVersicherung;
        
        return $this;
    }
    /**
     * Get DatumVersicherungsbeginn value
     * @return string|null
     */
    public function getDatumVersicherungsbeginn(): ?string
    {
        return $this->DatumVersicherungsbeginn;
    }
    /**
     * Set DatumVersicherungsbeginn value
     * @param string $datumVersicherungsbeginn
     * @return \THAG\XKfz\StructType\Versicherung
     */
    public function setDatumVersicherungsbeginn(?string $datumVersicherungsbeginn = null): self
    {
        $this->DatumVersicherungsbeginn = $datumVersicherungsbeginn;
        
        return $this;
    }
    /**
     * Get Versicherungsscheinnummer value
     * @return string|null
     */
    public function getVersicherungsscheinnummer(): ?string
    {
        return $this->Versicherungsscheinnummer;
    }
    /**
     * Set Versicherungsscheinnummer value
     * @param string $versicherungsscheinnummer
     * @return \THAG\XKfz\StructType\Versicherung
     */
    public function setVersicherungsscheinnummer(?string $versicherungsscheinnummer = null): self
    {
        $this->Versicherungsscheinnummer = $versicherungsscheinnummer;
        
        return $this;
    }
    /**
     * Get InterneVermerkeVersicherung value
     * @return string|null
     */
    public function getInterneVermerkeVersicherung(): ?string
    {
        return $this->InterneVermerkeVersicherung;
    }
    /**
     * Set InterneVermerkeVersicherung value
     * @param string $interneVermerkeVersicherung
     * @return \THAG\XKfz\StructType\Versicherung
     */
    public function setInterneVermerkeVersicherung(?string $interneVermerkeVersicherung = null): self
    {
        $this->InterneVermerkeVersicherung = $interneVermerkeVersicherung;
        
        return $this;
    }
}

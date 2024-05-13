<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NeueVb StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class NeueVb extends AbstractStructBase
{
    /**
     * The Versicherungsunternehmensnummer
     * @var string|null
     */
    public ?string $Versicherungsunternehmensnummer = null;
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
     * The Versicherungsscheinnummer
     * @var string|null
     */
    public ?string $Versicherungsscheinnummer = null;
    /**
     * The DatumVersicherungsbeginn
     * @var string|null
     */
    public ?string $DatumVersicherungsbeginn = null;
    /**
     * Constructor method for NeueVb
     * @uses NeueVb::setVersicherungsunternehmensnummer()
     * @uses NeueVb::setGeschaeftsstelleVersicherung()
     * @uses NeueVb::setAgenturVersicherung()
     * @uses NeueVb::setVersicherungsscheinnummer()
     * @uses NeueVb::setDatumVersicherungsbeginn()
     * @param string $versicherungsunternehmensnummer
     * @param string $geschaeftsstelleVersicherung
     * @param string $agenturVersicherung
     * @param string $versicherungsscheinnummer
     * @param string $datumVersicherungsbeginn
     */
    public function __construct(?string $versicherungsunternehmensnummer = null, ?string $geschaeftsstelleVersicherung = null, ?string $agenturVersicherung = null, ?string $versicherungsscheinnummer = null, ?string $datumVersicherungsbeginn = null)
    {
        $this
            ->setVersicherungsunternehmensnummer($versicherungsunternehmensnummer)
            ->setGeschaeftsstelleVersicherung($geschaeftsstelleVersicherung)
            ->setAgenturVersicherung($agenturVersicherung)
            ->setVersicherungsscheinnummer($versicherungsscheinnummer)
            ->setDatumVersicherungsbeginn($datumVersicherungsbeginn);
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
     * @return \THAG\XKfz\StructType\NeueVb
     */
    public function setVersicherungsunternehmensnummer(?string $versicherungsunternehmensnummer = null): self
    {
        $this->Versicherungsunternehmensnummer = $versicherungsunternehmensnummer;
        
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
     * @return \THAG\XKfz\StructType\NeueVb
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
     * @return \THAG\XKfz\StructType\NeueVb
     */
    public function setAgenturVersicherung(?string $agenturVersicherung = null): self
    {
        $this->AgenturVersicherung = $agenturVersicherung;
        
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
     * @return \THAG\XKfz\StructType\NeueVb
     */
    public function setVersicherungsscheinnummer(?string $versicherungsscheinnummer = null): self
    {
        $this->Versicherungsscheinnummer = $versicherungsscheinnummer;
        
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
     * @return \THAG\XKfz\StructType\NeueVb
     */
    public function setDatumVersicherungsbeginn(?string $datumVersicherungsbeginn = null): self
    {
        $this->DatumVersicherungsbeginn = $datumVersicherungsbeginn;
        
        return $this;
    }
}

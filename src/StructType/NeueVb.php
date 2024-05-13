<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NeueVb StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class NeueVb extends AbstractStructBase
{
    /**
     * The Versicherungsunternehmensnummer
     */
    public ?string $Versicherungsunternehmensnummer = null;

    /**
     * The GeschaeftsstelleVersicherung
     */
    public ?string $GeschaeftsstelleVersicherung = null;

    /**
     * The AgenturVersicherung
     */
    public ?string $AgenturVersicherung = null;

    /**
     * The Versicherungsscheinnummer
     */
    public ?string $Versicherungsscheinnummer = null;

    /**
     * The DatumVersicherungsbeginn
     */
    public ?string $DatumVersicherungsbeginn = null;

    /**
     * Constructor method for NeueVb
     *
     * @uses NeueVb::setVersicherungsunternehmensnummer()
     * @uses NeueVb::setGeschaeftsstelleVersicherung()
     * @uses NeueVb::setAgenturVersicherung()
     * @uses NeueVb::setVersicherungsscheinnummer()
     * @uses NeueVb::setDatumVersicherungsbeginn()
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
}

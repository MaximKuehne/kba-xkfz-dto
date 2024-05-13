<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for eVBDaten StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class EVBDaten extends AbstractStructBase
{
    /**
     * The Anfragenummer
     */
    public ?string $Anfragenummer = null;

    /**
     * The VorgangsnummerVU
     */
    public ?string $VorgangsnummerVU = null;

    /**
     * The VorgangsnummerVM
     */
    public ?string $VorgangsnummerVM = null;

    /**
     * The Versicherung
     */
    public ?\THAG\XKfz\StructType\Versicherung $Versicherung = null;

    /**
     * The Versicherungsnehmer
     */
    public ?\THAG\XKfz\StructType\Versicherungsnehmer $Versicherungsnehmer = null;

    /**
     * The Halter
     */
    public ?\THAG\XKfz\StructType\Halter $Halter = null;

    /**
     * The Fahrzeug
     */
    public ?\THAG\XKfz\StructType\Fahrzeug $Fahrzeug = null;

    /**
     * The Kennzeichen
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;

    /**
     * The Behoerde
     */
    public ?\THAG\XKfz\StructType\Behoerde $Behoerde = null;

    /**
     * Constructor method for eVBDaten
     *
     * @uses EVBDaten::setAnfragenummer()
     * @uses EVBDaten::setVorgangsnummerVU()
     * @uses EVBDaten::setVorgangsnummerVM()
     * @uses EVBDaten::setVersicherung()
     * @uses EVBDaten::setVersicherungsnehmer()
     * @uses EVBDaten::setHalter()
     * @uses EVBDaten::setFahrzeug()
     * @uses EVBDaten::setKennzeichen()
     * @uses EVBDaten::setBehoerde()
     */
    public function __construct(?string $anfragenummer = null, ?string $vorgangsnummerVU = null, ?string $vorgangsnummerVM = null, ?\THAG\XKfz\StructType\Versicherung $versicherung = null, ?\THAG\XKfz\StructType\Versicherungsnehmer $versicherungsnehmer = null, ?\THAG\XKfz\StructType\Halter $halter = null, ?\THAG\XKfz\StructType\Fahrzeug $fahrzeug = null, ?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null, ?\THAG\XKfz\StructType\Behoerde $behoerde = null)
    {
        $this
            ->setAnfragenummer($anfragenummer)
            ->setVorgangsnummerVU($vorgangsnummerVU)
            ->setVorgangsnummerVM($vorgangsnummerVM)
            ->setVersicherung($versicherung)
            ->setVersicherungsnehmer($versicherungsnehmer)
            ->setHalter($halter)
            ->setFahrzeug($fahrzeug)
            ->setKennzeichen($kennzeichen)
            ->setBehoerde($behoerde);
    }

    /**
     * Get Anfragenummer value
     */
    public function getAnfragenummer(): ?string
    {
        return $this->Anfragenummer;
    }

    /**
     * Set Anfragenummer value
     */
    public function setAnfragenummer(?string $anfragenummer = null): self
    {
        $this->Anfragenummer = $anfragenummer;

        return $this;
    }

    /**
     * Get VorgangsnummerVU value
     */
    public function getVorgangsnummerVU(): ?string
    {
        return $this->VorgangsnummerVU;
    }

    /**
     * Set VorgangsnummerVU value
     */
    public function setVorgangsnummerVU(?string $vorgangsnummerVU = null): self
    {
        $this->VorgangsnummerVU = $vorgangsnummerVU;

        return $this;
    }

    /**
     * Get VorgangsnummerVM value
     */
    public function getVorgangsnummerVM(): ?string
    {
        return $this->VorgangsnummerVM;
    }

    /**
     * Set VorgangsnummerVM value
     */
    public function setVorgangsnummerVM(?string $vorgangsnummerVM = null): self
    {
        $this->VorgangsnummerVM = $vorgangsnummerVM;

        return $this;
    }

    /**
     * Get Versicherung value
     */
    public function getVersicherung(): ?\THAG\XKfz\StructType\Versicherung
    {
        return $this->Versicherung;
    }

    /**
     * Set Versicherung value
     */
    public function setVersicherung(?\THAG\XKfz\StructType\Versicherung $versicherung = null): self
    {
        $this->Versicherung = $versicherung;

        return $this;
    }

    /**
     * Get Versicherungsnehmer value
     */
    public function getVersicherungsnehmer(): ?\THAG\XKfz\StructType\Versicherungsnehmer
    {
        return $this->Versicherungsnehmer;
    }

    /**
     * Set Versicherungsnehmer value
     */
    public function setVersicherungsnehmer(?\THAG\XKfz\StructType\Versicherungsnehmer $versicherungsnehmer = null): self
    {
        $this->Versicherungsnehmer = $versicherungsnehmer;

        return $this;
    }

    /**
     * Get Halter value
     */
    public function getHalter(): ?\THAG\XKfz\StructType\Halter
    {
        return $this->Halter;
    }

    /**
     * Set Halter value
     */
    public function setHalter(?\THAG\XKfz\StructType\Halter $halter = null): self
    {
        $this->Halter = $halter;

        return $this;
    }

    /**
     * Get Fahrzeug value
     */
    public function getFahrzeug(): ?\THAG\XKfz\StructType\Fahrzeug
    {
        return $this->Fahrzeug;
    }

    /**
     * Set Fahrzeug value
     */
    public function setFahrzeug(?\THAG\XKfz\StructType\Fahrzeug $fahrzeug = null): self
    {
        $this->Fahrzeug = $fahrzeug;

        return $this;
    }

    /**
     * Get Kennzeichen value
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }

    /**
     * Set Kennzeichen value
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;

        return $this;
    }

    /**
     * Get Behoerde value
     */
    public function getBehoerde(): ?\THAG\XKfz\StructType\Behoerde
    {
        return $this->Behoerde;
    }

    /**
     * Set Behoerde value
     */
    public function setBehoerde(?\THAG\XKfz\StructType\Behoerde $behoerde = null): self
    {
        $this->Behoerde = $behoerde;

        return $this;
    }
}

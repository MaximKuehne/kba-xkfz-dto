<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for eVBDaten StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class EVBDaten extends AbstractStructBase
{
    /**
     * The Anfragenummer
     * @var string|null
     */
    public ?string $Anfragenummer = null;
    /**
     * The VorgangsnummerVU
     * @var string|null
     */
    public ?string $VorgangsnummerVU = null;
    /**
     * The VorgangsnummerVM
     * @var string|null
     */
    public ?string $VorgangsnummerVM = null;
    /**
     * The Versicherung
     * @var \THAG\XKfz\StructType\Versicherung|null
     */
    public ?\THAG\XKfz\StructType\Versicherung $Versicherung = null;
    /**
     * The Versicherungsnehmer
     * @var \THAG\XKfz\StructType\Versicherungsnehmer|null
     */
    public ?\THAG\XKfz\StructType\Versicherungsnehmer $Versicherungsnehmer = null;
    /**
     * The Halter
     * @var \THAG\XKfz\StructType\Halter|null
     */
    public ?\THAG\XKfz\StructType\Halter $Halter = null;
    /**
     * The Fahrzeug
     * @var \THAG\XKfz\StructType\Fahrzeug|null
     */
    public ?\THAG\XKfz\StructType\Fahrzeug $Fahrzeug = null;
    /**
     * The Kennzeichen
     * @var \THAG\XKfz\StructType\Kennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;
    /**
     * The Behoerde
     * @var \THAG\XKfz\StructType\Behoerde|null
     */
    public ?\THAG\XKfz\StructType\Behoerde $Behoerde = null;
    /**
     * Constructor method for eVBDaten
     * @uses EVBDaten::setAnfragenummer()
     * @uses EVBDaten::setVorgangsnummerVU()
     * @uses EVBDaten::setVorgangsnummerVM()
     * @uses EVBDaten::setVersicherung()
     * @uses EVBDaten::setVersicherungsnehmer()
     * @uses EVBDaten::setHalter()
     * @uses EVBDaten::setFahrzeug()
     * @uses EVBDaten::setKennzeichen()
     * @uses EVBDaten::setBehoerde()
     * @param string $anfragenummer
     * @param string $vorgangsnummerVU
     * @param string $vorgangsnummerVM
     * @param \THAG\XKfz\StructType\Versicherung $versicherung
     * @param \THAG\XKfz\StructType\Versicherungsnehmer $versicherungsnehmer
     * @param \THAG\XKfz\StructType\Halter $halter
     * @param \THAG\XKfz\StructType\Fahrzeug $fahrzeug
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @param \THAG\XKfz\StructType\Behoerde $behoerde
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
     * @return string|null
     */
    public function getAnfragenummer(): ?string
    {
        return $this->Anfragenummer;
    }
    /**
     * Set Anfragenummer value
     * @param string $anfragenummer
     * @return \THAG\XKfz\StructType\EVBDaten
     */
    public function setAnfragenummer(?string $anfragenummer = null): self
    {
        $this->Anfragenummer = $anfragenummer;
        
        return $this;
    }
    /**
     * Get VorgangsnummerVU value
     * @return string|null
     */
    public function getVorgangsnummerVU(): ?string
    {
        return $this->VorgangsnummerVU;
    }
    /**
     * Set VorgangsnummerVU value
     * @param string $vorgangsnummerVU
     * @return \THAG\XKfz\StructType\EVBDaten
     */
    public function setVorgangsnummerVU(?string $vorgangsnummerVU = null): self
    {
        $this->VorgangsnummerVU = $vorgangsnummerVU;
        
        return $this;
    }
    /**
     * Get VorgangsnummerVM value
     * @return string|null
     */
    public function getVorgangsnummerVM(): ?string
    {
        return $this->VorgangsnummerVM;
    }
    /**
     * Set VorgangsnummerVM value
     * @param string $vorgangsnummerVM
     * @return \THAG\XKfz\StructType\EVBDaten
     */
    public function setVorgangsnummerVM(?string $vorgangsnummerVM = null): self
    {
        $this->VorgangsnummerVM = $vorgangsnummerVM;
        
        return $this;
    }
    /**
     * Get Versicherung value
     * @return \THAG\XKfz\StructType\Versicherung|null
     */
    public function getVersicherung(): ?\THAG\XKfz\StructType\Versicherung
    {
        return $this->Versicherung;
    }
    /**
     * Set Versicherung value
     * @param \THAG\XKfz\StructType\Versicherung $versicherung
     * @return \THAG\XKfz\StructType\EVBDaten
     */
    public function setVersicherung(?\THAG\XKfz\StructType\Versicherung $versicherung = null): self
    {
        $this->Versicherung = $versicherung;
        
        return $this;
    }
    /**
     * Get Versicherungsnehmer value
     * @return \THAG\XKfz\StructType\Versicherungsnehmer|null
     */
    public function getVersicherungsnehmer(): ?\THAG\XKfz\StructType\Versicherungsnehmer
    {
        return $this->Versicherungsnehmer;
    }
    /**
     * Set Versicherungsnehmer value
     * @param \THAG\XKfz\StructType\Versicherungsnehmer $versicherungsnehmer
     * @return \THAG\XKfz\StructType\EVBDaten
     */
    public function setVersicherungsnehmer(?\THAG\XKfz\StructType\Versicherungsnehmer $versicherungsnehmer = null): self
    {
        $this->Versicherungsnehmer = $versicherungsnehmer;
        
        return $this;
    }
    /**
     * Get Halter value
     * @return \THAG\XKfz\StructType\Halter|null
     */
    public function getHalter(): ?\THAG\XKfz\StructType\Halter
    {
        return $this->Halter;
    }
    /**
     * Set Halter value
     * @param \THAG\XKfz\StructType\Halter $halter
     * @return \THAG\XKfz\StructType\EVBDaten
     */
    public function setHalter(?\THAG\XKfz\StructType\Halter $halter = null): self
    {
        $this->Halter = $halter;
        
        return $this;
    }
    /**
     * Get Fahrzeug value
     * @return \THAG\XKfz\StructType\Fahrzeug|null
     */
    public function getFahrzeug(): ?\THAG\XKfz\StructType\Fahrzeug
    {
        return $this->Fahrzeug;
    }
    /**
     * Set Fahrzeug value
     * @param \THAG\XKfz\StructType\Fahrzeug $fahrzeug
     * @return \THAG\XKfz\StructType\EVBDaten
     */
    public function setFahrzeug(?\THAG\XKfz\StructType\Fahrzeug $fahrzeug = null): self
    {
        $this->Fahrzeug = $fahrzeug;
        
        return $this;
    }
    /**
     * Get Kennzeichen value
     * @return \THAG\XKfz\StructType\Kennzeichen|null
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }
    /**
     * Set Kennzeichen value
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @return \THAG\XKfz\StructType\EVBDaten
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get Behoerde value
     * @return \THAG\XKfz\StructType\Behoerde|null
     */
    public function getBehoerde(): ?\THAG\XKfz\StructType\Behoerde
    {
        return $this->Behoerde;
    }
    /**
     * Set Behoerde value
     * @param \THAG\XKfz\StructType\Behoerde $behoerde
     * @return \THAG\XKfz\StructType\EVBDaten
     */
    public function setBehoerde(?\THAG\XKfz\StructType\Behoerde $behoerde = null): self
    {
        $this->Behoerde = $behoerde;
        
        return $this;
    }
}

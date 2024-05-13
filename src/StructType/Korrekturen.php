<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Korrekturen StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Korrekturen extends AbstractStructBase
{
    /**
     * The KorrekturGeschaeftsstelleVersicherung
     * @var string|null
     */
    public ?string $KorrekturGeschaeftsstelleVersicherung = null;
    /**
     * The KorrekturVersicherungsunternehmensnummer
     * @var string|null
     */
    public ?string $KorrekturVersicherungsunternehmensnummer = null;
    /**
     * The KorrekturFahrzeugidentifizierungsnummer
     * @var string|null
     */
    public ?string $KorrekturFahrzeugidentifizierungsnummer = null;
    /**
     * Constructor method for Korrekturen
     * @uses Korrekturen::setKorrekturGeschaeftsstelleVersicherung()
     * @uses Korrekturen::setKorrekturVersicherungsunternehmensnummer()
     * @uses Korrekturen::setKorrekturFahrzeugidentifizierungsnummer()
     * @param string $korrekturGeschaeftsstelleVersicherung
     * @param string $korrekturVersicherungsunternehmensnummer
     * @param string $korrekturFahrzeugidentifizierungsnummer
     */
    public function __construct(?string $korrekturGeschaeftsstelleVersicherung = null, ?string $korrekturVersicherungsunternehmensnummer = null, ?string $korrekturFahrzeugidentifizierungsnummer = null)
    {
        $this
            ->setKorrekturGeschaeftsstelleVersicherung($korrekturGeschaeftsstelleVersicherung)
            ->setKorrekturVersicherungsunternehmensnummer($korrekturVersicherungsunternehmensnummer)
            ->setKorrekturFahrzeugidentifizierungsnummer($korrekturFahrzeugidentifizierungsnummer);
    }
    /**
     * Get KorrekturGeschaeftsstelleVersicherung value
     * @return string|null
     */
    public function getKorrekturGeschaeftsstelleVersicherung(): ?string
    {
        return $this->KorrekturGeschaeftsstelleVersicherung;
    }
    /**
     * Set KorrekturGeschaeftsstelleVersicherung value
     * @param string $korrekturGeschaeftsstelleVersicherung
     * @return \THAG\XKfz\StructType\Korrekturen
     */
    public function setKorrekturGeschaeftsstelleVersicherung(?string $korrekturGeschaeftsstelleVersicherung = null): self
    {
        $this->KorrekturGeschaeftsstelleVersicherung = $korrekturGeschaeftsstelleVersicherung;
        
        return $this;
    }
    /**
     * Get KorrekturVersicherungsunternehmensnummer value
     * @return string|null
     */
    public function getKorrekturVersicherungsunternehmensnummer(): ?string
    {
        return $this->KorrekturVersicherungsunternehmensnummer;
    }
    /**
     * Set KorrekturVersicherungsunternehmensnummer value
     * @param string $korrekturVersicherungsunternehmensnummer
     * @return \THAG\XKfz\StructType\Korrekturen
     */
    public function setKorrekturVersicherungsunternehmensnummer(?string $korrekturVersicherungsunternehmensnummer = null): self
    {
        $this->KorrekturVersicherungsunternehmensnummer = $korrekturVersicherungsunternehmensnummer;
        
        return $this;
    }
    /**
     * Get KorrekturFahrzeugidentifizierungsnummer value
     * @return string|null
     */
    public function getKorrekturFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->KorrekturFahrzeugidentifizierungsnummer;
    }
    /**
     * Set KorrekturFahrzeugidentifizierungsnummer value
     * @param string $korrekturFahrzeugidentifizierungsnummer
     * @return \THAG\XKfz\StructType\Korrekturen
     */
    public function setKorrekturFahrzeugidentifizierungsnummer(?string $korrekturFahrzeugidentifizierungsnummer = null): self
    {
        $this->KorrekturFahrzeugidentifizierungsnummer = $korrekturFahrzeugidentifizierungsnummer;
        
        return $this;
    }
}

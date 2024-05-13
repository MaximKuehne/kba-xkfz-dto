<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Korrekturen StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Korrekturen extends AbstractStructBase
{
    /**
     * The KorrekturGeschaeftsstelleVersicherung
     */
    public ?string $KorrekturGeschaeftsstelleVersicherung = null;

    /**
     * The KorrekturVersicherungsunternehmensnummer
     */
    public ?string $KorrekturVersicherungsunternehmensnummer = null;

    /**
     * The KorrekturFahrzeugidentifizierungsnummer
     */
    public ?string $KorrekturFahrzeugidentifizierungsnummer = null;

    /**
     * Constructor method for Korrekturen
     *
     * @uses Korrekturen::setKorrekturGeschaeftsstelleVersicherung()
     * @uses Korrekturen::setKorrekturVersicherungsunternehmensnummer()
     * @uses Korrekturen::setKorrekturFahrzeugidentifizierungsnummer()
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
     */
    public function getKorrekturGeschaeftsstelleVersicherung(): ?string
    {
        return $this->KorrekturGeschaeftsstelleVersicherung;
    }

    /**
     * Set KorrekturGeschaeftsstelleVersicherung value
     */
    public function setKorrekturGeschaeftsstelleVersicherung(?string $korrekturGeschaeftsstelleVersicherung = null): self
    {
        $this->KorrekturGeschaeftsstelleVersicherung = $korrekturGeschaeftsstelleVersicherung;

        return $this;
    }

    /**
     * Get KorrekturVersicherungsunternehmensnummer value
     */
    public function getKorrekturVersicherungsunternehmensnummer(): ?string
    {
        return $this->KorrekturVersicherungsunternehmensnummer;
    }

    /**
     * Set KorrekturVersicherungsunternehmensnummer value
     */
    public function setKorrekturVersicherungsunternehmensnummer(?string $korrekturVersicherungsunternehmensnummer = null): self
    {
        $this->KorrekturVersicherungsunternehmensnummer = $korrekturVersicherungsunternehmensnummer;

        return $this;
    }

    /**
     * Get KorrekturFahrzeugidentifizierungsnummer value
     */
    public function getKorrekturFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->KorrekturFahrzeugidentifizierungsnummer;
    }

    /**
     * Set KorrekturFahrzeugidentifizierungsnummer value
     */
    public function setKorrekturFahrzeugidentifizierungsnummer(?string $korrekturFahrzeugidentifizierungsnummer = null): self
    {
        $this->KorrekturFahrzeugidentifizierungsnummer = $korrekturFahrzeugidentifizierungsnummer;

        return $this;
    }
}

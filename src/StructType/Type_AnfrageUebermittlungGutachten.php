<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AnfrageUebermittlungGutachten StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AnfrageUebermittlungGutachten extends AbstractStructBase
{
    /**
     * The gutachtennummer
     */
    public ?string $gutachtennummer = null;

    /**
     * The abrufendeBehoerde
     */
    public ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $abrufendeBehoerde = null;

    /**
     * The Fahrzeugidentifizierungsnummer
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;

    /**
     * The merkmalPDFBereitstellen
     */
    public ?bool $merkmalPDFBereitstellen = null;

    /**
     * Constructor method for Type.AnfrageUebermittlungGutachten
     *
     * @uses Type_AnfrageUebermittlungGutachten::setGutachtennummer()
     * @uses Type_AnfrageUebermittlungGutachten::setAbrufendeBehoerde()
     * @uses Type_AnfrageUebermittlungGutachten::setFahrzeugidentifizierungsnummer()
     * @uses Type_AnfrageUebermittlungGutachten::setMerkmalPDFBereitstellen()
     */
    public function __construct(?string $gutachtennummer = null, ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $abrufendeBehoerde = null, ?string $fahrzeugidentifizierungsnummer = null, ?bool $merkmalPDFBereitstellen = null)
    {
        $this
            ->setGutachtennummer($gutachtennummer)
            ->setAbrufendeBehoerde($abrufendeBehoerde)
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer)
            ->setMerkmalPDFBereitstellen($merkmalPDFBereitstellen);
    }

    /**
     * Get gutachtennummer value
     */
    public function getGutachtennummer(): ?string
    {
        return $this->gutachtennummer;
    }

    /**
     * Set gutachtennummer value
     */
    public function setGutachtennummer(?string $gutachtennummer = null): self
    {
        $this->gutachtennummer = $gutachtennummer;

        return $this;
    }

    /**
     * Get abrufendeBehoerde value
     */
    public function getAbrufendeBehoerde(): ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde
    {
        return $this->abrufendeBehoerde;
    }

    /**
     * Set abrufendeBehoerde value
     */
    public function setAbrufendeBehoerde(?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $abrufendeBehoerde = null): self
    {
        $this->abrufendeBehoerde = $abrufendeBehoerde;

        return $this;
    }

    /**
     * Get Fahrzeugidentifizierungsnummer value
     */
    public function getFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->Fahrzeugidentifizierungsnummer;
    }

    /**
     * Set Fahrzeugidentifizierungsnummer value
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->Fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;

        return $this;
    }

    /**
     * Get merkmalPDFBereitstellen value
     */
    public function getMerkmalPDFBereitstellen(): ?bool
    {
        return $this->merkmalPDFBereitstellen;
    }

    /**
     * Set merkmalPDFBereitstellen value
     */
    public function setMerkmalPDFBereitstellen(?bool $merkmalPDFBereitstellen = null): self
    {
        $this->merkmalPDFBereitstellen = $merkmalPDFBereitstellen;

        return $this;
    }
}

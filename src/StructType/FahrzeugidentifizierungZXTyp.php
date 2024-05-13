<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FahrzeugidentifizierungZXTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FahrzeugidentifizierungZXTyp extends AbstractStructBase
{
    /**
     * The SchluesselHersteller
     */
    public ?string $SchluesselHersteller = null;

    /**
     * The TextHersteller
     */
    public ?string $TextHersteller = null;

    /**
     * The Fahrzeugidentifizierungsnummer
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;

    /**
     * The PruefzifferFahrzeugidentifizierungsnummer
     */
    public ?string $PruefzifferFahrzeugidentifizierungsnummer = null;

    /**
     * The SchluesselTyp
     */
    public ?string $SchluesselTyp = null;

    /**
     * The SchluesselVarianteVersion
     */
    public ?string $SchluesselVarianteVersion = null;

    /**
     * The PruefzifferTypVarianteVersion
     */
    public ?string $PruefzifferTypVarianteVersion = null;

    /**
     * Constructor method for FahrzeugidentifizierungZXTyp
     *
     * @uses FahrzeugidentifizierungZXTyp::setSchluesselHersteller()
     * @uses FahrzeugidentifizierungZXTyp::setTextHersteller()
     * @uses FahrzeugidentifizierungZXTyp::setFahrzeugidentifizierungsnummer()
     * @uses FahrzeugidentifizierungZXTyp::setPruefzifferFahrzeugidentifizierungsnummer()
     * @uses FahrzeugidentifizierungZXTyp::setSchluesselTyp()
     * @uses FahrzeugidentifizierungZXTyp::setSchluesselVarianteVersion()
     * @uses FahrzeugidentifizierungZXTyp::setPruefzifferTypVarianteVersion()
     */
    public function __construct(?string $schluesselHersteller = null, ?string $textHersteller = null, ?string $fahrzeugidentifizierungsnummer = null, ?string $pruefzifferFahrzeugidentifizierungsnummer = null, ?string $schluesselTyp = null, ?string $schluesselVarianteVersion = null, ?string $pruefzifferTypVarianteVersion = null)
    {
        $this
            ->setSchluesselHersteller($schluesselHersteller)
            ->setTextHersteller($textHersteller)
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer)
            ->setPruefzifferFahrzeugidentifizierungsnummer($pruefzifferFahrzeugidentifizierungsnummer)
            ->setSchluesselTyp($schluesselTyp)
            ->setSchluesselVarianteVersion($schluesselVarianteVersion)
            ->setPruefzifferTypVarianteVersion($pruefzifferTypVarianteVersion);
    }

    /**
     * Get SchluesselHersteller value
     */
    public function getSchluesselHersteller(): ?string
    {
        return $this->SchluesselHersteller;
    }

    /**
     * Set SchluesselHersteller value
     */
    public function setSchluesselHersteller(?string $schluesselHersteller = null): self
    {
        $this->SchluesselHersteller = $schluesselHersteller;

        return $this;
    }

    /**
     * Get TextHersteller value
     */
    public function getTextHersteller(): ?string
    {
        return $this->TextHersteller;
    }

    /**
     * Set TextHersteller value
     */
    public function setTextHersteller(?string $textHersteller = null): self
    {
        $this->TextHersteller = $textHersteller;

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
     * Get PruefzifferFahrzeugidentifizierungsnummer value
     */
    public function getPruefzifferFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->PruefzifferFahrzeugidentifizierungsnummer;
    }

    /**
     * Set PruefzifferFahrzeugidentifizierungsnummer value
     */
    public function setPruefzifferFahrzeugidentifizierungsnummer(?string $pruefzifferFahrzeugidentifizierungsnummer = null): self
    {
        $this->PruefzifferFahrzeugidentifizierungsnummer = $pruefzifferFahrzeugidentifizierungsnummer;

        return $this;
    }

    /**
     * Get SchluesselTyp value
     */
    public function getSchluesselTyp(): ?string
    {
        return $this->SchluesselTyp;
    }

    /**
     * Set SchluesselTyp value
     */
    public function setSchluesselTyp(?string $schluesselTyp = null): self
    {
        $this->SchluesselTyp = $schluesselTyp;

        return $this;
    }

    /**
     * Get SchluesselVarianteVersion value
     */
    public function getSchluesselVarianteVersion(): ?string
    {
        return $this->SchluesselVarianteVersion;
    }

    /**
     * Set SchluesselVarianteVersion value
     */
    public function setSchluesselVarianteVersion(?string $schluesselVarianteVersion = null): self
    {
        $this->SchluesselVarianteVersion = $schluesselVarianteVersion;

        return $this;
    }

    /**
     * Get PruefzifferTypVarianteVersion value
     */
    public function getPruefzifferTypVarianteVersion(): ?string
    {
        return $this->PruefzifferTypVarianteVersion;
    }

    /**
     * Set PruefzifferTypVarianteVersion value
     */
    public function setPruefzifferTypVarianteVersion(?string $pruefzifferTypVarianteVersion = null): self
    {
        $this->PruefzifferTypVarianteVersion = $pruefzifferTypVarianteVersion;

        return $this;
    }
}

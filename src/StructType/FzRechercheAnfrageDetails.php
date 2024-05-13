<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FzRechercheAnfrageDetails StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FzRechercheAnfrageDetails extends AbstractStructBase
{
    /**
     * The Fahrzeugidentifizierungsnummer
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;

    /**
     * Constructor method for FzRechercheAnfrageDetails
     *
     * @uses FzRechercheAnfrageDetails::setFahrzeugidentifizierungsnummer()
     */
    public function __construct(?string $fahrzeugidentifizierungsnummer = null)
    {
        $this
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer);
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
}

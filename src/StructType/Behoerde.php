<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Behoerde StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Behoerde extends AbstractStructBase
{
    /**
     * The ZustaendigeBehoerdeKreisschluessel
     */
    public ?string $ZustaendigeBehoerdeKreisschluessel = null;

    /**
     * The ZustaendigeBehoerdeZusatzziffer
     */
    public ?string $ZustaendigeBehoerdeZusatzziffer = null;

    /**
     * The ZeitpunktBearbeitung
     */
    public ?string $ZeitpunktBearbeitung = null;

    /**
     * The IdentifikationZulassungsabschnitt
     */
    public ?string $IdentifikationZulassungsabschnitt = null;

    /**
     * The MitteilungIstNachmeldung
     */
    public ?string $MitteilungIstNachmeldung = null;

    /**
     * Constructor method for Behoerde
     *
     * @uses Behoerde::setZustaendigeBehoerdeKreisschluessel()
     * @uses Behoerde::setZustaendigeBehoerdeZusatzziffer()
     * @uses Behoerde::setZeitpunktBearbeitung()
     * @uses Behoerde::setIdentifikationZulassungsabschnitt()
     * @uses Behoerde::setMitteilungIstNachmeldung()
     */
    public function __construct(?string $zustaendigeBehoerdeKreisschluessel = null, ?string $zustaendigeBehoerdeZusatzziffer = null, ?string $zeitpunktBearbeitung = null, ?string $identifikationZulassungsabschnitt = null, ?string $mitteilungIstNachmeldung = null)
    {
        $this
            ->setZustaendigeBehoerdeKreisschluessel($zustaendigeBehoerdeKreisschluessel)
            ->setZustaendigeBehoerdeZusatzziffer($zustaendigeBehoerdeZusatzziffer)
            ->setZeitpunktBearbeitung($zeitpunktBearbeitung)
            ->setIdentifikationZulassungsabschnitt($identifikationZulassungsabschnitt)
            ->setMitteilungIstNachmeldung($mitteilungIstNachmeldung);
    }

    /**
     * Get ZustaendigeBehoerdeKreisschluessel value
     */
    public function getZustaendigeBehoerdeKreisschluessel(): ?string
    {
        return $this->ZustaendigeBehoerdeKreisschluessel;
    }

    /**
     * Set ZustaendigeBehoerdeKreisschluessel value
     */
    public function setZustaendigeBehoerdeKreisschluessel(?string $zustaendigeBehoerdeKreisschluessel = null): self
    {
        $this->ZustaendigeBehoerdeKreisschluessel = $zustaendigeBehoerdeKreisschluessel;

        return $this;
    }

    /**
     * Get ZustaendigeBehoerdeZusatzziffer value
     */
    public function getZustaendigeBehoerdeZusatzziffer(): ?string
    {
        return $this->ZustaendigeBehoerdeZusatzziffer;
    }

    /**
     * Set ZustaendigeBehoerdeZusatzziffer value
     */
    public function setZustaendigeBehoerdeZusatzziffer(?string $zustaendigeBehoerdeZusatzziffer = null): self
    {
        $this->ZustaendigeBehoerdeZusatzziffer = $zustaendigeBehoerdeZusatzziffer;

        return $this;
    }

    /**
     * Get ZeitpunktBearbeitung value
     */
    public function getZeitpunktBearbeitung(): ?string
    {
        return $this->ZeitpunktBearbeitung;
    }

    /**
     * Set ZeitpunktBearbeitung value
     */
    public function setZeitpunktBearbeitung(?string $zeitpunktBearbeitung = null): self
    {
        $this->ZeitpunktBearbeitung = $zeitpunktBearbeitung;

        return $this;
    }

    /**
     * Get IdentifikationZulassungsabschnitt value
     */
    public function getIdentifikationZulassungsabschnitt(): ?string
    {
        return $this->IdentifikationZulassungsabschnitt;
    }

    /**
     * Set IdentifikationZulassungsabschnitt value
     */
    public function setIdentifikationZulassungsabschnitt(?string $identifikationZulassungsabschnitt = null): self
    {
        $this->IdentifikationZulassungsabschnitt = $identifikationZulassungsabschnitt;

        return $this;
    }

    /**
     * Get MitteilungIstNachmeldung value
     */
    public function getMitteilungIstNachmeldung(): ?string
    {
        return $this->MitteilungIstNachmeldung;
    }

    /**
     * Set MitteilungIstNachmeldung value
     */
    public function setMitteilungIstNachmeldung(?string $mitteilungIstNachmeldung = null): self
    {
        $this->MitteilungIstNachmeldung = $mitteilungIstNachmeldung;

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Behoerde StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Behoerde extends AbstractStructBase
{
    /**
     * The ZustaendigeBehoerdeKreisschluessel
     * @var string|null
     */
    public ?string $ZustaendigeBehoerdeKreisschluessel = null;
    /**
     * The ZustaendigeBehoerdeZusatzziffer
     * @var string|null
     */
    public ?string $ZustaendigeBehoerdeZusatzziffer = null;
    /**
     * The ZeitpunktBearbeitung
     * @var string|null
     */
    public ?string $ZeitpunktBearbeitung = null;
    /**
     * The IdentifikationZulassungsabschnitt
     * @var string|null
     */
    public ?string $IdentifikationZulassungsabschnitt = null;
    /**
     * The MitteilungIstNachmeldung
     * @var string|null
     */
    public ?string $MitteilungIstNachmeldung = null;
    /**
     * Constructor method for Behoerde
     * @uses Behoerde::setZustaendigeBehoerdeKreisschluessel()
     * @uses Behoerde::setZustaendigeBehoerdeZusatzziffer()
     * @uses Behoerde::setZeitpunktBearbeitung()
     * @uses Behoerde::setIdentifikationZulassungsabschnitt()
     * @uses Behoerde::setMitteilungIstNachmeldung()
     * @param string $zustaendigeBehoerdeKreisschluessel
     * @param string $zustaendigeBehoerdeZusatzziffer
     * @param string $zeitpunktBearbeitung
     * @param string $identifikationZulassungsabschnitt
     * @param string $mitteilungIstNachmeldung
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
     * @return string|null
     */
    public function getZustaendigeBehoerdeKreisschluessel(): ?string
    {
        return $this->ZustaendigeBehoerdeKreisschluessel;
    }
    /**
     * Set ZustaendigeBehoerdeKreisschluessel value
     * @param string $zustaendigeBehoerdeKreisschluessel
     * @return \THAG\XKfz\StructType\Behoerde
     */
    public function setZustaendigeBehoerdeKreisschluessel(?string $zustaendigeBehoerdeKreisschluessel = null): self
    {
        $this->ZustaendigeBehoerdeKreisschluessel = $zustaendigeBehoerdeKreisschluessel;
        
        return $this;
    }
    /**
     * Get ZustaendigeBehoerdeZusatzziffer value
     * @return string|null
     */
    public function getZustaendigeBehoerdeZusatzziffer(): ?string
    {
        return $this->ZustaendigeBehoerdeZusatzziffer;
    }
    /**
     * Set ZustaendigeBehoerdeZusatzziffer value
     * @param string $zustaendigeBehoerdeZusatzziffer
     * @return \THAG\XKfz\StructType\Behoerde
     */
    public function setZustaendigeBehoerdeZusatzziffer(?string $zustaendigeBehoerdeZusatzziffer = null): self
    {
        $this->ZustaendigeBehoerdeZusatzziffer = $zustaendigeBehoerdeZusatzziffer;
        
        return $this;
    }
    /**
     * Get ZeitpunktBearbeitung value
     * @return string|null
     */
    public function getZeitpunktBearbeitung(): ?string
    {
        return $this->ZeitpunktBearbeitung;
    }
    /**
     * Set ZeitpunktBearbeitung value
     * @param string $zeitpunktBearbeitung
     * @return \THAG\XKfz\StructType\Behoerde
     */
    public function setZeitpunktBearbeitung(?string $zeitpunktBearbeitung = null): self
    {
        $this->ZeitpunktBearbeitung = $zeitpunktBearbeitung;
        
        return $this;
    }
    /**
     * Get IdentifikationZulassungsabschnitt value
     * @return string|null
     */
    public function getIdentifikationZulassungsabschnitt(): ?string
    {
        return $this->IdentifikationZulassungsabschnitt;
    }
    /**
     * Set IdentifikationZulassungsabschnitt value
     * @param string $identifikationZulassungsabschnitt
     * @return \THAG\XKfz\StructType\Behoerde
     */
    public function setIdentifikationZulassungsabschnitt(?string $identifikationZulassungsabschnitt = null): self
    {
        $this->IdentifikationZulassungsabschnitt = $identifikationZulassungsabschnitt;
        
        return $this;
    }
    /**
     * Get MitteilungIstNachmeldung value
     * @return string|null
     */
    public function getMitteilungIstNachmeldung(): ?string
    {
        return $this->MitteilungIstNachmeldung;
    }
    /**
     * Set MitteilungIstNachmeldung value
     * @param string $mitteilungIstNachmeldung
     * @return \THAG\XKfz\StructType\Behoerde
     */
    public function setMitteilungIstNachmeldung(?string $mitteilungIstNachmeldung = null): self
    {
        $this->MitteilungIstNachmeldung = $mitteilungIstNachmeldung;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.IdentifizierungUntersuchungStornierungZS StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_IdentifizierungUntersuchungStornierungZS extends AbstractStructBase
{
    /**
     * The Berichtsnummer
     */
    public ?string $Berichtsnummer = null;

    /**
     * The ZeitpunktUntersuchung
     */
    public ?string $ZeitpunktUntersuchung = null;

    /**
     * Constructor method for Type.IdentifizierungUntersuchungStornierungZS
     *
     * @uses Type_IdentifizierungUntersuchungStornierungZS::setBerichtsnummer()
     * @uses Type_IdentifizierungUntersuchungStornierungZS::setZeitpunktUntersuchung()
     */
    public function __construct(?string $berichtsnummer = null, ?string $zeitpunktUntersuchung = null)
    {
        $this
            ->setBerichtsnummer($berichtsnummer)
            ->setZeitpunktUntersuchung($zeitpunktUntersuchung);
    }

    /**
     * Get Berichtsnummer value
     */
    public function getBerichtsnummer(): ?string
    {
        return $this->Berichtsnummer;
    }

    /**
     * Set Berichtsnummer value
     */
    public function setBerichtsnummer(?string $berichtsnummer = null): self
    {
        $this->Berichtsnummer = $berichtsnummer;

        return $this;
    }

    /**
     * Get ZeitpunktUntersuchung value
     */
    public function getZeitpunktUntersuchung(): ?string
    {
        return $this->ZeitpunktUntersuchung;
    }

    /**
     * Set ZeitpunktUntersuchung value
     */
    public function setZeitpunktUntersuchung(?string $zeitpunktUntersuchung = null): self
    {
        $this->ZeitpunktUntersuchung = $zeitpunktUntersuchung;

        return $this;
    }
}

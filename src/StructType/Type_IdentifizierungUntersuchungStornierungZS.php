<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.IdentifizierungUntersuchungStornierungZS StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_IdentifizierungUntersuchungStornierungZS extends AbstractStructBase
{
    /**
     * The Berichtsnummer
     * @var string|null
     */
    public ?string $Berichtsnummer = null;
    /**
     * The ZeitpunktUntersuchung
     * @var string|null
     */
    public ?string $ZeitpunktUntersuchung = null;
    /**
     * Constructor method for Type.IdentifizierungUntersuchungStornierungZS
     * @uses Type_IdentifizierungUntersuchungStornierungZS::setBerichtsnummer()
     * @uses Type_IdentifizierungUntersuchungStornierungZS::setZeitpunktUntersuchung()
     * @param string $berichtsnummer
     * @param string $zeitpunktUntersuchung
     */
    public function __construct(?string $berichtsnummer = null, ?string $zeitpunktUntersuchung = null)
    {
        $this
            ->setBerichtsnummer($berichtsnummer)
            ->setZeitpunktUntersuchung($zeitpunktUntersuchung);
    }
    /**
     * Get Berichtsnummer value
     * @return string|null
     */
    public function getBerichtsnummer(): ?string
    {
        return $this->Berichtsnummer;
    }
    /**
     * Set Berichtsnummer value
     * @param string $berichtsnummer
     * @return \THAG\XKfz\StructType\Type_IdentifizierungUntersuchungStornierungZS
     */
    public function setBerichtsnummer(?string $berichtsnummer = null): self
    {
        $this->Berichtsnummer = $berichtsnummer;
        
        return $this;
    }
    /**
     * Get ZeitpunktUntersuchung value
     * @return string|null
     */
    public function getZeitpunktUntersuchung(): ?string
    {
        return $this->ZeitpunktUntersuchung;
    }
    /**
     * Set ZeitpunktUntersuchung value
     * @param string $zeitpunktUntersuchung
     * @return \THAG\XKfz\StructType\Type_IdentifizierungUntersuchungStornierungZS
     */
    public function setZeitpunktUntersuchung(?string $zeitpunktUntersuchung = null): self
    {
        $this->ZeitpunktUntersuchung = $zeitpunktUntersuchung;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZulassungsbescheinigungTeil2 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZulassungsbescheinigungTeil2 extends AbstractStructBase
{
    /**
     * The NummerZulBeschTeil2
     */
    public ?string $NummerZulBeschTeil2 = null;

    /**
     * The VerbleibZulBeschTeil2
     */
    public ?string $VerbleibZulBeschTeil2 = null;

    /**
     * The ZeitpunktAusfertigungZulBeschTeil2
     */
    public ?string $ZeitpunktAusfertigungZulBeschTeil2 = null;

    /**
     * The ZeitpunktVerbleibZulBeschTeil2
     */
    public ?string $ZeitpunktVerbleibZulBeschTeil2 = null;

    /**
     * The ZulBeschTeil2Bestaetigt
     */
    public ?string $ZulBeschTeil2Bestaetigt = null;

    /**
     * Constructor method for ZulassungsbescheinigungTeil2
     *
     * @uses ZulassungsbescheinigungTeil2::setNummerZulBeschTeil2()
     * @uses ZulassungsbescheinigungTeil2::setVerbleibZulBeschTeil2()
     * @uses ZulassungsbescheinigungTeil2::setZeitpunktAusfertigungZulBeschTeil2()
     * @uses ZulassungsbescheinigungTeil2::setZeitpunktVerbleibZulBeschTeil2()
     * @uses ZulassungsbescheinigungTeil2::setZulBeschTeil2Bestaetigt()
     */
    public function __construct(?string $nummerZulBeschTeil2 = null, ?string $verbleibZulBeschTeil2 = null, ?string $zeitpunktAusfertigungZulBeschTeil2 = null, ?string $zeitpunktVerbleibZulBeschTeil2 = null, ?string $zulBeschTeil2Bestaetigt = null)
    {
        $this
            ->setNummerZulBeschTeil2($nummerZulBeschTeil2)
            ->setVerbleibZulBeschTeil2($verbleibZulBeschTeil2)
            ->setZeitpunktAusfertigungZulBeschTeil2($zeitpunktAusfertigungZulBeschTeil2)
            ->setZeitpunktVerbleibZulBeschTeil2($zeitpunktVerbleibZulBeschTeil2)
            ->setZulBeschTeil2Bestaetigt($zulBeschTeil2Bestaetigt);
    }

    /**
     * Get NummerZulBeschTeil2 value
     */
    public function getNummerZulBeschTeil2(): ?string
    {
        return $this->NummerZulBeschTeil2;
    }

    /**
     * Set NummerZulBeschTeil2 value
     */
    public function setNummerZulBeschTeil2(?string $nummerZulBeschTeil2 = null): self
    {
        $this->NummerZulBeschTeil2 = $nummerZulBeschTeil2;

        return $this;
    }

    /**
     * Get VerbleibZulBeschTeil2 value
     */
    public function getVerbleibZulBeschTeil2(): ?string
    {
        return $this->VerbleibZulBeschTeil2;
    }

    /**
     * Set VerbleibZulBeschTeil2 value
     */
    public function setVerbleibZulBeschTeil2(?string $verbleibZulBeschTeil2 = null): self
    {
        $this->VerbleibZulBeschTeil2 = $verbleibZulBeschTeil2;

        return $this;
    }

    /**
     * Get ZeitpunktAusfertigungZulBeschTeil2 value
     */
    public function getZeitpunktAusfertigungZulBeschTeil2(): ?string
    {
        return $this->ZeitpunktAusfertigungZulBeschTeil2;
    }

    /**
     * Set ZeitpunktAusfertigungZulBeschTeil2 value
     */
    public function setZeitpunktAusfertigungZulBeschTeil2(?string $zeitpunktAusfertigungZulBeschTeil2 = null): self
    {
        $this->ZeitpunktAusfertigungZulBeschTeil2 = $zeitpunktAusfertigungZulBeschTeil2;

        return $this;
    }

    /**
     * Get ZeitpunktVerbleibZulBeschTeil2 value
     */
    public function getZeitpunktVerbleibZulBeschTeil2(): ?string
    {
        return $this->ZeitpunktVerbleibZulBeschTeil2;
    }

    /**
     * Set ZeitpunktVerbleibZulBeschTeil2 value
     */
    public function setZeitpunktVerbleibZulBeschTeil2(?string $zeitpunktVerbleibZulBeschTeil2 = null): self
    {
        $this->ZeitpunktVerbleibZulBeschTeil2 = $zeitpunktVerbleibZulBeschTeil2;

        return $this;
    }

    /**
     * Get ZulBeschTeil2Bestaetigt value
     */
    public function getZulBeschTeil2Bestaetigt(): ?string
    {
        return $this->ZulBeschTeil2Bestaetigt;
    }

    /**
     * Set ZulBeschTeil2Bestaetigt value
     */
    public function setZulBeschTeil2Bestaetigt(?string $zulBeschTeil2Bestaetigt = null): self
    {
        $this->ZulBeschTeil2Bestaetigt = $zulBeschTeil2Bestaetigt;

        return $this;
    }
}

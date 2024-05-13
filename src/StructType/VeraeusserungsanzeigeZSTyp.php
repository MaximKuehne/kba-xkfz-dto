<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeraeusserungsanzeigeZSTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VeraeusserungsanzeigeZSTyp extends AbstractStructBase
{
    /**
     * The ZeitpunktVeraeusserungsanzeige
     */
    public ?string $ZeitpunktVeraeusserungsanzeige = null;

    /**
     * The DatumEingangVeraeusserungsanzeige
     */
    public ?string $DatumEingangVeraeusserungsanzeige = null;

    /**
     * The VollstaendigkeitVeraeusserungsanzeige
     */
    public ?string $VollstaendigkeitVeraeusserungsanzeige = null;

    /**
     * Constructor method for VeraeusserungsanzeigeZSTyp
     *
     * @uses VeraeusserungsanzeigeZSTyp::setZeitpunktVeraeusserungsanzeige()
     * @uses VeraeusserungsanzeigeZSTyp::setDatumEingangVeraeusserungsanzeige()
     * @uses VeraeusserungsanzeigeZSTyp::setVollstaendigkeitVeraeusserungsanzeige()
     */
    public function __construct(?string $zeitpunktVeraeusserungsanzeige = null, ?string $datumEingangVeraeusserungsanzeige = null, ?string $vollstaendigkeitVeraeusserungsanzeige = null)
    {
        $this
            ->setZeitpunktVeraeusserungsanzeige($zeitpunktVeraeusserungsanzeige)
            ->setDatumEingangVeraeusserungsanzeige($datumEingangVeraeusserungsanzeige)
            ->setVollstaendigkeitVeraeusserungsanzeige($vollstaendigkeitVeraeusserungsanzeige);
    }

    /**
     * Get ZeitpunktVeraeusserungsanzeige value
     */
    public function getZeitpunktVeraeusserungsanzeige(): ?string
    {
        return $this->ZeitpunktVeraeusserungsanzeige;
    }

    /**
     * Set ZeitpunktVeraeusserungsanzeige value
     */
    public function setZeitpunktVeraeusserungsanzeige(?string $zeitpunktVeraeusserungsanzeige = null): self
    {
        $this->ZeitpunktVeraeusserungsanzeige = $zeitpunktVeraeusserungsanzeige;

        return $this;
    }

    /**
     * Get DatumEingangVeraeusserungsanzeige value
     */
    public function getDatumEingangVeraeusserungsanzeige(): ?string
    {
        return $this->DatumEingangVeraeusserungsanzeige;
    }

    /**
     * Set DatumEingangVeraeusserungsanzeige value
     */
    public function setDatumEingangVeraeusserungsanzeige(?string $datumEingangVeraeusserungsanzeige = null): self
    {
        $this->DatumEingangVeraeusserungsanzeige = $datumEingangVeraeusserungsanzeige;

        return $this;
    }

    /**
     * Get VollstaendigkeitVeraeusserungsanzeige value
     */
    public function getVollstaendigkeitVeraeusserungsanzeige(): ?string
    {
        return $this->VollstaendigkeitVeraeusserungsanzeige;
    }

    /**
     * Set VollstaendigkeitVeraeusserungsanzeige value
     */
    public function setVollstaendigkeitVeraeusserungsanzeige(?string $vollstaendigkeitVeraeusserungsanzeige = null): self
    {
        $this->VollstaendigkeitVeraeusserungsanzeige = $vollstaendigkeitVeraeusserungsanzeige;

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeraeusserungsanzeigeZSTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VeraeusserungsanzeigeZSTyp extends AbstractStructBase
{
    /**
     * The ZeitpunktVeraeusserungsanzeige
     * @var string|null
     */
    public ?string $ZeitpunktVeraeusserungsanzeige = null;
    /**
     * The DatumEingangVeraeusserungsanzeige
     * @var string|null
     */
    public ?string $DatumEingangVeraeusserungsanzeige = null;
    /**
     * The VollstaendigkeitVeraeusserungsanzeige
     * @var string|null
     */
    public ?string $VollstaendigkeitVeraeusserungsanzeige = null;
    /**
     * Constructor method for VeraeusserungsanzeigeZSTyp
     * @uses VeraeusserungsanzeigeZSTyp::setZeitpunktVeraeusserungsanzeige()
     * @uses VeraeusserungsanzeigeZSTyp::setDatumEingangVeraeusserungsanzeige()
     * @uses VeraeusserungsanzeigeZSTyp::setVollstaendigkeitVeraeusserungsanzeige()
     * @param string $zeitpunktVeraeusserungsanzeige
     * @param string $datumEingangVeraeusserungsanzeige
     * @param string $vollstaendigkeitVeraeusserungsanzeige
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
     * @return string|null
     */
    public function getZeitpunktVeraeusserungsanzeige(): ?string
    {
        return $this->ZeitpunktVeraeusserungsanzeige;
    }
    /**
     * Set ZeitpunktVeraeusserungsanzeige value
     * @param string $zeitpunktVeraeusserungsanzeige
     * @return \THAG\XKfz\StructType\VeraeusserungsanzeigeZSTyp
     */
    public function setZeitpunktVeraeusserungsanzeige(?string $zeitpunktVeraeusserungsanzeige = null): self
    {
        $this->ZeitpunktVeraeusserungsanzeige = $zeitpunktVeraeusserungsanzeige;
        
        return $this;
    }
    /**
     * Get DatumEingangVeraeusserungsanzeige value
     * @return string|null
     */
    public function getDatumEingangVeraeusserungsanzeige(): ?string
    {
        return $this->DatumEingangVeraeusserungsanzeige;
    }
    /**
     * Set DatumEingangVeraeusserungsanzeige value
     * @param string $datumEingangVeraeusserungsanzeige
     * @return \THAG\XKfz\StructType\VeraeusserungsanzeigeZSTyp
     */
    public function setDatumEingangVeraeusserungsanzeige(?string $datumEingangVeraeusserungsanzeige = null): self
    {
        $this->DatumEingangVeraeusserungsanzeige = $datumEingangVeraeusserungsanzeige;
        
        return $this;
    }
    /**
     * Get VollstaendigkeitVeraeusserungsanzeige value
     * @return string|null
     */
    public function getVollstaendigkeitVeraeusserungsanzeige(): ?string
    {
        return $this->VollstaendigkeitVeraeusserungsanzeige;
    }
    /**
     * Set VollstaendigkeitVeraeusserungsanzeige value
     * @param string $vollstaendigkeitVeraeusserungsanzeige
     * @return \THAG\XKfz\StructType\VeraeusserungsanzeigeZSTyp
     */
    public function setVollstaendigkeitVeraeusserungsanzeige(?string $vollstaendigkeitVeraeusserungsanzeige = null): self
    {
        $this->VollstaendigkeitVeraeusserungsanzeige = $vollstaendigkeitVeraeusserungsanzeige;
        
        return $this;
    }
}

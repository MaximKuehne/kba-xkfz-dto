<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReversierungVU StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ReversierungVU extends AbstractStructBase
{
    /**
     * The VUInterneVermittlernummer
     */
    public ?string $VUInterneVermittlernummer = null;

    /**
     * The UngebundenerVermittler
     */
    public ?\THAG\XKfz\StructType\UngebundenerVermittler $UngebundenerVermittler = null;

    /**
     * The Reversierungsstatus
     */
    public ?string $Reversierungsstatus = null;

    /**
     * The Reversierungszeitstempel
     */
    public ?string $Reversierungszeitstempel = null;

    /**
     * The Gruppennummer
     */
    public ?string $Gruppennummer = null;

    /**
     * The Begruendung
     */
    public ?string $Begruendung = null;

    /**
     * Constructor method for ReversierungVU
     *
     * @uses ReversierungVU::setVUInterneVermittlernummer()
     * @uses ReversierungVU::setUngebundenerVermittler()
     * @uses ReversierungVU::setReversierungsstatus()
     * @uses ReversierungVU::setReversierungszeitstempel()
     * @uses ReversierungVU::setGruppennummer()
     * @uses ReversierungVU::setBegruendung()
     */
    public function __construct(?string $vUInterneVermittlernummer = null, ?\THAG\XKfz\StructType\UngebundenerVermittler $ungebundenerVermittler = null, ?string $reversierungsstatus = null, ?string $reversierungszeitstempel = null, ?string $gruppennummer = null, ?string $begruendung = null)
    {
        $this
            ->setVUInterneVermittlernummer($vUInterneVermittlernummer)
            ->setUngebundenerVermittler($ungebundenerVermittler)
            ->setReversierungsstatus($reversierungsstatus)
            ->setReversierungszeitstempel($reversierungszeitstempel)
            ->setGruppennummer($gruppennummer)
            ->setBegruendung($begruendung);
    }

    /**
     * Get VUInterneVermittlernummer value
     */
    public function getVUInterneVermittlernummer(): ?string
    {
        return $this->VUInterneVermittlernummer;
    }

    /**
     * Set VUInterneVermittlernummer value
     */
    public function setVUInterneVermittlernummer(?string $vUInterneVermittlernummer = null): self
    {
        $this->VUInterneVermittlernummer = $vUInterneVermittlernummer;

        return $this;
    }

    /**
     * Get UngebundenerVermittler value
     */
    public function getUngebundenerVermittler(): ?\THAG\XKfz\StructType\UngebundenerVermittler
    {
        return $this->UngebundenerVermittler;
    }

    /**
     * Set UngebundenerVermittler value
     */
    public function setUngebundenerVermittler(?\THAG\XKfz\StructType\UngebundenerVermittler $ungebundenerVermittler = null): self
    {
        $this->UngebundenerVermittler = $ungebundenerVermittler;

        return $this;
    }

    /**
     * Get Reversierungsstatus value
     */
    public function getReversierungsstatus(): ?string
    {
        return $this->Reversierungsstatus;
    }

    /**
     * Set Reversierungsstatus value
     */
    public function setReversierungsstatus(?string $reversierungsstatus = null): self
    {
        $this->Reversierungsstatus = $reversierungsstatus;

        return $this;
    }

    /**
     * Get Reversierungszeitstempel value
     */
    public function getReversierungszeitstempel(): ?string
    {
        return $this->Reversierungszeitstempel;
    }

    /**
     * Set Reversierungszeitstempel value
     */
    public function setReversierungszeitstempel(?string $reversierungszeitstempel = null): self
    {
        $this->Reversierungszeitstempel = $reversierungszeitstempel;

        return $this;
    }

    /**
     * Get Gruppennummer value
     */
    public function getGruppennummer(): ?string
    {
        return $this->Gruppennummer;
    }

    /**
     * Set Gruppennummer value
     */
    public function setGruppennummer(?string $gruppennummer = null): self
    {
        $this->Gruppennummer = $gruppennummer;

        return $this;
    }

    /**
     * Get Begruendung value
     */
    public function getBegruendung(): ?string
    {
        return $this->Begruendung;
    }

    /**
     * Set Begruendung value
     */
    public function setBegruendung(?string $begruendung = null): self
    {
        $this->Begruendung = $begruendung;

        return $this;
    }
}

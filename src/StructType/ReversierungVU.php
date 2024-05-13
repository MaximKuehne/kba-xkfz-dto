<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReversierungVU StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ReversierungVU extends AbstractStructBase
{
    /**
     * The VUInterneVermittlernummer
     * @var string|null
     */
    public ?string $VUInterneVermittlernummer = null;
    /**
     * The UngebundenerVermittler
     * @var \THAG\XKfz\StructType\UngebundenerVermittler|null
     */
    public ?\THAG\XKfz\StructType\UngebundenerVermittler $UngebundenerVermittler = null;
    /**
     * The Reversierungsstatus
     * @var string|null
     */
    public ?string $Reversierungsstatus = null;
    /**
     * The Reversierungszeitstempel
     * @var string|null
     */
    public ?string $Reversierungszeitstempel = null;
    /**
     * The Gruppennummer
     * @var string|null
     */
    public ?string $Gruppennummer = null;
    /**
     * The Begruendung
     * @var string|null
     */
    public ?string $Begruendung = null;
    /**
     * Constructor method for ReversierungVU
     * @uses ReversierungVU::setVUInterneVermittlernummer()
     * @uses ReversierungVU::setUngebundenerVermittler()
     * @uses ReversierungVU::setReversierungsstatus()
     * @uses ReversierungVU::setReversierungszeitstempel()
     * @uses ReversierungVU::setGruppennummer()
     * @uses ReversierungVU::setBegruendung()
     * @param string $vUInterneVermittlernummer
     * @param \THAG\XKfz\StructType\UngebundenerVermittler $ungebundenerVermittler
     * @param string $reversierungsstatus
     * @param string $reversierungszeitstempel
     * @param string $gruppennummer
     * @param string $begruendung
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
     * @return string|null
     */
    public function getVUInterneVermittlernummer(): ?string
    {
        return $this->VUInterneVermittlernummer;
    }
    /**
     * Set VUInterneVermittlernummer value
     * @param string $vUInterneVermittlernummer
     * @return \THAG\XKfz\StructType\ReversierungVU
     */
    public function setVUInterneVermittlernummer(?string $vUInterneVermittlernummer = null): self
    {
        $this->VUInterneVermittlernummer = $vUInterneVermittlernummer;
        
        return $this;
    }
    /**
     * Get UngebundenerVermittler value
     * @return \THAG\XKfz\StructType\UngebundenerVermittler|null
     */
    public function getUngebundenerVermittler(): ?\THAG\XKfz\StructType\UngebundenerVermittler
    {
        return $this->UngebundenerVermittler;
    }
    /**
     * Set UngebundenerVermittler value
     * @param \THAG\XKfz\StructType\UngebundenerVermittler $ungebundenerVermittler
     * @return \THAG\XKfz\StructType\ReversierungVU
     */
    public function setUngebundenerVermittler(?\THAG\XKfz\StructType\UngebundenerVermittler $ungebundenerVermittler = null): self
    {
        $this->UngebundenerVermittler = $ungebundenerVermittler;
        
        return $this;
    }
    /**
     * Get Reversierungsstatus value
     * @return string|null
     */
    public function getReversierungsstatus(): ?string
    {
        return $this->Reversierungsstatus;
    }
    /**
     * Set Reversierungsstatus value
     * @param string $reversierungsstatus
     * @return \THAG\XKfz\StructType\ReversierungVU
     */
    public function setReversierungsstatus(?string $reversierungsstatus = null): self
    {
        $this->Reversierungsstatus = $reversierungsstatus;
        
        return $this;
    }
    /**
     * Get Reversierungszeitstempel value
     * @return string|null
     */
    public function getReversierungszeitstempel(): ?string
    {
        return $this->Reversierungszeitstempel;
    }
    /**
     * Set Reversierungszeitstempel value
     * @param string $reversierungszeitstempel
     * @return \THAG\XKfz\StructType\ReversierungVU
     */
    public function setReversierungszeitstempel(?string $reversierungszeitstempel = null): self
    {
        $this->Reversierungszeitstempel = $reversierungszeitstempel;
        
        return $this;
    }
    /**
     * Get Gruppennummer value
     * @return string|null
     */
    public function getGruppennummer(): ?string
    {
        return $this->Gruppennummer;
    }
    /**
     * Set Gruppennummer value
     * @param string $gruppennummer
     * @return \THAG\XKfz\StructType\ReversierungVU
     */
    public function setGruppennummer(?string $gruppennummer = null): self
    {
        $this->Gruppennummer = $gruppennummer;
        
        return $this;
    }
    /**
     * Get Begruendung value
     * @return string|null
     */
    public function getBegruendung(): ?string
    {
        return $this->Begruendung;
    }
    /**
     * Set Begruendung value
     * @param string $begruendung
     * @return \THAG\XKfz\StructType\ReversierungVU
     */
    public function setBegruendung(?string $begruendung = null): self
    {
        $this->Begruendung = $begruendung;
        
        return $this;
    }
}

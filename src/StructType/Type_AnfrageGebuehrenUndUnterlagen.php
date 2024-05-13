<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AnfrageGebuehrenUndUnterlagen StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AnfrageGebuehrenUndUnterlagen extends AbstractStructBase
{
    /**
     * The referenzMandantAbsender
     * @var \THAG\XKfz\StructType\Type_Kommunikationspartner|null
     */
    public ?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantAbsender = null;
    /**
     * The referenzMandantEmpfaenger
     * @var \THAG\XKfz\StructType\Type_Kommunikationspartner|null
     */
    public ?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantEmpfaenger = null;
    /**
     * The kundennummer
     * @var string|null
     */
    public ?string $kundennummer = null;
    /**
     * The artDesGeschaeftsvorfalls
     * @var \THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls|null
     */
    public ?\THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls $artDesGeschaeftsvorfalls = null;
    /**
     * The sucheinschraenkung
     * @var \THAG\XKfz\StructType\Type_SucheinschraenkungGebuehrenUndUnterlagen|null
     */
    public ?\THAG\XKfz\StructType\Type_SucheinschraenkungGebuehrenUndUnterlagen $sucheinschraenkung = null;
    /**
     * Constructor method for Type.AnfrageGebuehrenUndUnterlagen
     * @uses Type_AnfrageGebuehrenUndUnterlagen::setReferenzMandantAbsender()
     * @uses Type_AnfrageGebuehrenUndUnterlagen::setReferenzMandantEmpfaenger()
     * @uses Type_AnfrageGebuehrenUndUnterlagen::setKundennummer()
     * @uses Type_AnfrageGebuehrenUndUnterlagen::setArtDesGeschaeftsvorfalls()
     * @uses Type_AnfrageGebuehrenUndUnterlagen::setSucheinschraenkung()
     * @param \THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantAbsender
     * @param \THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantEmpfaenger
     * @param string $kundennummer
     * @param \THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls $artDesGeschaeftsvorfalls
     * @param \THAG\XKfz\StructType\Type_SucheinschraenkungGebuehrenUndUnterlagen $sucheinschraenkung
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantAbsender = null, ?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantEmpfaenger = null, ?string $kundennummer = null, ?\THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls $artDesGeschaeftsvorfalls = null, ?\THAG\XKfz\StructType\Type_SucheinschraenkungGebuehrenUndUnterlagen $sucheinschraenkung = null)
    {
        $this
            ->setReferenzMandantAbsender($referenzMandantAbsender)
            ->setReferenzMandantEmpfaenger($referenzMandantEmpfaenger)
            ->setKundennummer($kundennummer)
            ->setArtDesGeschaeftsvorfalls($artDesGeschaeftsvorfalls)
            ->setSucheinschraenkung($sucheinschraenkung);
    }
    /**
     * Get referenzMandantAbsender value
     * @return \THAG\XKfz\StructType\Type_Kommunikationspartner|null
     */
    public function getReferenzMandantAbsender(): ?\THAG\XKfz\StructType\Type_Kommunikationspartner
    {
        return $this->referenzMandantAbsender;
    }
    /**
     * Set referenzMandantAbsender value
     * @param \THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantAbsender
     * @return \THAG\XKfz\StructType\Type_AnfrageGebuehrenUndUnterlagen
     */
    public function setReferenzMandantAbsender(?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantAbsender = null): self
    {
        $this->referenzMandantAbsender = $referenzMandantAbsender;
        
        return $this;
    }
    /**
     * Get referenzMandantEmpfaenger value
     * @return \THAG\XKfz\StructType\Type_Kommunikationspartner|null
     */
    public function getReferenzMandantEmpfaenger(): ?\THAG\XKfz\StructType\Type_Kommunikationspartner
    {
        return $this->referenzMandantEmpfaenger;
    }
    /**
     * Set referenzMandantEmpfaenger value
     * @param \THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantEmpfaenger
     * @return \THAG\XKfz\StructType\Type_AnfrageGebuehrenUndUnterlagen
     */
    public function setReferenzMandantEmpfaenger(?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantEmpfaenger = null): self
    {
        $this->referenzMandantEmpfaenger = $referenzMandantEmpfaenger;
        
        return $this;
    }
    /**
     * Get kundennummer value
     * @return string|null
     */
    public function getKundennummer(): ?string
    {
        return $this->kundennummer;
    }
    /**
     * Set kundennummer value
     * @param string $kundennummer
     * @return \THAG\XKfz\StructType\Type_AnfrageGebuehrenUndUnterlagen
     */
    public function setKundennummer(?string $kundennummer = null): self
    {
        $this->kundennummer = $kundennummer;
        
        return $this;
    }
    /**
     * Get artDesGeschaeftsvorfalls value
     * @return \THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls|null
     */
    public function getArtDesGeschaeftsvorfalls(): ?\THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls
    {
        return $this->artDesGeschaeftsvorfalls;
    }
    /**
     * Set artDesGeschaeftsvorfalls value
     * @param \THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls $artDesGeschaeftsvorfalls
     * @return \THAG\XKfz\StructType\Type_AnfrageGebuehrenUndUnterlagen
     */
    public function setArtDesGeschaeftsvorfalls(?\THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls $artDesGeschaeftsvorfalls = null): self
    {
        $this->artDesGeschaeftsvorfalls = $artDesGeschaeftsvorfalls;
        
        return $this;
    }
    /**
     * Get sucheinschraenkung value
     * @return \THAG\XKfz\StructType\Type_SucheinschraenkungGebuehrenUndUnterlagen|null
     */
    public function getSucheinschraenkung(): ?\THAG\XKfz\StructType\Type_SucheinschraenkungGebuehrenUndUnterlagen
    {
        return $this->sucheinschraenkung;
    }
    /**
     * Set sucheinschraenkung value
     * @param \THAG\XKfz\StructType\Type_SucheinschraenkungGebuehrenUndUnterlagen $sucheinschraenkung
     * @return \THAG\XKfz\StructType\Type_AnfrageGebuehrenUndUnterlagen
     */
    public function setSucheinschraenkung(?\THAG\XKfz\StructType\Type_SucheinschraenkungGebuehrenUndUnterlagen $sucheinschraenkung = null): self
    {
        $this->sucheinschraenkung = $sucheinschraenkung;
        
        return $this;
    }
}

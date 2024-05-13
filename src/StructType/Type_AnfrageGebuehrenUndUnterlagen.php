<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AnfrageGebuehrenUndUnterlagen StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AnfrageGebuehrenUndUnterlagen extends AbstractStructBase
{
    /**
     * The referenzMandantAbsender
     */
    public ?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantAbsender = null;

    /**
     * The referenzMandantEmpfaenger
     */
    public ?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantEmpfaenger = null;

    /**
     * The kundennummer
     */
    public ?string $kundennummer = null;

    /**
     * The artDesGeschaeftsvorfalls
     */
    public ?\THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls $artDesGeschaeftsvorfalls = null;

    /**
     * The sucheinschraenkung
     */
    public ?\THAG\XKfz\StructType\Type_SucheinschraenkungGebuehrenUndUnterlagen $sucheinschraenkung = null;

    /**
     * Constructor method for Type.AnfrageGebuehrenUndUnterlagen
     *
     * @uses Type_AnfrageGebuehrenUndUnterlagen::setReferenzMandantAbsender()
     * @uses Type_AnfrageGebuehrenUndUnterlagen::setReferenzMandantEmpfaenger()
     * @uses Type_AnfrageGebuehrenUndUnterlagen::setKundennummer()
     * @uses Type_AnfrageGebuehrenUndUnterlagen::setArtDesGeschaeftsvorfalls()
     * @uses Type_AnfrageGebuehrenUndUnterlagen::setSucheinschraenkung()
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
     */
    public function getReferenzMandantAbsender(): ?\THAG\XKfz\StructType\Type_Kommunikationspartner
    {
        return $this->referenzMandantAbsender;
    }

    /**
     * Set referenzMandantAbsender value
     */
    public function setReferenzMandantAbsender(?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantAbsender = null): self
    {
        $this->referenzMandantAbsender = $referenzMandantAbsender;

        return $this;
    }

    /**
     * Get referenzMandantEmpfaenger value
     */
    public function getReferenzMandantEmpfaenger(): ?\THAG\XKfz\StructType\Type_Kommunikationspartner
    {
        return $this->referenzMandantEmpfaenger;
    }

    /**
     * Set referenzMandantEmpfaenger value
     */
    public function setReferenzMandantEmpfaenger(?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzMandantEmpfaenger = null): self
    {
        $this->referenzMandantEmpfaenger = $referenzMandantEmpfaenger;

        return $this;
    }

    /**
     * Get kundennummer value
     */
    public function getKundennummer(): ?string
    {
        return $this->kundennummer;
    }

    /**
     * Set kundennummer value
     */
    public function setKundennummer(?string $kundennummer = null): self
    {
        $this->kundennummer = $kundennummer;

        return $this;
    }

    /**
     * Get artDesGeschaeftsvorfalls value
     */
    public function getArtDesGeschaeftsvorfalls(): ?\THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls
    {
        return $this->artDesGeschaeftsvorfalls;
    }

    /**
     * Set artDesGeschaeftsvorfalls value
     */
    public function setArtDesGeschaeftsvorfalls(?\THAG\XKfz\StructType\Code_ArtDesGeschaeftsvorfalls $artDesGeschaeftsvorfalls = null): self
    {
        $this->artDesGeschaeftsvorfalls = $artDesGeschaeftsvorfalls;

        return $this;
    }

    /**
     * Get sucheinschraenkung value
     */
    public function getSucheinschraenkung(): ?\THAG\XKfz\StructType\Type_SucheinschraenkungGebuehrenUndUnterlagen
    {
        return $this->sucheinschraenkung;
    }

    /**
     * Set sucheinschraenkung value
     */
    public function setSucheinschraenkung(?\THAG\XKfz\StructType\Type_SucheinschraenkungGebuehrenUndUnterlagen $sucheinschraenkung = null): self
    {
        $this->sucheinschraenkung = $sucheinschraenkung;

        return $this;
    }
}

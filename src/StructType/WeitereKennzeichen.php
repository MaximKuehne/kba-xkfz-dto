<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WeitereKennzeichen StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class WeitereKennzeichen extends AbstractStructBase
{
    /**
     * The Kennzeichen
     */
    public ?string $Kennzeichen = null;

    /**
     * The NummerZulBeschTeil1
     */
    public ?string $NummerZulBeschTeil1 = null;

    /**
     * The DatumRueckgabe
     */
    public ?string $DatumRueckgabe = null;

    /**
     * The KennzeichenfuehrendeBehoerdeKreisschluessel
     */
    public ?string $KennzeichenfuehrendeBehoerdeKreisschluessel = null;

    /**
     * The KennzeichenfuehrendeBehoerdeZusatzziffer
     */
    public ?string $KennzeichenfuehrendeBehoerdeZusatzziffer = null;

    /**
     * Constructor method for WeitereKennzeichen
     *
     * @uses WeitereKennzeichen::setKennzeichen()
     * @uses WeitereKennzeichen::setNummerZulBeschTeil1()
     * @uses WeitereKennzeichen::setDatumRueckgabe()
     * @uses WeitereKennzeichen::setKennzeichenfuehrendeBehoerdeKreisschluessel()
     * @uses WeitereKennzeichen::setKennzeichenfuehrendeBehoerdeZusatzziffer()
     */
    public function __construct(?string $kennzeichen = null, ?string $nummerZulBeschTeil1 = null, ?string $datumRueckgabe = null, ?string $kennzeichenfuehrendeBehoerdeKreisschluessel = null, ?string $kennzeichenfuehrendeBehoerdeZusatzziffer = null)
    {
        $this
            ->setKennzeichen($kennzeichen)
            ->setNummerZulBeschTeil1($nummerZulBeschTeil1)
            ->setDatumRueckgabe($datumRueckgabe)
            ->setKennzeichenfuehrendeBehoerdeKreisschluessel($kennzeichenfuehrendeBehoerdeKreisschluessel)
            ->setKennzeichenfuehrendeBehoerdeZusatzziffer($kennzeichenfuehrendeBehoerdeZusatzziffer);
    }

    /**
     * Get Kennzeichen value
     */
    public function getKennzeichen(): ?string
    {
        return $this->Kennzeichen;
    }

    /**
     * Set Kennzeichen value
     */
    public function setKennzeichen(?string $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;

        return $this;
    }

    /**
     * Get NummerZulBeschTeil1 value
     */
    public function getNummerZulBeschTeil1(): ?string
    {
        return $this->NummerZulBeschTeil1;
    }

    /**
     * Set NummerZulBeschTeil1 value
     */
    public function setNummerZulBeschTeil1(?string $nummerZulBeschTeil1 = null): self
    {
        $this->NummerZulBeschTeil1 = $nummerZulBeschTeil1;

        return $this;
    }

    /**
     * Get DatumRueckgabe value
     */
    public function getDatumRueckgabe(): ?string
    {
        return $this->DatumRueckgabe;
    }

    /**
     * Set DatumRueckgabe value
     */
    public function setDatumRueckgabe(?string $datumRueckgabe = null): self
    {
        $this->DatumRueckgabe = $datumRueckgabe;

        return $this;
    }

    /**
     * Get KennzeichenfuehrendeBehoerdeKreisschluessel value
     */
    public function getKennzeichenfuehrendeBehoerdeKreisschluessel(): ?string
    {
        return $this->KennzeichenfuehrendeBehoerdeKreisschluessel;
    }

    /**
     * Set KennzeichenfuehrendeBehoerdeKreisschluessel value
     */
    public function setKennzeichenfuehrendeBehoerdeKreisschluessel(?string $kennzeichenfuehrendeBehoerdeKreisschluessel = null): self
    {
        $this->KennzeichenfuehrendeBehoerdeKreisschluessel = $kennzeichenfuehrendeBehoerdeKreisschluessel;

        return $this;
    }

    /**
     * Get KennzeichenfuehrendeBehoerdeZusatzziffer value
     */
    public function getKennzeichenfuehrendeBehoerdeZusatzziffer(): ?string
    {
        return $this->KennzeichenfuehrendeBehoerdeZusatzziffer;
    }

    /**
     * Set KennzeichenfuehrendeBehoerdeZusatzziffer value
     */
    public function setKennzeichenfuehrendeBehoerdeZusatzziffer(?string $kennzeichenfuehrendeBehoerdeZusatzziffer = null): self
    {
        $this->KennzeichenfuehrendeBehoerdeZusatzziffer = $kennzeichenfuehrendeBehoerdeZusatzziffer;

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.BasisHalterauskunft StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_BasisHalterauskunft extends AbstractStructBase
{
    /**
     * The listeReferenzHalterauskunft
     */
    public ?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenzHalterauskunft = null;

    /**
     * The Kennzeichen
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;

    /**
     * The Stichtag
     */
    public ?string $Stichtag = null;

    /**
     * The aktenzeichen
     */
    public ?string $aktenzeichen = null;

    /**
     * The rechtsgrundlage
     */
    public ?\THAG\XKfz\StructType\Code_RechtsgrundlageHalterauskunft $rechtsgrundlage = null;

    /**
     * The auskunftsgrund
     */
    public ?string $auskunftsgrund = null;

    /**
     * The auskunftsmedium
     */
    public ?\THAG\XKfz\StructType\Code_Auskunftsmedium $auskunftsmedium = null;

    /**
     * The identifikationAnfrager
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation $identifikationAnfrager = null;

    /**
     * Constructor method for Type.BasisHalterauskunft
     *
     * @uses Type_BasisHalterauskunft::setListeReferenzHalterauskunft()
     * @uses Type_BasisHalterauskunft::setKennzeichen()
     * @uses Type_BasisHalterauskunft::setStichtag()
     * @uses Type_BasisHalterauskunft::setAktenzeichen()
     * @uses Type_BasisHalterauskunft::setRechtsgrundlage()
     * @uses Type_BasisHalterauskunft::setAuskunftsgrund()
     * @uses Type_BasisHalterauskunft::setAuskunftsmedium()
     * @uses Type_BasisHalterauskunft::setIdentifikationAnfrager()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenzHalterauskunft = null, ?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null, ?string $stichtag = null, ?string $aktenzeichen = null, ?\THAG\XKfz\StructType\Code_RechtsgrundlageHalterauskunft $rechtsgrundlage = null, ?string $auskunftsgrund = null, ?\THAG\XKfz\StructType\Code_Auskunftsmedium $auskunftsmedium = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation $identifikationAnfrager = null)
    {
        $this
            ->setListeReferenzHalterauskunft($listeReferenzHalterauskunft)
            ->setKennzeichen($kennzeichen)
            ->setStichtag($stichtag)
            ->setAktenzeichen($aktenzeichen)
            ->setRechtsgrundlage($rechtsgrundlage)
            ->setAuskunftsgrund($auskunftsgrund)
            ->setAuskunftsmedium($auskunftsmedium)
            ->setIdentifikationAnfrager($identifikationAnfrager);
    }

    /**
     * Get listeReferenzHalterauskunft value
     */
    public function getListeReferenzHalterauskunft(): ?\THAG\XKfz\StructType\Type_ListeReferenz
    {
        return $this->listeReferenzHalterauskunft;
    }

    /**
     * Set listeReferenzHalterauskunft value
     */
    public function setListeReferenzHalterauskunft(?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenzHalterauskunft = null): self
    {
        $this->listeReferenzHalterauskunft = $listeReferenzHalterauskunft;

        return $this;
    }

    /**
     * Get Kennzeichen value
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }

    /**
     * Set Kennzeichen value
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;

        return $this;
    }

    /**
     * Get Stichtag value
     */
    public function getStichtag(): ?string
    {
        return $this->Stichtag;
    }

    /**
     * Set Stichtag value
     */
    public function setStichtag(?string $stichtag = null): self
    {
        $this->Stichtag = $stichtag;

        return $this;
    }

    /**
     * Get aktenzeichen value
     */
    public function getAktenzeichen(): ?string
    {
        return $this->aktenzeichen;
    }

    /**
     * Set aktenzeichen value
     */
    public function setAktenzeichen(?string $aktenzeichen = null): self
    {
        $this->aktenzeichen = $aktenzeichen;

        return $this;
    }

    /**
     * Get rechtsgrundlage value
     */
    public function getRechtsgrundlage(): ?\THAG\XKfz\StructType\Code_RechtsgrundlageHalterauskunft
    {
        return $this->rechtsgrundlage;
    }

    /**
     * Set rechtsgrundlage value
     */
    public function setRechtsgrundlage(?\THAG\XKfz\StructType\Code_RechtsgrundlageHalterauskunft $rechtsgrundlage = null): self
    {
        $this->rechtsgrundlage = $rechtsgrundlage;

        return $this;
    }

    /**
     * Get auskunftsgrund value
     */
    public function getAuskunftsgrund(): ?string
    {
        return $this->auskunftsgrund;
    }

    /**
     * Set auskunftsgrund value
     */
    public function setAuskunftsgrund(?string $auskunftsgrund = null): self
    {
        $this->auskunftsgrund = $auskunftsgrund;

        return $this;
    }

    /**
     * Get auskunftsmedium value
     */
    public function getAuskunftsmedium(): ?\THAG\XKfz\StructType\Code_Auskunftsmedium
    {
        return $this->auskunftsmedium;
    }

    /**
     * Set auskunftsmedium value
     */
    public function setAuskunftsmedium(?\THAG\XKfz\StructType\Code_Auskunftsmedium $auskunftsmedium = null): self
    {
        $this->auskunftsmedium = $auskunftsmedium;

        return $this;
    }

    /**
     * Get identifikationAnfrager value
     */
    public function getIdentifikationAnfrager(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation
    {
        return $this->identifikationAnfrager;
    }

    /**
     * Set identifikationAnfrager value
     */
    public function setIdentifikationAnfrager(?\THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation $identifikationAnfrager = null): self
    {
        $this->identifikationAnfrager = $identifikationAnfrager;

        return $this;
    }
}

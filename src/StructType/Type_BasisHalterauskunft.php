<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.BasisHalterauskunft StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_BasisHalterauskunft extends AbstractStructBase
{
    /**
     * The listeReferenzHalterauskunft
     * @var \THAG\XKfz\StructType\Type_ListeReferenz|null
     */
    public ?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenzHalterauskunft = null;
    /**
     * The Kennzeichen
     * @var \THAG\XKfz\StructType\Kennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;
    /**
     * The Stichtag
     * @var string|null
     */
    public ?string $Stichtag = null;
    /**
     * The aktenzeichen
     * @var string|null
     */
    public ?string $aktenzeichen = null;
    /**
     * The rechtsgrundlage
     * @var \THAG\XKfz\StructType\Code_RechtsgrundlageHalterauskunft|null
     */
    public ?\THAG\XKfz\StructType\Code_RechtsgrundlageHalterauskunft $rechtsgrundlage = null;
    /**
     * The auskunftsgrund
     * @var string|null
     */
    public ?string $auskunftsgrund = null;
    /**
     * The auskunftsmedium
     * @var \THAG\XKfz\StructType\Code_Auskunftsmedium|null
     */
    public ?\THAG\XKfz\StructType\Code_Auskunftsmedium $auskunftsmedium = null;
    /**
     * The identifikationAnfrager
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation $identifikationAnfrager = null;
    /**
     * Constructor method for Type.BasisHalterauskunft
     * @uses Type_BasisHalterauskunft::setListeReferenzHalterauskunft()
     * @uses Type_BasisHalterauskunft::setKennzeichen()
     * @uses Type_BasisHalterauskunft::setStichtag()
     * @uses Type_BasisHalterauskunft::setAktenzeichen()
     * @uses Type_BasisHalterauskunft::setRechtsgrundlage()
     * @uses Type_BasisHalterauskunft::setAuskunftsgrund()
     * @uses Type_BasisHalterauskunft::setAuskunftsmedium()
     * @uses Type_BasisHalterauskunft::setIdentifikationAnfrager()
     * @param \THAG\XKfz\StructType\Type_ListeReferenz $listeReferenzHalterauskunft
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @param string $stichtag
     * @param string $aktenzeichen
     * @param \THAG\XKfz\StructType\Code_RechtsgrundlageHalterauskunft $rechtsgrundlage
     * @param string $auskunftsgrund
     * @param \THAG\XKfz\StructType\Code_Auskunftsmedium $auskunftsmedium
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation $identifikationAnfrager
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
     * @return \THAG\XKfz\StructType\Type_ListeReferenz|null
     */
    public function getListeReferenzHalterauskunft(): ?\THAG\XKfz\StructType\Type_ListeReferenz
    {
        return $this->listeReferenzHalterauskunft;
    }
    /**
     * Set listeReferenzHalterauskunft value
     * @param \THAG\XKfz\StructType\Type_ListeReferenz $listeReferenzHalterauskunft
     * @return \THAG\XKfz\StructType\Type_BasisHalterauskunft
     */
    public function setListeReferenzHalterauskunft(?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenzHalterauskunft = null): self
    {
        $this->listeReferenzHalterauskunft = $listeReferenzHalterauskunft;
        
        return $this;
    }
    /**
     * Get Kennzeichen value
     * @return \THAG\XKfz\StructType\Kennzeichen|null
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }
    /**
     * Set Kennzeichen value
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @return \THAG\XKfz\StructType\Type_BasisHalterauskunft
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get Stichtag value
     * @return string|null
     */
    public function getStichtag(): ?string
    {
        return $this->Stichtag;
    }
    /**
     * Set Stichtag value
     * @param string $stichtag
     * @return \THAG\XKfz\StructType\Type_BasisHalterauskunft
     */
    public function setStichtag(?string $stichtag = null): self
    {
        $this->Stichtag = $stichtag;
        
        return $this;
    }
    /**
     * Get aktenzeichen value
     * @return string|null
     */
    public function getAktenzeichen(): ?string
    {
        return $this->aktenzeichen;
    }
    /**
     * Set aktenzeichen value
     * @param string $aktenzeichen
     * @return \THAG\XKfz\StructType\Type_BasisHalterauskunft
     */
    public function setAktenzeichen(?string $aktenzeichen = null): self
    {
        $this->aktenzeichen = $aktenzeichen;
        
        return $this;
    }
    /**
     * Get rechtsgrundlage value
     * @return \THAG\XKfz\StructType\Code_RechtsgrundlageHalterauskunft|null
     */
    public function getRechtsgrundlage(): ?\THAG\XKfz\StructType\Code_RechtsgrundlageHalterauskunft
    {
        return $this->rechtsgrundlage;
    }
    /**
     * Set rechtsgrundlage value
     * @param \THAG\XKfz\StructType\Code_RechtsgrundlageHalterauskunft $rechtsgrundlage
     * @return \THAG\XKfz\StructType\Type_BasisHalterauskunft
     */
    public function setRechtsgrundlage(?\THAG\XKfz\StructType\Code_RechtsgrundlageHalterauskunft $rechtsgrundlage = null): self
    {
        $this->rechtsgrundlage = $rechtsgrundlage;
        
        return $this;
    }
    /**
     * Get auskunftsgrund value
     * @return string|null
     */
    public function getAuskunftsgrund(): ?string
    {
        return $this->auskunftsgrund;
    }
    /**
     * Set auskunftsgrund value
     * @param string $auskunftsgrund
     * @return \THAG\XKfz\StructType\Type_BasisHalterauskunft
     */
    public function setAuskunftsgrund(?string $auskunftsgrund = null): self
    {
        $this->auskunftsgrund = $auskunftsgrund;
        
        return $this;
    }
    /**
     * Get auskunftsmedium value
     * @return \THAG\XKfz\StructType\Code_Auskunftsmedium|null
     */
    public function getAuskunftsmedium(): ?\THAG\XKfz\StructType\Code_Auskunftsmedium
    {
        return $this->auskunftsmedium;
    }
    /**
     * Set auskunftsmedium value
     * @param \THAG\XKfz\StructType\Code_Auskunftsmedium $auskunftsmedium
     * @return \THAG\XKfz\StructType\Type_BasisHalterauskunft
     */
    public function setAuskunftsmedium(?\THAG\XKfz\StructType\Code_Auskunftsmedium $auskunftsmedium = null): self
    {
        $this->auskunftsmedium = $auskunftsmedium;
        
        return $this;
    }
    /**
     * Get identifikationAnfrager value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation|null
     */
    public function getIdentifikationAnfrager(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation
    {
        return $this->identifikationAnfrager;
    }
    /**
     * Set identifikationAnfrager value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation $identifikationAnfrager
     * @return \THAG\XKfz\StructType\Type_BasisHalterauskunft
     */
    public function setIdentifikationAnfrager(?\THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation $identifikationAnfrager = null): self
    {
        $this->identifikationAnfrager = $identifikationAnfrager;
        
        return $this;
    }
}

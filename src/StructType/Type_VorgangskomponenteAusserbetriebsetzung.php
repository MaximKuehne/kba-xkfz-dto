<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteAusserbetriebsetzung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteAusserbetriebsetzung extends AbstractStructBase
{
    /**
     * The zulassungsbescheinigungTeil1
     * @var \THAG\XKfz\StructType\Type_AusserbetriebsetzungZulBeschTeil1|null
     */
    public ?\THAG\XKfz\StructType\Type_AusserbetriebsetzungZulBeschTeil1 $zulassungsbescheinigungTeil1 = null;
    /**
     * The zulassungsbescheinigungTeil2
     * @var \THAG\XKfz\StructType\Type_AusserbetriebsetzungZulBeschTeil2|null
     */
    public ?\THAG\XKfz\StructType\Type_AusserbetriebsetzungZulBeschTeil2 $zulassungsbescheinigungTeil2 = null;
    /**
     * The kennzeichen
     * @var \THAG\XKfz\StructType\Type_AusserbetriebsetzungKennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Type_AusserbetriebsetzungKennzeichen $kennzeichen = null;
    /**
     * The MerkmalReservierungKennzeichen
     * @var string|null
     */
    public ?string $MerkmalReservierungKennzeichen = null;
    /**
     * The pinReservierungKennzeichen
     * @var string|null
     */
    public ?string $pinReservierungKennzeichen = null;
    /**
     * The artDerReservierung
     * @var \THAG\XKfz\StructType\Code_ArtDerReservierung|null
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerReservierung $artDerReservierung = null;
    /**
     * Constructor method for Type.VorgangskomponenteAusserbetriebsetzung
     * @uses Type_VorgangskomponenteAusserbetriebsetzung::setZulassungsbescheinigungTeil1()
     * @uses Type_VorgangskomponenteAusserbetriebsetzung::setZulassungsbescheinigungTeil2()
     * @uses Type_VorgangskomponenteAusserbetriebsetzung::setKennzeichen()
     * @uses Type_VorgangskomponenteAusserbetriebsetzung::setMerkmalReservierungKennzeichen()
     * @uses Type_VorgangskomponenteAusserbetriebsetzung::setPinReservierungKennzeichen()
     * @uses Type_VorgangskomponenteAusserbetriebsetzung::setArtDerReservierung()
     * @param \THAG\XKfz\StructType\Type_AusserbetriebsetzungZulBeschTeil1 $zulassungsbescheinigungTeil1
     * @param \THAG\XKfz\StructType\Type_AusserbetriebsetzungZulBeschTeil2 $zulassungsbescheinigungTeil2
     * @param \THAG\XKfz\StructType\Type_AusserbetriebsetzungKennzeichen $kennzeichen
     * @param string $merkmalReservierungKennzeichen
     * @param string $pinReservierungKennzeichen
     * @param \THAG\XKfz\StructType\Code_ArtDerReservierung $artDerReservierung
     */
    public function __construct(?\THAG\XKfz\StructType\Type_AusserbetriebsetzungZulBeschTeil1 $zulassungsbescheinigungTeil1 = null, ?\THAG\XKfz\StructType\Type_AusserbetriebsetzungZulBeschTeil2 $zulassungsbescheinigungTeil2 = null, ?\THAG\XKfz\StructType\Type_AusserbetriebsetzungKennzeichen $kennzeichen = null, ?string $merkmalReservierungKennzeichen = null, ?string $pinReservierungKennzeichen = null, ?\THAG\XKfz\StructType\Code_ArtDerReservierung $artDerReservierung = null)
    {
        $this
            ->setZulassungsbescheinigungTeil1($zulassungsbescheinigungTeil1)
            ->setZulassungsbescheinigungTeil2($zulassungsbescheinigungTeil2)
            ->setKennzeichen($kennzeichen)
            ->setMerkmalReservierungKennzeichen($merkmalReservierungKennzeichen)
            ->setPinReservierungKennzeichen($pinReservierungKennzeichen)
            ->setArtDerReservierung($artDerReservierung);
    }
    /**
     * Get zulassungsbescheinigungTeil1 value
     * @return \THAG\XKfz\StructType\Type_AusserbetriebsetzungZulBeschTeil1|null
     */
    public function getZulassungsbescheinigungTeil1(): ?\THAG\XKfz\StructType\Type_AusserbetriebsetzungZulBeschTeil1
    {
        return $this->zulassungsbescheinigungTeil1;
    }
    /**
     * Set zulassungsbescheinigungTeil1 value
     * @param \THAG\XKfz\StructType\Type_AusserbetriebsetzungZulBeschTeil1 $zulassungsbescheinigungTeil1
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAusserbetriebsetzung
     */
    public function setZulassungsbescheinigungTeil1(?\THAG\XKfz\StructType\Type_AusserbetriebsetzungZulBeschTeil1 $zulassungsbescheinigungTeil1 = null): self
    {
        $this->zulassungsbescheinigungTeil1 = $zulassungsbescheinigungTeil1;
        
        return $this;
    }
    /**
     * Get zulassungsbescheinigungTeil2 value
     * @return \THAG\XKfz\StructType\Type_AusserbetriebsetzungZulBeschTeil2|null
     */
    public function getZulassungsbescheinigungTeil2(): ?\THAG\XKfz\StructType\Type_AusserbetriebsetzungZulBeschTeil2
    {
        return $this->zulassungsbescheinigungTeil2;
    }
    /**
     * Set zulassungsbescheinigungTeil2 value
     * @param \THAG\XKfz\StructType\Type_AusserbetriebsetzungZulBeschTeil2 $zulassungsbescheinigungTeil2
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAusserbetriebsetzung
     */
    public function setZulassungsbescheinigungTeil2(?\THAG\XKfz\StructType\Type_AusserbetriebsetzungZulBeschTeil2 $zulassungsbescheinigungTeil2 = null): self
    {
        $this->zulassungsbescheinigungTeil2 = $zulassungsbescheinigungTeil2;
        
        return $this;
    }
    /**
     * Get kennzeichen value
     * @return \THAG\XKfz\StructType\Type_AusserbetriebsetzungKennzeichen|null
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Type_AusserbetriebsetzungKennzeichen
    {
        return $this->kennzeichen;
    }
    /**
     * Set kennzeichen value
     * @param \THAG\XKfz\StructType\Type_AusserbetriebsetzungKennzeichen $kennzeichen
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAusserbetriebsetzung
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Type_AusserbetriebsetzungKennzeichen $kennzeichen = null): self
    {
        $this->kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get MerkmalReservierungKennzeichen value
     * @return string|null
     */
    public function getMerkmalReservierungKennzeichen(): ?string
    {
        return $this->MerkmalReservierungKennzeichen;
    }
    /**
     * Set MerkmalReservierungKennzeichen value
     * @param string $merkmalReservierungKennzeichen
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAusserbetriebsetzung
     */
    public function setMerkmalReservierungKennzeichen(?string $merkmalReservierungKennzeichen = null): self
    {
        $this->MerkmalReservierungKennzeichen = $merkmalReservierungKennzeichen;
        
        return $this;
    }
    /**
     * Get pinReservierungKennzeichen value
     * @return string|null
     */
    public function getPinReservierungKennzeichen(): ?string
    {
        return $this->pinReservierungKennzeichen;
    }
    /**
     * Set pinReservierungKennzeichen value
     * @param string $pinReservierungKennzeichen
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAusserbetriebsetzung
     */
    public function setPinReservierungKennzeichen(?string $pinReservierungKennzeichen = null): self
    {
        $this->pinReservierungKennzeichen = $pinReservierungKennzeichen;
        
        return $this;
    }
    /**
     * Get artDerReservierung value
     * @return \THAG\XKfz\StructType\Code_ArtDerReservierung|null
     */
    public function getArtDerReservierung(): ?\THAG\XKfz\StructType\Code_ArtDerReservierung
    {
        return $this->artDerReservierung;
    }
    /**
     * Set artDerReservierung value
     * @param \THAG\XKfz\StructType\Code_ArtDerReservierung $artDerReservierung
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAusserbetriebsetzung
     */
    public function setArtDerReservierung(?\THAG\XKfz\StructType\Code_ArtDerReservierung $artDerReservierung = null): self
    {
        $this->artDerReservierung = $artDerReservierung;
        
        return $this;
    }
}

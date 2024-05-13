<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteAusserbetriebsetzung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteAusserbetriebsetzung extends AbstractStructBase
{
    /**
     * The zulassungsbescheinigungTeil1
     */
    public ?\THAG\XKfz\StructType\Type_AusserbetriebsetzungZulBeschTeil1 $zulassungsbescheinigungTeil1 = null;

    /**
     * The zulassungsbescheinigungTeil2
     */
    public ?\THAG\XKfz\StructType\Type_AusserbetriebsetzungZulBeschTeil2 $zulassungsbescheinigungTeil2 = null;

    /**
     * The kennzeichen
     */
    public ?\THAG\XKfz\StructType\Type_AusserbetriebsetzungKennzeichen $kennzeichen = null;

    /**
     * The MerkmalReservierungKennzeichen
     */
    public ?string $MerkmalReservierungKennzeichen = null;

    /**
     * The pinReservierungKennzeichen
     */
    public ?string $pinReservierungKennzeichen = null;

    /**
     * The artDerReservierung
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerReservierung $artDerReservierung = null;

    /**
     * Constructor method for Type.VorgangskomponenteAusserbetriebsetzung
     *
     * @uses Type_VorgangskomponenteAusserbetriebsetzung::setZulassungsbescheinigungTeil1()
     * @uses Type_VorgangskomponenteAusserbetriebsetzung::setZulassungsbescheinigungTeil2()
     * @uses Type_VorgangskomponenteAusserbetriebsetzung::setKennzeichen()
     * @uses Type_VorgangskomponenteAusserbetriebsetzung::setMerkmalReservierungKennzeichen()
     * @uses Type_VorgangskomponenteAusserbetriebsetzung::setPinReservierungKennzeichen()
     * @uses Type_VorgangskomponenteAusserbetriebsetzung::setArtDerReservierung()
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
     */
    public function getZulassungsbescheinigungTeil1(): ?\THAG\XKfz\StructType\Type_AusserbetriebsetzungZulBeschTeil1
    {
        return $this->zulassungsbescheinigungTeil1;
    }

    /**
     * Set zulassungsbescheinigungTeil1 value
     */
    public function setZulassungsbescheinigungTeil1(?\THAG\XKfz\StructType\Type_AusserbetriebsetzungZulBeschTeil1 $zulassungsbescheinigungTeil1 = null): self
    {
        $this->zulassungsbescheinigungTeil1 = $zulassungsbescheinigungTeil1;

        return $this;
    }

    /**
     * Get zulassungsbescheinigungTeil2 value
     */
    public function getZulassungsbescheinigungTeil2(): ?\THAG\XKfz\StructType\Type_AusserbetriebsetzungZulBeschTeil2
    {
        return $this->zulassungsbescheinigungTeil2;
    }

    /**
     * Set zulassungsbescheinigungTeil2 value
     */
    public function setZulassungsbescheinigungTeil2(?\THAG\XKfz\StructType\Type_AusserbetriebsetzungZulBeschTeil2 $zulassungsbescheinigungTeil2 = null): self
    {
        $this->zulassungsbescheinigungTeil2 = $zulassungsbescheinigungTeil2;

        return $this;
    }

    /**
     * Get kennzeichen value
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Type_AusserbetriebsetzungKennzeichen
    {
        return $this->kennzeichen;
    }

    /**
     * Set kennzeichen value
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Type_AusserbetriebsetzungKennzeichen $kennzeichen = null): self
    {
        $this->kennzeichen = $kennzeichen;

        return $this;
    }

    /**
     * Get MerkmalReservierungKennzeichen value
     */
    public function getMerkmalReservierungKennzeichen(): ?string
    {
        return $this->MerkmalReservierungKennzeichen;
    }

    /**
     * Set MerkmalReservierungKennzeichen value
     */
    public function setMerkmalReservierungKennzeichen(?string $merkmalReservierungKennzeichen = null): self
    {
        $this->MerkmalReservierungKennzeichen = $merkmalReservierungKennzeichen;

        return $this;
    }

    /**
     * Get pinReservierungKennzeichen value
     */
    public function getPinReservierungKennzeichen(): ?string
    {
        return $this->pinReservierungKennzeichen;
    }

    /**
     * Set pinReservierungKennzeichen value
     */
    public function setPinReservierungKennzeichen(?string $pinReservierungKennzeichen = null): self
    {
        $this->pinReservierungKennzeichen = $pinReservierungKennzeichen;

        return $this;
    }

    /**
     * Get artDerReservierung value
     */
    public function getArtDerReservierung(): ?\THAG\XKfz\StructType\Code_ArtDerReservierung
    {
        return $this->artDerReservierung;
    }

    /**
     * Set artDerReservierung value
     */
    public function setArtDerReservierung(?\THAG\XKfz\StructType\Code_ArtDerReservierung $artDerReservierung = null): self
    {
        $this->artDerReservierung = $artDerReservierung;

        return $this;
    }
}

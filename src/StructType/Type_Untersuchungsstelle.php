<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Untersuchungsstelle StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Untersuchungsstelle extends AbstractStructBase
{
    /**
     * The schluesselnummerUeberwachungsinstitutionOderZDK
     */
    public ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK = null;

    /**
     * The kontrollnummerSP
     */
    public ?string $kontrollnummerSP = null;

    /**
     * The artDerUntersuchungsstelle
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerUntersuchungsstelle $artDerUntersuchungsstelle = null;

    /**
     * The schluesselPruefer
     */
    public ?string $schluesselPruefer = null;

    /**
     * Constructor method for Type.Untersuchungsstelle
     *
     * @uses Type_Untersuchungsstelle::setSchluesselnummerUeberwachungsinstitutionOderZDK()
     * @uses Type_Untersuchungsstelle::setKontrollnummerSP()
     * @uses Type_Untersuchungsstelle::setArtDerUntersuchungsstelle()
     * @uses Type_Untersuchungsstelle::setSchluesselPruefer()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK = null, ?string $kontrollnummerSP = null, ?\THAG\XKfz\StructType\Code_ArtDerUntersuchungsstelle $artDerUntersuchungsstelle = null, ?string $schluesselPruefer = null)
    {
        $this
            ->setSchluesselnummerUeberwachungsinstitutionOderZDK($schluesselnummerUeberwachungsinstitutionOderZDK)
            ->setKontrollnummerSP($kontrollnummerSP)
            ->setArtDerUntersuchungsstelle($artDerUntersuchungsstelle)
            ->setSchluesselPruefer($schluesselPruefer);
    }

    /**
     * Get schluesselnummerUeberwachungsinstitutionOderZDK value
     */
    public function getSchluesselnummerUeberwachungsinstitutionOderZDK(): ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK
    {
        return $this->schluesselnummerUeberwachungsinstitutionOderZDK;
    }

    /**
     * Set schluesselnummerUeberwachungsinstitutionOderZDK value
     */
    public function setSchluesselnummerUeberwachungsinstitutionOderZDK(?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK = null): self
    {
        $this->schluesselnummerUeberwachungsinstitutionOderZDK = $schluesselnummerUeberwachungsinstitutionOderZDK;

        return $this;
    }

    /**
     * Get kontrollnummerSP value
     */
    public function getKontrollnummerSP(): ?string
    {
        return $this->kontrollnummerSP;
    }

    /**
     * Set kontrollnummerSP value
     */
    public function setKontrollnummerSP(?string $kontrollnummerSP = null): self
    {
        $this->kontrollnummerSP = $kontrollnummerSP;

        return $this;
    }

    /**
     * Get artDerUntersuchungsstelle value
     */
    public function getArtDerUntersuchungsstelle(): ?\THAG\XKfz\StructType\Code_ArtDerUntersuchungsstelle
    {
        return $this->artDerUntersuchungsstelle;
    }

    /**
     * Set artDerUntersuchungsstelle value
     */
    public function setArtDerUntersuchungsstelle(?\THAG\XKfz\StructType\Code_ArtDerUntersuchungsstelle $artDerUntersuchungsstelle = null): self
    {
        $this->artDerUntersuchungsstelle = $artDerUntersuchungsstelle;

        return $this;
    }

    /**
     * Get schluesselPruefer value
     */
    public function getSchluesselPruefer(): ?string
    {
        return $this->schluesselPruefer;
    }

    /**
     * Set schluesselPruefer value
     */
    public function setSchluesselPruefer(?string $schluesselPruefer = null): self
    {
        $this->schluesselPruefer = $schluesselPruefer;

        return $this;
    }
}

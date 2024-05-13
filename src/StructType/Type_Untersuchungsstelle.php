<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Untersuchungsstelle StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Untersuchungsstelle extends AbstractStructBase
{
    /**
     * The schluesselnummerUeberwachungsinstitutionOderZDK
     * @var \THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK|null
     */
    public ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK = null;
    /**
     * The kontrollnummerSP
     * @var string|null
     */
    public ?string $kontrollnummerSP = null;
    /**
     * The artDerUntersuchungsstelle
     * @var \THAG\XKfz\StructType\Code_ArtDerUntersuchungsstelle|null
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerUntersuchungsstelle $artDerUntersuchungsstelle = null;
    /**
     * The schluesselPruefer
     * @var string|null
     */
    public ?string $schluesselPruefer = null;
    /**
     * Constructor method for Type.Untersuchungsstelle
     * @uses Type_Untersuchungsstelle::setSchluesselnummerUeberwachungsinstitutionOderZDK()
     * @uses Type_Untersuchungsstelle::setKontrollnummerSP()
     * @uses Type_Untersuchungsstelle::setArtDerUntersuchungsstelle()
     * @uses Type_Untersuchungsstelle::setSchluesselPruefer()
     * @param \THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK
     * @param string $kontrollnummerSP
     * @param \THAG\XKfz\StructType\Code_ArtDerUntersuchungsstelle $artDerUntersuchungsstelle
     * @param string $schluesselPruefer
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
     * @return \THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK|null
     */
    public function getSchluesselnummerUeberwachungsinstitutionOderZDK(): ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK
    {
        return $this->schluesselnummerUeberwachungsinstitutionOderZDK;
    }
    /**
     * Set schluesselnummerUeberwachungsinstitutionOderZDK value
     * @param \THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK
     * @return \THAG\XKfz\StructType\Type_Untersuchungsstelle
     */
    public function setSchluesselnummerUeberwachungsinstitutionOderZDK(?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK = null): self
    {
        $this->schluesselnummerUeberwachungsinstitutionOderZDK = $schluesselnummerUeberwachungsinstitutionOderZDK;
        
        return $this;
    }
    /**
     * Get kontrollnummerSP value
     * @return string|null
     */
    public function getKontrollnummerSP(): ?string
    {
        return $this->kontrollnummerSP;
    }
    /**
     * Set kontrollnummerSP value
     * @param string $kontrollnummerSP
     * @return \THAG\XKfz\StructType\Type_Untersuchungsstelle
     */
    public function setKontrollnummerSP(?string $kontrollnummerSP = null): self
    {
        $this->kontrollnummerSP = $kontrollnummerSP;
        
        return $this;
    }
    /**
     * Get artDerUntersuchungsstelle value
     * @return \THAG\XKfz\StructType\Code_ArtDerUntersuchungsstelle|null
     */
    public function getArtDerUntersuchungsstelle(): ?\THAG\XKfz\StructType\Code_ArtDerUntersuchungsstelle
    {
        return $this->artDerUntersuchungsstelle;
    }
    /**
     * Set artDerUntersuchungsstelle value
     * @param \THAG\XKfz\StructType\Code_ArtDerUntersuchungsstelle $artDerUntersuchungsstelle
     * @return \THAG\XKfz\StructType\Type_Untersuchungsstelle
     */
    public function setArtDerUntersuchungsstelle(?\THAG\XKfz\StructType\Code_ArtDerUntersuchungsstelle $artDerUntersuchungsstelle = null): self
    {
        $this->artDerUntersuchungsstelle = $artDerUntersuchungsstelle;
        
        return $this;
    }
    /**
     * Get schluesselPruefer value
     * @return string|null
     */
    public function getSchluesselPruefer(): ?string
    {
        return $this->schluesselPruefer;
    }
    /**
     * Set schluesselPruefer value
     * @param string $schluesselPruefer
     * @return \THAG\XKfz\StructType\Type_Untersuchungsstelle
     */
    public function setSchluesselPruefer(?string $schluesselPruefer = null): self
    {
        $this->schluesselPruefer = $schluesselPruefer;
        
        return $this;
    }
}

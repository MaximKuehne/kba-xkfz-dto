<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteHauptuntersuchung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteHauptuntersuchung extends AbstractStructBase
{
    /**
     * The prueforganisation
     * @var \THAG\XKfz\StructType\Code_Prueforganisation|null
     */
    public ?\THAG\XKfz\StructType\Code_Prueforganisation $prueforganisation = null;
    /**
     * The gutachtennummer
     * @var string|null
     */
    public ?string $gutachtennummer = null;
    /**
     * The datumDesGutachtens
     * @var string|null
     */
    public ?string $datumDesGutachtens = null;
    /**
     * The NaechsteHauptuntersuchung
     * @var string|null
     */
    public ?string $NaechsteHauptuntersuchung = null;
    /**
     * The NaechsteSicherheitspruefung
     * @var string|null
     */
    public ?string $NaechsteSicherheitspruefung = null;
    /**
     * The artDerUntersuchung
     * @var \THAG\XKfz\StructType\Code_ArtDerUntersuchung|null
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung = null;
    /**
     * The schluesselnummerDerUeberwachungsinstitutionOderZDK
     * @var \THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK|null
     */
    public ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerDerUeberwachungsinstitutionOderZDK = null;
    /**
     * The DatumUntersuchung
     * @var string|null
     */
    public ?string $DatumUntersuchung = null;
    /**
     * The MerkmalHUExpressVerfahren
     * @var bool|null
     */
    public ?bool $MerkmalHUExpressVerfahren = null;
    /**
     * The pruefziffer
     * @var string|null
     */
    public ?string $pruefziffer = null;
    /**
     * Constructor method for Type.VorgangskomponenteHauptuntersuchung
     * @uses Type_VorgangskomponenteHauptuntersuchung::setPrueforganisation()
     * @uses Type_VorgangskomponenteHauptuntersuchung::setGutachtennummer()
     * @uses Type_VorgangskomponenteHauptuntersuchung::setDatumDesGutachtens()
     * @uses Type_VorgangskomponenteHauptuntersuchung::setNaechsteHauptuntersuchung()
     * @uses Type_VorgangskomponenteHauptuntersuchung::setNaechsteSicherheitspruefung()
     * @uses Type_VorgangskomponenteHauptuntersuchung::setArtDerUntersuchung()
     * @uses Type_VorgangskomponenteHauptuntersuchung::setSchluesselnummerDerUeberwachungsinstitutionOderZDK()
     * @uses Type_VorgangskomponenteHauptuntersuchung::setDatumUntersuchung()
     * @uses Type_VorgangskomponenteHauptuntersuchung::setMerkmalHUExpressVerfahren()
     * @uses Type_VorgangskomponenteHauptuntersuchung::setPruefziffer()
     * @param \THAG\XKfz\StructType\Code_Prueforganisation $prueforganisation
     * @param string $gutachtennummer
     * @param string $datumDesGutachtens
     * @param string $naechsteHauptuntersuchung
     * @param string $naechsteSicherheitspruefung
     * @param \THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung
     * @param \THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerDerUeberwachungsinstitutionOderZDK
     * @param string $datumUntersuchung
     * @param bool $merkmalHUExpressVerfahren
     * @param string $pruefziffer
     */
    public function __construct(?\THAG\XKfz\StructType\Code_Prueforganisation $prueforganisation = null, ?string $gutachtennummer = null, ?string $datumDesGutachtens = null, ?string $naechsteHauptuntersuchung = null, ?string $naechsteSicherheitspruefung = null, ?\THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung = null, ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerDerUeberwachungsinstitutionOderZDK = null, ?string $datumUntersuchung = null, ?bool $merkmalHUExpressVerfahren = null, ?string $pruefziffer = null)
    {
        $this
            ->setPrueforganisation($prueforganisation)
            ->setGutachtennummer($gutachtennummer)
            ->setDatumDesGutachtens($datumDesGutachtens)
            ->setNaechsteHauptuntersuchung($naechsteHauptuntersuchung)
            ->setNaechsteSicherheitspruefung($naechsteSicherheitspruefung)
            ->setArtDerUntersuchung($artDerUntersuchung)
            ->setSchluesselnummerDerUeberwachungsinstitutionOderZDK($schluesselnummerDerUeberwachungsinstitutionOderZDK)
            ->setDatumUntersuchung($datumUntersuchung)
            ->setMerkmalHUExpressVerfahren($merkmalHUExpressVerfahren)
            ->setPruefziffer($pruefziffer);
    }
    /**
     * Get prueforganisation value
     * @return \THAG\XKfz\StructType\Code_Prueforganisation|null
     */
    public function getPrueforganisation(): ?\THAG\XKfz\StructType\Code_Prueforganisation
    {
        return $this->prueforganisation;
    }
    /**
     * Set prueforganisation value
     * @param \THAG\XKfz\StructType\Code_Prueforganisation $prueforganisation
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteHauptuntersuchung
     */
    public function setPrueforganisation(?\THAG\XKfz\StructType\Code_Prueforganisation $prueforganisation = null): self
    {
        $this->prueforganisation = $prueforganisation;
        
        return $this;
    }
    /**
     * Get gutachtennummer value
     * @return string|null
     */
    public function getGutachtennummer(): ?string
    {
        return $this->gutachtennummer;
    }
    /**
     * Set gutachtennummer value
     * @param string $gutachtennummer
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteHauptuntersuchung
     */
    public function setGutachtennummer(?string $gutachtennummer = null): self
    {
        $this->gutachtennummer = $gutachtennummer;
        
        return $this;
    }
    /**
     * Get datumDesGutachtens value
     * @return string|null
     */
    public function getDatumDesGutachtens(): ?string
    {
        return $this->datumDesGutachtens;
    }
    /**
     * Set datumDesGutachtens value
     * @param string $datumDesGutachtens
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteHauptuntersuchung
     */
    public function setDatumDesGutachtens(?string $datumDesGutachtens = null): self
    {
        $this->datumDesGutachtens = $datumDesGutachtens;
        
        return $this;
    }
    /**
     * Get NaechsteHauptuntersuchung value
     * @return string|null
     */
    public function getNaechsteHauptuntersuchung(): ?string
    {
        return $this->NaechsteHauptuntersuchung;
    }
    /**
     * Set NaechsteHauptuntersuchung value
     * @param string $naechsteHauptuntersuchung
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteHauptuntersuchung
     */
    public function setNaechsteHauptuntersuchung(?string $naechsteHauptuntersuchung = null): self
    {
        $this->NaechsteHauptuntersuchung = $naechsteHauptuntersuchung;
        
        return $this;
    }
    /**
     * Get NaechsteSicherheitspruefung value
     * @return string|null
     */
    public function getNaechsteSicherheitspruefung(): ?string
    {
        return $this->NaechsteSicherheitspruefung;
    }
    /**
     * Set NaechsteSicherheitspruefung value
     * @param string $naechsteSicherheitspruefung
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteHauptuntersuchung
     */
    public function setNaechsteSicherheitspruefung(?string $naechsteSicherheitspruefung = null): self
    {
        $this->NaechsteSicherheitspruefung = $naechsteSicherheitspruefung;
        
        return $this;
    }
    /**
     * Get artDerUntersuchung value
     * @return \THAG\XKfz\StructType\Code_ArtDerUntersuchung|null
     */
    public function getArtDerUntersuchung(): ?\THAG\XKfz\StructType\Code_ArtDerUntersuchung
    {
        return $this->artDerUntersuchung;
    }
    /**
     * Set artDerUntersuchung value
     * @param \THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteHauptuntersuchung
     */
    public function setArtDerUntersuchung(?\THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung = null): self
    {
        $this->artDerUntersuchung = $artDerUntersuchung;
        
        return $this;
    }
    /**
     * Get schluesselnummerDerUeberwachungsinstitutionOderZDK value
     * @return \THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK|null
     */
    public function getSchluesselnummerDerUeberwachungsinstitutionOderZDK(): ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK
    {
        return $this->schluesselnummerDerUeberwachungsinstitutionOderZDK;
    }
    /**
     * Set schluesselnummerDerUeberwachungsinstitutionOderZDK value
     * @param \THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerDerUeberwachungsinstitutionOderZDK
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteHauptuntersuchung
     */
    public function setSchluesselnummerDerUeberwachungsinstitutionOderZDK(?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerDerUeberwachungsinstitutionOderZDK = null): self
    {
        $this->schluesselnummerDerUeberwachungsinstitutionOderZDK = $schluesselnummerDerUeberwachungsinstitutionOderZDK;
        
        return $this;
    }
    /**
     * Get DatumUntersuchung value
     * @return string|null
     */
    public function getDatumUntersuchung(): ?string
    {
        return $this->DatumUntersuchung;
    }
    /**
     * Set DatumUntersuchung value
     * @param string $datumUntersuchung
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteHauptuntersuchung
     */
    public function setDatumUntersuchung(?string $datumUntersuchung = null): self
    {
        $this->DatumUntersuchung = $datumUntersuchung;
        
        return $this;
    }
    /**
     * Get MerkmalHUExpressVerfahren value
     * @return bool|null
     */
    public function getMerkmalHUExpressVerfahren(): ?bool
    {
        return $this->MerkmalHUExpressVerfahren;
    }
    /**
     * Set MerkmalHUExpressVerfahren value
     * @param bool $merkmalHUExpressVerfahren
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteHauptuntersuchung
     */
    public function setMerkmalHUExpressVerfahren(?bool $merkmalHUExpressVerfahren = null): self
    {
        $this->MerkmalHUExpressVerfahren = $merkmalHUExpressVerfahren;
        
        return $this;
    }
    /**
     * Get pruefziffer value
     * @return string|null
     */
    public function getPruefziffer(): ?string
    {
        return $this->pruefziffer;
    }
    /**
     * Set pruefziffer value
     * @param string $pruefziffer
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteHauptuntersuchung
     */
    public function setPruefziffer(?string $pruefziffer = null): self
    {
        $this->pruefziffer = $pruefziffer;
        
        return $this;
    }
}

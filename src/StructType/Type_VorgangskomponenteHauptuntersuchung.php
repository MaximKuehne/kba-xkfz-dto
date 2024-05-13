<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteHauptuntersuchung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteHauptuntersuchung extends AbstractStructBase
{
    /**
     * The prueforganisation
     */
    public ?\THAG\XKfz\StructType\Code_Prueforganisation $prueforganisation = null;

    /**
     * The gutachtennummer
     */
    public ?string $gutachtennummer = null;

    /**
     * The datumDesGutachtens
     */
    public ?string $datumDesGutachtens = null;

    /**
     * The NaechsteHauptuntersuchung
     */
    public ?string $NaechsteHauptuntersuchung = null;

    /**
     * The NaechsteSicherheitspruefung
     */
    public ?string $NaechsteSicherheitspruefung = null;

    /**
     * The artDerUntersuchung
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung = null;

    /**
     * The schluesselnummerDerUeberwachungsinstitutionOderZDK
     */
    public ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerDerUeberwachungsinstitutionOderZDK = null;

    /**
     * The DatumUntersuchung
     */
    public ?string $DatumUntersuchung = null;

    /**
     * The MerkmalHUExpressVerfahren
     */
    public ?bool $MerkmalHUExpressVerfahren = null;

    /**
     * The pruefziffer
     */
    public ?string $pruefziffer = null;

    /**
     * Constructor method for Type.VorgangskomponenteHauptuntersuchung
     *
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
     */
    public function getPrueforganisation(): ?\THAG\XKfz\StructType\Code_Prueforganisation
    {
        return $this->prueforganisation;
    }

    /**
     * Set prueforganisation value
     */
    public function setPrueforganisation(?\THAG\XKfz\StructType\Code_Prueforganisation $prueforganisation = null): self
    {
        $this->prueforganisation = $prueforganisation;

        return $this;
    }

    /**
     * Get gutachtennummer value
     */
    public function getGutachtennummer(): ?string
    {
        return $this->gutachtennummer;
    }

    /**
     * Set gutachtennummer value
     */
    public function setGutachtennummer(?string $gutachtennummer = null): self
    {
        $this->gutachtennummer = $gutachtennummer;

        return $this;
    }

    /**
     * Get datumDesGutachtens value
     */
    public function getDatumDesGutachtens(): ?string
    {
        return $this->datumDesGutachtens;
    }

    /**
     * Set datumDesGutachtens value
     */
    public function setDatumDesGutachtens(?string $datumDesGutachtens = null): self
    {
        $this->datumDesGutachtens = $datumDesGutachtens;

        return $this;
    }

    /**
     * Get NaechsteHauptuntersuchung value
     */
    public function getNaechsteHauptuntersuchung(): ?string
    {
        return $this->NaechsteHauptuntersuchung;
    }

    /**
     * Set NaechsteHauptuntersuchung value
     */
    public function setNaechsteHauptuntersuchung(?string $naechsteHauptuntersuchung = null): self
    {
        $this->NaechsteHauptuntersuchung = $naechsteHauptuntersuchung;

        return $this;
    }

    /**
     * Get NaechsteSicherheitspruefung value
     */
    public function getNaechsteSicherheitspruefung(): ?string
    {
        return $this->NaechsteSicherheitspruefung;
    }

    /**
     * Set NaechsteSicherheitspruefung value
     */
    public function setNaechsteSicherheitspruefung(?string $naechsteSicherheitspruefung = null): self
    {
        $this->NaechsteSicherheitspruefung = $naechsteSicherheitspruefung;

        return $this;
    }

    /**
     * Get artDerUntersuchung value
     */
    public function getArtDerUntersuchung(): ?\THAG\XKfz\StructType\Code_ArtDerUntersuchung
    {
        return $this->artDerUntersuchung;
    }

    /**
     * Set artDerUntersuchung value
     */
    public function setArtDerUntersuchung(?\THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung = null): self
    {
        $this->artDerUntersuchung = $artDerUntersuchung;

        return $this;
    }

    /**
     * Get schluesselnummerDerUeberwachungsinstitutionOderZDK value
     */
    public function getSchluesselnummerDerUeberwachungsinstitutionOderZDK(): ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK
    {
        return $this->schluesselnummerDerUeberwachungsinstitutionOderZDK;
    }

    /**
     * Set schluesselnummerDerUeberwachungsinstitutionOderZDK value
     */
    public function setSchluesselnummerDerUeberwachungsinstitutionOderZDK(?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerDerUeberwachungsinstitutionOderZDK = null): self
    {
        $this->schluesselnummerDerUeberwachungsinstitutionOderZDK = $schluesselnummerDerUeberwachungsinstitutionOderZDK;

        return $this;
    }

    /**
     * Get DatumUntersuchung value
     */
    public function getDatumUntersuchung(): ?string
    {
        return $this->DatumUntersuchung;
    }

    /**
     * Set DatumUntersuchung value
     */
    public function setDatumUntersuchung(?string $datumUntersuchung = null): self
    {
        $this->DatumUntersuchung = $datumUntersuchung;

        return $this;
    }

    /**
     * Get MerkmalHUExpressVerfahren value
     */
    public function getMerkmalHUExpressVerfahren(): ?bool
    {
        return $this->MerkmalHUExpressVerfahren;
    }

    /**
     * Set MerkmalHUExpressVerfahren value
     */
    public function setMerkmalHUExpressVerfahren(?bool $merkmalHUExpressVerfahren = null): self
    {
        $this->MerkmalHUExpressVerfahren = $merkmalHUExpressVerfahren;

        return $this;
    }

    /**
     * Get pruefziffer value
     */
    public function getPruefziffer(): ?string
    {
        return $this->pruefziffer;
    }

    /**
     * Set pruefziffer value
     */
    public function setPruefziffer(?string $pruefziffer = null): self
    {
        $this->pruefziffer = $pruefziffer;

        return $this;
    }
}

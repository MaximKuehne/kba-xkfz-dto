<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.NachweisSP StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_NachweisSP extends AbstractStructBase
{
    /**
     * The NaechsteSicherheitspruefung
     */
    public ?string $NaechsteSicherheitspruefung = null;

    /**
     * The pruefziffer
     */
    public ?string $pruefziffer = null;

    /**
     * The DatumUntersuchung
     */
    public ?string $DatumUntersuchung = null;

    /**
     * The schluesselnummerDerUeberwachungsinstitutionOderZDK
     */
    public ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerDerUeberwachungsinstitutionOderZDK = null;

    /**
     * Constructor method for Type.NachweisSP
     *
     * @uses Type_NachweisSP::setNaechsteSicherheitspruefung()
     * @uses Type_NachweisSP::setPruefziffer()
     * @uses Type_NachweisSP::setDatumUntersuchung()
     * @uses Type_NachweisSP::setSchluesselnummerDerUeberwachungsinstitutionOderZDK()
     */
    public function __construct(?string $naechsteSicherheitspruefung = null, ?string $pruefziffer = null, ?string $datumUntersuchung = null, ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerDerUeberwachungsinstitutionOderZDK = null)
    {
        $this
            ->setNaechsteSicherheitspruefung($naechsteSicherheitspruefung)
            ->setPruefziffer($pruefziffer)
            ->setDatumUntersuchung($datumUntersuchung)
            ->setSchluesselnummerDerUeberwachungsinstitutionOderZDK($schluesselnummerDerUeberwachungsinstitutionOderZDK);
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
}

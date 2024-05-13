<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.NachweisHU StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_NachweisHU extends AbstractStructBase
{
    /**
     * The NaechsteHauptuntersuchung
     */
    public ?string $NaechsteHauptuntersuchung = null;

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
     * Constructor method for Type.NachweisHU
     *
     * @uses Type_NachweisHU::setNaechsteHauptuntersuchung()
     * @uses Type_NachweisHU::setPruefziffer()
     * @uses Type_NachweisHU::setDatumUntersuchung()
     * @uses Type_NachweisHU::setSchluesselnummerDerUeberwachungsinstitutionOderZDK()
     */
    public function __construct(?string $naechsteHauptuntersuchung = null, ?string $pruefziffer = null, ?string $datumUntersuchung = null, ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerDerUeberwachungsinstitutionOderZDK = null)
    {
        $this
            ->setNaechsteHauptuntersuchung($naechsteHauptuntersuchung)
            ->setPruefziffer($pruefziffer)
            ->setDatumUntersuchung($datumUntersuchung)
            ->setSchluesselnummerDerUeberwachungsinstitutionOderZDK($schluesselnummerDerUeberwachungsinstitutionOderZDK);
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

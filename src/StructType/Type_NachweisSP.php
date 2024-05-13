<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.NachweisSP StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_NachweisSP extends AbstractStructBase
{
    /**
     * The NaechsteSicherheitspruefung
     * @var string|null
     */
    public ?string $NaechsteSicherheitspruefung = null;
    /**
     * The pruefziffer
     * @var string|null
     */
    public ?string $pruefziffer = null;
    /**
     * The DatumUntersuchung
     * @var string|null
     */
    public ?string $DatumUntersuchung = null;
    /**
     * The schluesselnummerDerUeberwachungsinstitutionOderZDK
     * @var \THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK|null
     */
    public ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerDerUeberwachungsinstitutionOderZDK = null;
    /**
     * Constructor method for Type.NachweisSP
     * @uses Type_NachweisSP::setNaechsteSicherheitspruefung()
     * @uses Type_NachweisSP::setPruefziffer()
     * @uses Type_NachweisSP::setDatumUntersuchung()
     * @uses Type_NachweisSP::setSchluesselnummerDerUeberwachungsinstitutionOderZDK()
     * @param string $naechsteSicherheitspruefung
     * @param string $pruefziffer
     * @param string $datumUntersuchung
     * @param \THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerDerUeberwachungsinstitutionOderZDK
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
     * @return string|null
     */
    public function getNaechsteSicherheitspruefung(): ?string
    {
        return $this->NaechsteSicherheitspruefung;
    }
    /**
     * Set NaechsteSicherheitspruefung value
     * @param string $naechsteSicherheitspruefung
     * @return \THAG\XKfz\StructType\Type_NachweisSP
     */
    public function setNaechsteSicherheitspruefung(?string $naechsteSicherheitspruefung = null): self
    {
        $this->NaechsteSicherheitspruefung = $naechsteSicherheitspruefung;
        
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
     * @return \THAG\XKfz\StructType\Type_NachweisSP
     */
    public function setPruefziffer(?string $pruefziffer = null): self
    {
        $this->pruefziffer = $pruefziffer;
        
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
     * @return \THAG\XKfz\StructType\Type_NachweisSP
     */
    public function setDatumUntersuchung(?string $datumUntersuchung = null): self
    {
        $this->DatumUntersuchung = $datumUntersuchung;
        
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
     * @return \THAG\XKfz\StructType\Type_NachweisSP
     */
    public function setSchluesselnummerDerUeberwachungsinstitutionOderZDK(?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerDerUeberwachungsinstitutionOderZDK = null): self
    {
        $this->schluesselnummerDerUeberwachungsinstitutionOderZDK = $schluesselnummerDerUeberwachungsinstitutionOderZDK;
        
        return $this;
    }
}

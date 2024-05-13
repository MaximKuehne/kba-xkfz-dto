<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.NachweisHU StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_NachweisHU extends AbstractStructBase
{
    /**
     * The NaechsteHauptuntersuchung
     * @var string|null
     */
    public ?string $NaechsteHauptuntersuchung = null;
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
     * Constructor method for Type.NachweisHU
     * @uses Type_NachweisHU::setNaechsteHauptuntersuchung()
     * @uses Type_NachweisHU::setPruefziffer()
     * @uses Type_NachweisHU::setDatumUntersuchung()
     * @uses Type_NachweisHU::setSchluesselnummerDerUeberwachungsinstitutionOderZDK()
     * @param string $naechsteHauptuntersuchung
     * @param string $pruefziffer
     * @param string $datumUntersuchung
     * @param \THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerDerUeberwachungsinstitutionOderZDK
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
     * @return string|null
     */
    public function getNaechsteHauptuntersuchung(): ?string
    {
        return $this->NaechsteHauptuntersuchung;
    }
    /**
     * Set NaechsteHauptuntersuchung value
     * @param string $naechsteHauptuntersuchung
     * @return \THAG\XKfz\StructType\Type_NachweisHU
     */
    public function setNaechsteHauptuntersuchung(?string $naechsteHauptuntersuchung = null): self
    {
        $this->NaechsteHauptuntersuchung = $naechsteHauptuntersuchung;
        
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
     * @return \THAG\XKfz\StructType\Type_NachweisHU
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
     * @return \THAG\XKfz\StructType\Type_NachweisHU
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
     * @return \THAG\XKfz\StructType\Type_NachweisHU
     */
    public function setSchluesselnummerDerUeberwachungsinstitutionOderZDK(?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerDerUeberwachungsinstitutionOderZDK = null): self
    {
        $this->schluesselnummerDerUeberwachungsinstitutionOderZDK = $schluesselnummerDerUeberwachungsinstitutionOderZDK;
        
        return $this;
    }
}

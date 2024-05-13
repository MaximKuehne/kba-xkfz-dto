<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Hauptuntersuchung.ErgebnisDatumHauptuntersuchung.0302
 * StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Hauptuntersuchung_ErgebnisDatumHauptuntersuchung_0302 extends AbstractStructBase
{
    /**
     * The datumHauptuntersuchung
     * @var \THAG\XKfz\StructType\DatumHauptuntersuchung|null
     */
    public ?\THAG\XKfz\StructType\DatumHauptuntersuchung $datumHauptuntersuchung = null;
    /**
     * Constructor method for
     * Type.Hauptuntersuchung.ErgebnisDatumHauptuntersuchung.0302
     * @uses Type_Hauptuntersuchung_ErgebnisDatumHauptuntersuchung_0302::setDatumHauptuntersuchung()
     * @param \THAG\XKfz\StructType\DatumHauptuntersuchung $datumHauptuntersuchung
     */
    public function __construct(?\THAG\XKfz\StructType\DatumHauptuntersuchung $datumHauptuntersuchung = null)
    {
        $this
            ->setDatumHauptuntersuchung($datumHauptuntersuchung);
    }
    /**
     * Get datumHauptuntersuchung value
     * @return \THAG\XKfz\StructType\DatumHauptuntersuchung|null
     */
    public function getDatumHauptuntersuchung(): ?\THAG\XKfz\StructType\DatumHauptuntersuchung
    {
        return $this->datumHauptuntersuchung;
    }
    /**
     * Set datumHauptuntersuchung value
     * @param \THAG\XKfz\StructType\DatumHauptuntersuchung $datumHauptuntersuchung
     * @return \THAG\XKfz\StructType\Type_Hauptuntersuchung_ErgebnisDatumHauptuntersuchung_0302
     */
    public function setDatumHauptuntersuchung(?\THAG\XKfz\StructType\DatumHauptuntersuchung $datumHauptuntersuchung = null): self
    {
        $this->datumHauptuntersuchung = $datumHauptuntersuchung;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Hauptuntersuchung.AnfrageDatumHauptuntersuchung.0301
 * StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Hauptuntersuchung_AnfrageDatumHauptuntersuchung_0301 extends AbstractStructBase
{
    /**
     * The datumHauptuntersuchungAnfragen
     * @var \THAG\XKfz\StructType\DatumHauptuntersuchungAnfragen|null
     */
    public ?\THAG\XKfz\StructType\DatumHauptuntersuchungAnfragen $datumHauptuntersuchungAnfragen = null;
    /**
     * Constructor method for Type.Hauptuntersuchung.AnfrageDatumHauptuntersuchung.0301
     * @uses Type_Hauptuntersuchung_AnfrageDatumHauptuntersuchung_0301::setDatumHauptuntersuchungAnfragen()
     * @param \THAG\XKfz\StructType\DatumHauptuntersuchungAnfragen $datumHauptuntersuchungAnfragen
     */
    public function __construct(?\THAG\XKfz\StructType\DatumHauptuntersuchungAnfragen $datumHauptuntersuchungAnfragen = null)
    {
        $this
            ->setDatumHauptuntersuchungAnfragen($datumHauptuntersuchungAnfragen);
    }
    /**
     * Get datumHauptuntersuchungAnfragen value
     * @return \THAG\XKfz\StructType\DatumHauptuntersuchungAnfragen|null
     */
    public function getDatumHauptuntersuchungAnfragen(): ?\THAG\XKfz\StructType\DatumHauptuntersuchungAnfragen
    {
        return $this->datumHauptuntersuchungAnfragen;
    }
    /**
     * Set datumHauptuntersuchungAnfragen value
     * @param \THAG\XKfz\StructType\DatumHauptuntersuchungAnfragen $datumHauptuntersuchungAnfragen
     * @return \THAG\XKfz\StructType\Type_Hauptuntersuchung_AnfrageDatumHauptuntersuchung_0301
     */
    public function setDatumHauptuntersuchungAnfragen(?\THAG\XKfz\StructType\DatumHauptuntersuchungAnfragen $datumHauptuntersuchungAnfragen = null): self
    {
        $this->datumHauptuntersuchungAnfragen = $datumHauptuntersuchungAnfragen;
        
        return $this;
    }
}

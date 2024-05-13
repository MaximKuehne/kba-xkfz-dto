<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Hauptuntersuchung.ErgebnisDatumHauptuntersuchung.0302
 * StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Hauptuntersuchung_ErgebnisDatumHauptuntersuchung_0302 extends AbstractStructBase
{
    /**
     * The datumHauptuntersuchung
     */
    public ?\THAG\XKfz\StructType\DatumHauptuntersuchung $datumHauptuntersuchung = null;

    /**
     * Constructor method for
     * Type.Hauptuntersuchung.ErgebnisDatumHauptuntersuchung.0302
     *
     * @uses Type_Hauptuntersuchung_ErgebnisDatumHauptuntersuchung_0302::setDatumHauptuntersuchung()
     */
    public function __construct(?\THAG\XKfz\StructType\DatumHauptuntersuchung $datumHauptuntersuchung = null)
    {
        $this
            ->setDatumHauptuntersuchung($datumHauptuntersuchung);
    }

    /**
     * Get datumHauptuntersuchung value
     */
    public function getDatumHauptuntersuchung(): ?\THAG\XKfz\StructType\DatumHauptuntersuchung
    {
        return $this->datumHauptuntersuchung;
    }

    /**
     * Set datumHauptuntersuchung value
     */
    public function setDatumHauptuntersuchung(?\THAG\XKfz\StructType\DatumHauptuntersuchung $datumHauptuntersuchung = null): self
    {
        $this->datumHauptuntersuchung = $datumHauptuntersuchung;

        return $this;
    }
}

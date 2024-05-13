<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kommunikation.Quittung.0002 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kommunikation_Quittung_0002 extends AbstractStructBase
{
    /**
     * The quittung
     */
    public ?\THAG\XKfz\StructType\Quittung_1 $quittung = null;

    /**
     * Constructor method for Type.Kommunikation.Quittung.0002
     *
     * @uses Type_Kommunikation_Quittung_0002::setQuittung()
     */
    public function __construct(?\THAG\XKfz\StructType\Quittung_1 $quittung = null)
    {
        $this
            ->setQuittung($quittung);
    }

    /**
     * Get quittung value
     */
    public function getQuittung(): ?\THAG\XKfz\StructType\Quittung_1
    {
        return $this->quittung;
    }

    /**
     * Set quittung value
     */
    public function setQuittung(?\THAG\XKfz\StructType\Quittung_1 $quittung = null): self
    {
        $this->quittung = $quittung;

        return $this;
    }
}

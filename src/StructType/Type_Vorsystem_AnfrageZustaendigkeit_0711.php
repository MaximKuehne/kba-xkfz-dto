<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Vorsystem.AnfrageZustaendigkeit.0711 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Vorsystem_AnfrageZustaendigkeit_0711 extends AbstractStructBase
{
    /**
     * The anfrageZustaendigkeit
     */
    public ?\THAG\XKfz\StructType\AnfrageZustaendigkeit $anfrageZustaendigkeit = null;

    /**
     * Constructor method for Type.Vorsystem.AnfrageZustaendigkeit.0711
     *
     * @uses Type_Vorsystem_AnfrageZustaendigkeit_0711::setAnfrageZustaendigkeit()
     */
    public function __construct(?\THAG\XKfz\StructType\AnfrageZustaendigkeit $anfrageZustaendigkeit = null)
    {
        $this
            ->setAnfrageZustaendigkeit($anfrageZustaendigkeit);
    }

    /**
     * Get anfrageZustaendigkeit value
     */
    public function getAnfrageZustaendigkeit(): ?\THAG\XKfz\StructType\AnfrageZustaendigkeit
    {
        return $this->anfrageZustaendigkeit;
    }

    /**
     * Set anfrageZustaendigkeit value
     */
    public function setAnfrageZustaendigkeit(?\THAG\XKfz\StructType\AnfrageZustaendigkeit $anfrageZustaendigkeit = null): self
    {
        $this->anfrageZustaendigkeit = $anfrageZustaendigkeit;

        return $this;
    }
}

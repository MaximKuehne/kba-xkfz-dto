<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.KennzeichensucheKennzeichen StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_KennzeichensucheKennzeichen extends AbstractStructBase
{
    /**
     * The einzeln
     */
    public ?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichenEinzeln $einzeln = null;

    /**
     * The komplett
     */
    public ?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichenKomplett $komplett = null;

    /**
     * Constructor method for Type.KennzeichensucheKennzeichen
     *
     * @uses Type_KennzeichensucheKennzeichen::setEinzeln()
     * @uses Type_KennzeichensucheKennzeichen::setKomplett()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichenEinzeln $einzeln = null, ?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichenKomplett $komplett = null)
    {
        $this
            ->setEinzeln($einzeln)
            ->setKomplett($komplett);
    }

    /**
     * Get einzeln value
     */
    public function getEinzeln(): ?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichenEinzeln
    {
        return $this->einzeln;
    }

    /**
     * Set einzeln value
     */
    public function setEinzeln(?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichenEinzeln $einzeln = null): self
    {
        $this->einzeln = $einzeln;

        return $this;
    }

    /**
     * Get komplett value
     */
    public function getKomplett(): ?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichenKomplett
    {
        return $this->komplett;
    }

    /**
     * Set komplett value
     */
    public function setKomplett(?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichenKomplett $komplett = null): self
    {
        $this->komplett = $komplett;

        return $this;
    }
}

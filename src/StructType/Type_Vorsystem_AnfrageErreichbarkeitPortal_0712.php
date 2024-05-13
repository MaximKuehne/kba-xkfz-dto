<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Vorsystem.AnfrageErreichbarkeitPortal.0712 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Vorsystem_AnfrageErreichbarkeitPortal_0712 extends AbstractStructBase
{
    /**
     * The halter
     */
    public ?\THAG\XKfz\StructType\Type_PersonMitAnschrift $halter = null;

    /**
     * The zulassungsbehoerde
     */
    public ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $zulassungsbehoerde = null;

    /**
     * Constructor method for Type.Vorsystem.AnfrageErreichbarkeitPortal.0712
     *
     * @uses Type_Vorsystem_AnfrageErreichbarkeitPortal_0712::setHalter()
     * @uses Type_Vorsystem_AnfrageErreichbarkeitPortal_0712::setZulassungsbehoerde()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_PersonMitAnschrift $halter = null, ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $zulassungsbehoerde = null)
    {
        $this
            ->setHalter($halter)
            ->setZulassungsbehoerde($zulassungsbehoerde);
    }

    /**
     * Get halter value
     */
    public function getHalter(): ?\THAG\XKfz\StructType\Type_PersonMitAnschrift
    {
        return $this->halter;
    }

    /**
     * Set halter value
     */
    public function setHalter(?\THAG\XKfz\StructType\Type_PersonMitAnschrift $halter = null): self
    {
        $this->halter = $halter;

        return $this;
    }

    /**
     * Get zulassungsbehoerde value
     */
    public function getZulassungsbehoerde(): ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde
    {
        return $this->zulassungsbehoerde;
    }

    /**
     * Set zulassungsbehoerde value
     */
    public function setZulassungsbehoerde(?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $zulassungsbehoerde = null): self
    {
        $this->zulassungsbehoerde = $zulassungsbehoerde;

        return $this;
    }
}

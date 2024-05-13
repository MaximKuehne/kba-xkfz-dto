<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ListeNachrichtenInfo StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ListeNachrichtenInfo extends AbstractStructBase
{
    /**
     * The nachrichtInfo
     */
    public ?\THAG\XKfz\StructType\Type_NachrichtInfo $nachrichtInfo = null;

    /**
     * Constructor method for Type.ListeNachrichtenInfo
     *
     * @uses Type_ListeNachrichtenInfo::setNachrichtInfo()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_NachrichtInfo $nachrichtInfo = null)
    {
        $this
            ->setNachrichtInfo($nachrichtInfo);
    }

    /**
     * Get nachrichtInfo value
     */
    public function getNachrichtInfo(): ?\THAG\XKfz\StructType\Type_NachrichtInfo
    {
        return $this->nachrichtInfo;
    }

    /**
     * Set nachrichtInfo value
     */
    public function setNachrichtInfo(?\THAG\XKfz\StructType\Type_NachrichtInfo $nachrichtInfo = null): self
    {
        $this->nachrichtInfo = $nachrichtInfo;

        return $this;
    }
}

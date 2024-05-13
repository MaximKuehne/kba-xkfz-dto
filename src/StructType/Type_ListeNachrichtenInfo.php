<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ListeNachrichtenInfo StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ListeNachrichtenInfo extends AbstractStructBase
{
    /**
     * The nachrichtInfo
     * @var \THAG\XKfz\StructType\Type_NachrichtInfo|null
     */
    public ?\THAG\XKfz\StructType\Type_NachrichtInfo $nachrichtInfo = null;
    /**
     * Constructor method for Type.ListeNachrichtenInfo
     * @uses Type_ListeNachrichtenInfo::setNachrichtInfo()
     * @param \THAG\XKfz\StructType\Type_NachrichtInfo $nachrichtInfo
     */
    public function __construct(?\THAG\XKfz\StructType\Type_NachrichtInfo $nachrichtInfo = null)
    {
        $this
            ->setNachrichtInfo($nachrichtInfo);
    }
    /**
     * Get nachrichtInfo value
     * @return \THAG\XKfz\StructType\Type_NachrichtInfo|null
     */
    public function getNachrichtInfo(): ?\THAG\XKfz\StructType\Type_NachrichtInfo
    {
        return $this->nachrichtInfo;
    }
    /**
     * Set nachrichtInfo value
     * @param \THAG\XKfz\StructType\Type_NachrichtInfo $nachrichtInfo
     * @return \THAG\XKfz\StructType\Type_ListeNachrichtenInfo
     */
    public function setNachrichtInfo(?\THAG\XKfz\StructType\Type_NachrichtInfo $nachrichtInfo = null): self
    {
        $this->nachrichtInfo = $nachrichtInfo;
        
        return $this;
    }
}

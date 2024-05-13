<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.PlatzhalterEncryptedData StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_PlatzhalterEncryptedData extends AbstractStructBase
{
    /**
     * The any
     *
     * @var \DOMDocument|string|null
     */
    public $any = null;

    /**
     * Constructor method for Type.PlatzhalterEncryptedData
     *
     * @uses Type_PlatzhalterEncryptedData::setAny()
     *
     * @param  \DOMDocument|string|null  $any
     */
    public function __construct($any = null)
    {
        $this
            ->setAny($any);
    }

    /**
     * Get any value
     *
     * @uses \DOMDocument::loadXML()
     *
     * @param  bool  $asDomDocument  true: returns \DOMDocument, false: returns XML string
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (! empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }

        return $asDomDocument ? $domDocument : $this->any;
    }

    /**
     * Set any value
     *
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     *
     * @param  \DOMDocument|string|null  $any
     */
    public function setAny($any = null): self
    {
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AnfrageGutachtenFreigeben StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AnfrageGutachtenFreigeben extends AbstractStructBase
{
    /**
     * The gutachtennummer
     * @var string|null
     */
    public ?string $gutachtennummer = null;
    /**
     * The verwendendeBehoerde
     * @var \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde|null
     */
    public ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $verwendendeBehoerde = null;
    /**
     * Constructor method for Type.AnfrageGutachtenFreigeben
     * @uses Type_AnfrageGutachtenFreigeben::setGutachtennummer()
     * @uses Type_AnfrageGutachtenFreigeben::setVerwendendeBehoerde()
     * @param string $gutachtennummer
     * @param \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $verwendendeBehoerde
     */
    public function __construct(?string $gutachtennummer = null, ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $verwendendeBehoerde = null)
    {
        $this
            ->setGutachtennummer($gutachtennummer)
            ->setVerwendendeBehoerde($verwendendeBehoerde);
    }
    /**
     * Get gutachtennummer value
     * @return string|null
     */
    public function getGutachtennummer(): ?string
    {
        return $this->gutachtennummer;
    }
    /**
     * Set gutachtennummer value
     * @param string $gutachtennummer
     * @return \THAG\XKfz\StructType\Type_AnfrageGutachtenFreigeben
     */
    public function setGutachtennummer(?string $gutachtennummer = null): self
    {
        $this->gutachtennummer = $gutachtennummer;
        
        return $this;
    }
    /**
     * Get verwendendeBehoerde value
     * @return \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde|null
     */
    public function getVerwendendeBehoerde(): ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde
    {
        return $this->verwendendeBehoerde;
    }
    /**
     * Set verwendendeBehoerde value
     * @param \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $verwendendeBehoerde
     * @return \THAG\XKfz\StructType\Type_AnfrageGutachtenFreigeben
     */
    public function setVerwendendeBehoerde(?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $verwendendeBehoerde = null): self
    {
        $this->verwendendeBehoerde = $verwendendeBehoerde;
        
        return $this;
    }
}

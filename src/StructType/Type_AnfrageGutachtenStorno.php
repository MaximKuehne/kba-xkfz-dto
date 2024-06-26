<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AnfrageGutachtenStorno StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AnfrageGutachtenStorno extends AbstractStructBase
{
    /**
     * The gutachtennummer
     */
    public ?string $gutachtennummer = null;

    /**
     * The verwendendeBehoerde
     */
    public ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $verwendendeBehoerde = null;

    /**
     * Constructor method for Type.AnfrageGutachtenStorno
     *
     * @uses Type_AnfrageGutachtenStorno::setGutachtennummer()
     * @uses Type_AnfrageGutachtenStorno::setVerwendendeBehoerde()
     */
    public function __construct(?string $gutachtennummer = null, ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $verwendendeBehoerde = null)
    {
        $this
            ->setGutachtennummer($gutachtennummer)
            ->setVerwendendeBehoerde($verwendendeBehoerde);
    }

    /**
     * Get gutachtennummer value
     */
    public function getGutachtennummer(): ?string
    {
        return $this->gutachtennummer;
    }

    /**
     * Set gutachtennummer value
     */
    public function setGutachtennummer(?string $gutachtennummer = null): self
    {
        $this->gutachtennummer = $gutachtennummer;

        return $this;
    }

    /**
     * Get verwendendeBehoerde value
     */
    public function getVerwendendeBehoerde(): ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde
    {
        return $this->verwendendeBehoerde;
    }

    /**
     * Set verwendendeBehoerde value
     */
    public function setVerwendendeBehoerde(?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $verwendendeBehoerde = null): self
    {
        $this->verwendendeBehoerde = $verwendendeBehoerde;

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Quittung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Quittung extends AbstractStructBase
{
    /**
     * The ebene
     */
    public ?\THAG\XKfz\StructType\Code_Quittungsebene $ebene = null;

    /**
     * The art
     */
    public ?\THAG\XKfz\StructType\Code_Quittungsart $art = null;

    /**
     * The code
     */
    public ?\THAG\XKfz\StructType\Type_QuittungscodeMitZusatz $code = null;

    /**
     * Constructor method for Type.Quittung
     *
     * @uses Type_Quittung::setEbene()
     * @uses Type_Quittung::setArt()
     * @uses Type_Quittung::setCode()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_Quittungsebene $ebene = null, ?\THAG\XKfz\StructType\Code_Quittungsart $art = null, ?\THAG\XKfz\StructType\Type_QuittungscodeMitZusatz $code = null)
    {
        $this
            ->setEbene($ebene)
            ->setArt($art)
            ->setCode($code);
    }

    /**
     * Get ebene value
     */
    public function getEbene(): ?\THAG\XKfz\StructType\Code_Quittungsebene
    {
        return $this->ebene;
    }

    /**
     * Set ebene value
     */
    public function setEbene(?\THAG\XKfz\StructType\Code_Quittungsebene $ebene = null): self
    {
        $this->ebene = $ebene;

        return $this;
    }

    /**
     * Get art value
     */
    public function getArt(): ?\THAG\XKfz\StructType\Code_Quittungsart
    {
        return $this->art;
    }

    /**
     * Set art value
     */
    public function setArt(?\THAG\XKfz\StructType\Code_Quittungsart $art = null): self
    {
        $this->art = $art;

        return $this;
    }

    /**
     * Get code value
     */
    public function getCode(): ?\THAG\XKfz\StructType\Type_QuittungscodeMitZusatz
    {
        return $this->code;
    }

    /**
     * Set code value
     */
    public function setCode(?\THAG\XKfz\StructType\Type_QuittungscodeMitZusatz $code = null): self
    {
        $this->code = $code;

        return $this;
    }
}

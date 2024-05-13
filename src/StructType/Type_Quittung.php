<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Quittung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Quittung extends AbstractStructBase
{
    /**
     * The ebene
     * @var \THAG\XKfz\StructType\Code_Quittungsebene|null
     */
    public ?\THAG\XKfz\StructType\Code_Quittungsebene $ebene = null;
    /**
     * The art
     * @var \THAG\XKfz\StructType\Code_Quittungsart|null
     */
    public ?\THAG\XKfz\StructType\Code_Quittungsart $art = null;
    /**
     * The code
     * @var \THAG\XKfz\StructType\Type_QuittungscodeMitZusatz|null
     */
    public ?\THAG\XKfz\StructType\Type_QuittungscodeMitZusatz $code = null;
    /**
     * Constructor method for Type.Quittung
     * @uses Type_Quittung::setEbene()
     * @uses Type_Quittung::setArt()
     * @uses Type_Quittung::setCode()
     * @param \THAG\XKfz\StructType\Code_Quittungsebene $ebene
     * @param \THAG\XKfz\StructType\Code_Quittungsart $art
     * @param \THAG\XKfz\StructType\Type_QuittungscodeMitZusatz $code
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
     * @return \THAG\XKfz\StructType\Code_Quittungsebene|null
     */
    public function getEbene(): ?\THAG\XKfz\StructType\Code_Quittungsebene
    {
        return $this->ebene;
    }
    /**
     * Set ebene value
     * @param \THAG\XKfz\StructType\Code_Quittungsebene $ebene
     * @return \THAG\XKfz\StructType\Type_Quittung
     */
    public function setEbene(?\THAG\XKfz\StructType\Code_Quittungsebene $ebene = null): self
    {
        $this->ebene = $ebene;
        
        return $this;
    }
    /**
     * Get art value
     * @return \THAG\XKfz\StructType\Code_Quittungsart|null
     */
    public function getArt(): ?\THAG\XKfz\StructType\Code_Quittungsart
    {
        return $this->art;
    }
    /**
     * Set art value
     * @param \THAG\XKfz\StructType\Code_Quittungsart $art
     * @return \THAG\XKfz\StructType\Type_Quittung
     */
    public function setArt(?\THAG\XKfz\StructType\Code_Quittungsart $art = null): self
    {
        $this->art = $art;
        
        return $this;
    }
    /**
     * Get code value
     * @return \THAG\XKfz\StructType\Type_QuittungscodeMitZusatz|null
     */
    public function getCode(): ?\THAG\XKfz\StructType\Type_QuittungscodeMitZusatz
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param \THAG\XKfz\StructType\Type_QuittungscodeMitZusatz $code
     * @return \THAG\XKfz\StructType\Type_Quittung
     */
    public function setCode(?\THAG\XKfz\StructType\Type_QuittungscodeMitZusatz $code = null): self
    {
        $this->code = $code;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteKennzeichen StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteKennzeichen extends AbstractStructBase
{
    /**
     * The kennzeichenInhalt
     * @var \THAG\XKfz\StructType\Type_InhaltKennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Type_InhaltKennzeichen $kennzeichenInhalt = null;
    /**
     * The kennzeichenTyp
     * @var \THAG\XKfz\StructType\Code_TypDesKennzeichens|null
     */
    public ?\THAG\XKfz\StructType\Code_TypDesKennzeichens $kennzeichenTyp = null;
    /**
     * The kennzeichenFormat
     * @var \THAG\XKfz\StructType\Code_Kennzeichenformat|null
     */
    public ?\THAG\XKfz\StructType\Code_Kennzeichenformat $kennzeichenFormat = null;
    /**
     * The kennzeichenSiegel
     * @var \THAG\XKfz\StructType\Type_SiegelUndPlakettenKennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Type_SiegelUndPlakettenKennzeichen $kennzeichenSiegel = null;
    /**
     * Constructor method for Type.VorgangskomponenteKennzeichen
     * @uses Type_VorgangskomponenteKennzeichen::setKennzeichenInhalt()
     * @uses Type_VorgangskomponenteKennzeichen::setKennzeichenTyp()
     * @uses Type_VorgangskomponenteKennzeichen::setKennzeichenFormat()
     * @uses Type_VorgangskomponenteKennzeichen::setKennzeichenSiegel()
     * @param \THAG\XKfz\StructType\Type_InhaltKennzeichen $kennzeichenInhalt
     * @param \THAG\XKfz\StructType\Code_TypDesKennzeichens $kennzeichenTyp
     * @param \THAG\XKfz\StructType\Code_Kennzeichenformat $kennzeichenFormat
     * @param \THAG\XKfz\StructType\Type_SiegelUndPlakettenKennzeichen $kennzeichenSiegel
     */
    public function __construct(?\THAG\XKfz\StructType\Type_InhaltKennzeichen $kennzeichenInhalt = null, ?\THAG\XKfz\StructType\Code_TypDesKennzeichens $kennzeichenTyp = null, ?\THAG\XKfz\StructType\Code_Kennzeichenformat $kennzeichenFormat = null, ?\THAG\XKfz\StructType\Type_SiegelUndPlakettenKennzeichen $kennzeichenSiegel = null)
    {
        $this
            ->setKennzeichenInhalt($kennzeichenInhalt)
            ->setKennzeichenTyp($kennzeichenTyp)
            ->setKennzeichenFormat($kennzeichenFormat)
            ->setKennzeichenSiegel($kennzeichenSiegel);
    }
    /**
     * Get kennzeichenInhalt value
     * @return \THAG\XKfz\StructType\Type_InhaltKennzeichen|null
     */
    public function getKennzeichenInhalt(): ?\THAG\XKfz\StructType\Type_InhaltKennzeichen
    {
        return $this->kennzeichenInhalt;
    }
    /**
     * Set kennzeichenInhalt value
     * @param \THAG\XKfz\StructType\Type_InhaltKennzeichen $kennzeichenInhalt
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichen
     */
    public function setKennzeichenInhalt(?\THAG\XKfz\StructType\Type_InhaltKennzeichen $kennzeichenInhalt = null): self
    {
        $this->kennzeichenInhalt = $kennzeichenInhalt;
        
        return $this;
    }
    /**
     * Get kennzeichenTyp value
     * @return \THAG\XKfz\StructType\Code_TypDesKennzeichens|null
     */
    public function getKennzeichenTyp(): ?\THAG\XKfz\StructType\Code_TypDesKennzeichens
    {
        return $this->kennzeichenTyp;
    }
    /**
     * Set kennzeichenTyp value
     * @param \THAG\XKfz\StructType\Code_TypDesKennzeichens $kennzeichenTyp
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichen
     */
    public function setKennzeichenTyp(?\THAG\XKfz\StructType\Code_TypDesKennzeichens $kennzeichenTyp = null): self
    {
        $this->kennzeichenTyp = $kennzeichenTyp;
        
        return $this;
    }
    /**
     * Get kennzeichenFormat value
     * @return \THAG\XKfz\StructType\Code_Kennzeichenformat|null
     */
    public function getKennzeichenFormat(): ?\THAG\XKfz\StructType\Code_Kennzeichenformat
    {
        return $this->kennzeichenFormat;
    }
    /**
     * Set kennzeichenFormat value
     * @param \THAG\XKfz\StructType\Code_Kennzeichenformat $kennzeichenFormat
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichen
     */
    public function setKennzeichenFormat(?\THAG\XKfz\StructType\Code_Kennzeichenformat $kennzeichenFormat = null): self
    {
        $this->kennzeichenFormat = $kennzeichenFormat;
        
        return $this;
    }
    /**
     * Get kennzeichenSiegel value
     * @return \THAG\XKfz\StructType\Type_SiegelUndPlakettenKennzeichen|null
     */
    public function getKennzeichenSiegel(): ?\THAG\XKfz\StructType\Type_SiegelUndPlakettenKennzeichen
    {
        return $this->kennzeichenSiegel;
    }
    /**
     * Set kennzeichenSiegel value
     * @param \THAG\XKfz\StructType\Type_SiegelUndPlakettenKennzeichen $kennzeichenSiegel
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichen
     */
    public function setKennzeichenSiegel(?\THAG\XKfz\StructType\Type_SiegelUndPlakettenKennzeichen $kennzeichenSiegel = null): self
    {
        $this->kennzeichenSiegel = $kennzeichenSiegel;
        
        return $this;
    }
}

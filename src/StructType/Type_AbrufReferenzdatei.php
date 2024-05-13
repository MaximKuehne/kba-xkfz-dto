<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AbrufReferenzdatei StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AbrufReferenzdatei extends AbstractStructBase
{
    /**
     * The kennung
     * @var string|null
     */
    public ?string $kennung = null;
    /**
     * The referenzNutzer
     * @var \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde|null
     */
    public ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $referenzNutzer = null;
    /**
     * Constructor method for Type.AbrufReferenzdatei
     * @uses Type_AbrufReferenzdatei::setKennung()
     * @uses Type_AbrufReferenzdatei::setReferenzNutzer()
     * @param string $kennung
     * @param \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $referenzNutzer
     */
    public function __construct(?string $kennung = null, ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $referenzNutzer = null)
    {
        $this
            ->setKennung($kennung)
            ->setReferenzNutzer($referenzNutzer);
    }
    /**
     * Get kennung value
     * @return string|null
     */
    public function getKennung(): ?string
    {
        return $this->kennung;
    }
    /**
     * Set kennung value
     * @param string $kennung
     * @return \THAG\XKfz\StructType\Type_AbrufReferenzdatei
     */
    public function setKennung(?string $kennung = null): self
    {
        $this->kennung = $kennung;
        
        return $this;
    }
    /**
     * Get referenzNutzer value
     * @return \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde|null
     */
    public function getReferenzNutzer(): ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde
    {
        return $this->referenzNutzer;
    }
    /**
     * Set referenzNutzer value
     * @param \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $referenzNutzer
     * @return \THAG\XKfz\StructType\Type_AbrufReferenzdatei
     */
    public function setReferenzNutzer(?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $referenzNutzer = null): self
    {
        $this->referenzNutzer = $referenzNutzer;
        
        return $this;
    }
}

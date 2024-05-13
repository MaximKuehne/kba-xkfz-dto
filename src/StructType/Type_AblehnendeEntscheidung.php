<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AblehnendeEntscheidung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AblehnendeEntscheidung extends AbstractStructBase
{
    /**
     * The ablehnungsgrund
     * @var \THAG\XKfz\StructType\Code_GrundAblehnungZulassungsantrag|null
     */
    public ?\THAG\XKfz\StructType\Code_GrundAblehnungZulassungsantrag $ablehnungsgrund = null;
    /**
     * The bemerkungen
     * @var string|null
     */
    public ?string $bemerkungen = null;
    /**
     * Constructor method for Type.AblehnendeEntscheidung
     * @uses Type_AblehnendeEntscheidung::setAblehnungsgrund()
     * @uses Type_AblehnendeEntscheidung::setBemerkungen()
     * @param \THAG\XKfz\StructType\Code_GrundAblehnungZulassungsantrag $ablehnungsgrund
     * @param string $bemerkungen
     */
    public function __construct(?\THAG\XKfz\StructType\Code_GrundAblehnungZulassungsantrag $ablehnungsgrund = null, ?string $bemerkungen = null)
    {
        $this
            ->setAblehnungsgrund($ablehnungsgrund)
            ->setBemerkungen($bemerkungen);
    }
    /**
     * Get ablehnungsgrund value
     * @return \THAG\XKfz\StructType\Code_GrundAblehnungZulassungsantrag|null
     */
    public function getAblehnungsgrund(): ?\THAG\XKfz\StructType\Code_GrundAblehnungZulassungsantrag
    {
        return $this->ablehnungsgrund;
    }
    /**
     * Set ablehnungsgrund value
     * @param \THAG\XKfz\StructType\Code_GrundAblehnungZulassungsantrag $ablehnungsgrund
     * @return \THAG\XKfz\StructType\Type_AblehnendeEntscheidung
     */
    public function setAblehnungsgrund(?\THAG\XKfz\StructType\Code_GrundAblehnungZulassungsantrag $ablehnungsgrund = null): self
    {
        $this->ablehnungsgrund = $ablehnungsgrund;
        
        return $this;
    }
    /**
     * Get bemerkungen value
     * @return string|null
     */
    public function getBemerkungen(): ?string
    {
        return $this->bemerkungen;
    }
    /**
     * Set bemerkungen value
     * @param string $bemerkungen
     * @return \THAG\XKfz\StructType\Type_AblehnendeEntscheidung
     */
    public function setBemerkungen(?string $bemerkungen = null): self
    {
        $this->bemerkungen = $bemerkungen;
        
        return $this;
    }
}

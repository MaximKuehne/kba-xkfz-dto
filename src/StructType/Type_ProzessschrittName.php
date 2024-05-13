<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ProzessschrittName StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ProzessschrittName extends AbstractStructBase
{
    /**
     * The code
     * @var \THAG\XKfz\StructType\Code_ProzessschrittName|null
     */
    public ?\THAG\XKfz\StructType\Code_ProzessschrittName $code = null;
    /**
     * The nichtGelisteterWert
     * @var string|null
     */
    public ?string $nichtGelisteterWert = null;
    /**
     * Constructor method for Type.ProzessschrittName
     * @uses Type_ProzessschrittName::setCode()
     * @uses Type_ProzessschrittName::setNichtGelisteterWert()
     * @param \THAG\XKfz\StructType\Code_ProzessschrittName $code
     * @param string $nichtGelisteterWert
     */
    public function __construct(?\THAG\XKfz\StructType\Code_ProzessschrittName $code = null, ?string $nichtGelisteterWert = null)
    {
        $this
            ->setCode($code)
            ->setNichtGelisteterWert($nichtGelisteterWert);
    }
    /**
     * Get code value
     * @return \THAG\XKfz\StructType\Code_ProzessschrittName|null
     */
    public function getCode(): ?\THAG\XKfz\StructType\Code_ProzessschrittName
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param \THAG\XKfz\StructType\Code_ProzessschrittName $code
     * @return \THAG\XKfz\StructType\Type_ProzessschrittName
     */
    public function setCode(?\THAG\XKfz\StructType\Code_ProzessschrittName $code = null): self
    {
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get nichtGelisteterWert value
     * @return string|null
     */
    public function getNichtGelisteterWert(): ?string
    {
        return $this->nichtGelisteterWert;
    }
    /**
     * Set nichtGelisteterWert value
     * @param string $nichtGelisteterWert
     * @return \THAG\XKfz\StructType\Type_ProzessschrittName
     */
    public function setNichtGelisteterWert(?string $nichtGelisteterWert = null): self
    {
        $this->nichtGelisteterWert = $nichtGelisteterWert;
        
        return $this;
    }
}

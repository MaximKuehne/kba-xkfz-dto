<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ArtDesDokuments StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ArtDesDokuments extends AbstractStructBase
{
    /**
     * The code
     * @var \THAG\XKfz\StructType\Code_ArtDesDokuments|null
     */
    public ?\THAG\XKfz\StructType\Code_ArtDesDokuments $code = null;
    /**
     * The nichtGelisteterWert
     * @var string|null
     */
    public ?string $nichtGelisteterWert = null;
    /**
     * Constructor method for Type.ArtDesDokuments
     * @uses Type_ArtDesDokuments::setCode()
     * @uses Type_ArtDesDokuments::setNichtGelisteterWert()
     * @param \THAG\XKfz\StructType\Code_ArtDesDokuments $code
     * @param string $nichtGelisteterWert
     */
    public function __construct(?\THAG\XKfz\StructType\Code_ArtDesDokuments $code = null, ?string $nichtGelisteterWert = null)
    {
        $this
            ->setCode($code)
            ->setNichtGelisteterWert($nichtGelisteterWert);
    }
    /**
     * Get code value
     * @return \THAG\XKfz\StructType\Code_ArtDesDokuments|null
     */
    public function getCode(): ?\THAG\XKfz\StructType\Code_ArtDesDokuments
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param \THAG\XKfz\StructType\Code_ArtDesDokuments $code
     * @return \THAG\XKfz\StructType\Type_ArtDesDokuments
     */
    public function setCode(?\THAG\XKfz\StructType\Code_ArtDesDokuments $code = null): self
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
     * @return \THAG\XKfz\StructType\Type_ArtDesDokuments
     */
    public function setNichtGelisteterWert(?string $nichtGelisteterWert = null): self
    {
        $this->nichtGelisteterWert = $nichtGelisteterWert;
        
        return $this;
    }
}

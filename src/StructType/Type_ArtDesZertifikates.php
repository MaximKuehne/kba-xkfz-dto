<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ArtDesZertifikates StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ArtDesZertifikates extends AbstractStructBase
{
    /**
     * The code
     * @var \THAG\XKfz\StructType\Code_ArtDesZertifikates|null
     */
    public ?\THAG\XKfz\StructType\Code_ArtDesZertifikates $code = null;
    /**
     * The nichtGelisteterWert
     * @var string|null
     */
    public ?string $nichtGelisteterWert = null;
    /**
     * Constructor method for Type.ArtDesZertifikates
     * @uses Type_ArtDesZertifikates::setCode()
     * @uses Type_ArtDesZertifikates::setNichtGelisteterWert()
     * @param \THAG\XKfz\StructType\Code_ArtDesZertifikates $code
     * @param string $nichtGelisteterWert
     */
    public function __construct(?\THAG\XKfz\StructType\Code_ArtDesZertifikates $code = null, ?string $nichtGelisteterWert = null)
    {
        $this
            ->setCode($code)
            ->setNichtGelisteterWert($nichtGelisteterWert);
    }
    /**
     * Get code value
     * @return \THAG\XKfz\StructType\Code_ArtDesZertifikates|null
     */
    public function getCode(): ?\THAG\XKfz\StructType\Code_ArtDesZertifikates
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param \THAG\XKfz\StructType\Code_ArtDesZertifikates $code
     * @return \THAG\XKfz\StructType\Type_ArtDesZertifikates
     */
    public function setCode(?\THAG\XKfz\StructType\Code_ArtDesZertifikates $code = null): self
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
     * @return \THAG\XKfz\StructType\Type_ArtDesZertifikates
     */
    public function setNichtGelisteterWert(?string $nichtGelisteterWert = null): self
    {
        $this->nichtGelisteterWert = $nichtGelisteterWert;
        
        return $this;
    }
}

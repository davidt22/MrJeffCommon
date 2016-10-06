<?php


namespace MrJeff\CommonBundle\Model;


class LanguageAPI implements \JsonSerializable
{
    /** @var string $codeLanguage */
    private $codeLanguage;

    /** @var string $description */
    private $description;

    /**
     * @return string
     */
    public function getCodeLanguage()
    {
        return $this->codeLanguage;
    }

    /**
     * @param string $codeLanguage
     */
    public function setCodeLanguage($codeLanguage)
    {
        $this->codeLanguage = $codeLanguage;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    function jsonSerialize()
    {
        return array(
            'codeLanguage' => $this->codeLanguage,
            'description' => $this->description
        );
    }
}
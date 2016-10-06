<?php


namespace MrJeff\CommonBundle\Model;


class DescriptionAPI implements \JsonSerializable
{
    /** @var integer $idProductDescription */
    private $idProductDescription;

    /** @var  string $name */
    private $name;

    /** @var string $description */
    private $description;

    /** @var LanguageAPI $language */
    private $language;

    /**
     * @return int
     */
    public function getIdProductDescription()
    {
        return $this->idProductDescription;
    }

    /**
     * @param int $idProductDescription
     */
    public function setIdProductDescription($idProductDescription)
    {
        $this->idProductDescription = $idProductDescription;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return LanguageAPI
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param LanguageAPI $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
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
            'idProductDescription' => $this->idProductDescription,
            'name' => $this->name,
            'description' => $this->description,
            'language' => $this->language
        );
    }
}
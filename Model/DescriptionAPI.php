<?php


namespace MrJeff\CommonBundle\Model;


class DescriptionAPI
{
    /** @var integer $idDescription */
    private $idDescription;

    /** @var  string $name */
    private $name;

    /** @var string $description */
    private $description;

    /** @var LanguageAPI $language */
    private $language;

    /**
     * @return int
     */
    public function getIdDescription()
    {
        return $this->idDescription;
    }

    /**
     * @param int $idDescription
     */
    public function setIdDescription($idDescription)
    {
        $this->idDescription = $idDescription;
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
}
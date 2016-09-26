<?php


namespace MrJeff\CommonBundle\Model;


class LanguageAPI
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
}
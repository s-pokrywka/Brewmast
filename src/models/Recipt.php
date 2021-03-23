<?php


class Recipt
{
    /**
     * @return mixed
     */
    public function getIbu()
    {
        return $this->ibu;
    }

    /**
     * @param mixed $ibu
     */
    public function setIbu($ibu): void
    {
        $this->ibu = $ibu;
    }

    /**
     * @return mixed
     */
    public function getSrv()
    {
        return $this->srv;
    }

    /**
     * @param mixed $srv
     */
    public function setSrv($srv): void
    {
        $this->srv = $srv;
    }

    /**
     * @return mixed
     */
    public function getNameStyle()
    {
        return $this->name_style;
    }

    /**
     * @param mixed $name_style
     */
    public function setNameStyle($name_style): void
    {
        $this->name_style = $name_style;
    }
    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $style
     */
    public function setStyle($style): void
    {
        $this->style = $style;
    }

    /**
     * @param mixed $alk
     */
    public function setAlk($alk): void
    {
        $this->alk = $alk;
    }

    /**
     * @param mixed $volume
     */
    public function setVolume($volume): void
    {
        $this->volume = $volume;
    }

    /**
     * @param mixed $malt
     */
    public function setMalt($malt): void
    {
        $this->malt = $malt;
    }

    /**
     * @param mixed $kg
     */
    public function setKg($kg): void
    {
        $this->kg = $kg;
    }

    /**
     * @param mixed $yeats
     */
    public function setYeats($yeats): void
    {
        $this->yeats = $yeats;
    }

    /**
     * @param mixed $hop
     */
    public function setHop($hop): void
    {
        $this->hop = $hop;
    }

    /**
     * @param mixed $g
     */
    public function setG($<?php


class Recipt
{
    /**
     * @return mixed
     */
    public function getIbu()
    {
        return $this->ibu;
    }

    /**
     * @param mixed $ibu
     */
    public function setIbu($ibu): void
    {
        $this->ibu = $ibu;
    }

    /**
     * @return mixed
     */
    public function getSrv()
    {
        return $this->srv;
    }

    /**
     * @param mixed $srv
     */
    public function setSrv($srv): void
    {
        $this->srv = $srv;
    }

    /**
     * @return mixed
     */
    public function getNameStyle()
    {
        return $this->name_style;
    }

    /**
     * @param mixed $name_style
     */
    public function setNameStyle($name_style): void
    {
        $this->name_style = $name_style;
    }
    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $style
     */
    public function setStyle($style): void
    {
        $this->style = $style;
    }

    /**
     * @param mixed $alk
     */
    public function setAlk($alk): void
    {
        $this->alk = $alk;
    }

    /**
     * @param mixed $volume
     */
    public function setVolume($volume): void
    {
        $this->volume = $volume;
    }

    /**
     * @param mixed $malt
     */
    public function setMalt($malt): void
    {
        $this->malt = $malt;
    }

    /**
     * @param mixed $kg
     */
    public function setKg($kg): void
    {
        $this->kg = $kg;
    }

    /**
     * @param mixed $yeats
     */
    public function setYeats($yeats): void
    {
        $this->yeats = $yeats;
    }

    /**
     * @param mixed $hop
     */
    public function setHop($hop): void
    {
        $this->hop = $hop;
    }

    /**
     * @param mixed $g
     */
    public function setG($g): void
    {
        $this->g = $g;
    }

    /**
     * @param mixed $min
     */
    public function setMin($min): void
    {
        $this->min = $min;
    }
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * @return mixed
     */
    public function getAlk()
    {
        return $this->alk;
    }

    /**
     * @return mixed
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @return mixed
     */
    public function getMalt()
    {
        return $this->malt;
    }

    /**
     * @return mixed
     */
    public function getKg()
    {
        return $this->kg;
    }

    /**
     * @return mixed
     */
    public function getYeats()
    {
        return $this->yeats;
    }

    /**
     * @return mixed
     */
    public function getHop()
    {
        return $this->hop;
    }

    /**
     * @return mixed
     */
    public function getG()
    {
        return $this->g;
    }

    /**
     * @return mixed
     */
    public function getMin()
    {
        return $this->min;
    }

    public  function getALL(){

        return $this->name;
    }

    private $name;
    private $style;
    private $alk;
    private $volume;
    private $malt;
    private $kg;
    private $yeats;
    private $hop;
    private $g;
    private $min;
    private $name_style;
    private $ibu;
    private $srv;

    public function __construct($name, $style, $alk, $volume, $malt, $kg, $yeats, $hop, $g, $min,$name_style,$ibu,$srv)
    {
        $this->name = $name;
        $this->style = $style;
        $this->alk = $alk;
        $this->volume = $volume;
        $this->malt = $malt;
        $this->kg = $kg;
        $this->yeats = $yeats;
        $this->hop = $hop;
        $this->g = $g;
        $this->min = $min;
        $this->name_style=$name_style;
        $this->ibu=$ibu;
        $this->srv=$srv;
    }


}
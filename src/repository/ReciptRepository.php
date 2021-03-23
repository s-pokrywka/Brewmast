<?php
require_once 'Repository.php';
require_once __DIR__.'/../models/Recipt.php';




class ReciptRepository extends  Repository
{

    public function addRecipt(Recipt $recipt):void
    {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO recipt (name, id_style, volume, id_malt, malt_kg,yeats,id_hop,hop_g,hop_min)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
        ');
        $stmt->execute([
            $recipt->getName(),
            $recipt->getStyle(),
            $recipt->getVolume(),
            $recipt->getMalt(),
            $recipt->getKg(),
            $recipt->getYeats(),
            $recipt->getHop(),
            $recipt->getG(),
            $recipt->getMin()

        ]);

    }

    public function getRecipt(int $id): ?Recipt{

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.recipt WHERE id_recipt = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $recipt = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($recipt == false) {
            return null;
        }

        return new Recipt(
            $recipt['name'],
            $recipt['style'],
            $recipt['alk'],
            $recipt['volume'],
            $recipt['malt'],
            $recipt['kg'],
            $recipt['yeats'],
            $recipt['hop'],
            $recipt['g'],
            $recipt['min']
        <?php
require_once 'Repository.php';
require_once __DIR__.'/../models/Recipt.php';




class ReciptRepository extends  Repository
{

    public function addRecipt(Recipt $recipt):void
    {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO recipt (name, id_style, volume, id_malt, malt_kg,yeats,id_hop,hop_g,hop_min)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
        ');
        $stmt->execute([
            $recipt->getName(),
            $recipt->getStyle(),
            $recipt->getVolume(),
            $recipt->getMalt(),
            $recipt->getKg(),
            $recipt->getYeats(),
            $recipt->getHop(),
            $recipt->getG(),
            $recipt->getMin()

        ]);

    }

    public function getRecipt(int $id): ?Recipt{

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.recipt WHERE id_recipt = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $recipt = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($recipt == false) {
            return null;
        }

        return new Recipt(
            $recipt['name'],
            $recipt['style'],
            $recipt['alk'],
            $recipt['volume'],
            $recipt['malt'],
            $recipt['kg'],
            $recipt['yeats'],
            $recipt['hop'],
            $recipt['g'],
            $recipt['min']
        );
    }

    public function getRecipts(): array
    {

        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM recipt join style_beer on recipt.id_style=style_beer.id_style
        ');
        $stmt->execute();
        $recipts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($recipts as $recipt) {
            $result[] = new Recipt(
                $recipt['name'],
                $recipt['id_style'],
                $recipt['alk'],
                $recipt['volume'],
                $recipt['id_malt'],
                $recipt['kg'],
                $recipt['yeats'],
                $recipt['id_hop'],
                $recipt['g'],
                $recipt['min'],
                $recipt['name_style'],
                $recipt['ibu'],
                $recipt['srv']

            );
        }

        return $result;


        }
}

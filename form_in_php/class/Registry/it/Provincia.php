<?php


class Provincia
{


    // fz dove voglio sapere tutto
    public static function all()
    {
        try {
            // nel file config abbiamo le informazioni x il db con le costanti.
            $conn = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
            //dal prepare ottengo un oggetto statement 
            $stm = $conn->prepare('SELECT * FROM province');
            //esegue la query e l'oggetto dello statement ha un 
            //risultato da restituire x ottenre il risultato si usa :fetch
            $stm->execute();
            $result = $stm->fetchAll(PDO::FETCH_OBJ);


            return $result;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rencontre extends Model
{
    protected $fillable = ['equipe_1_id', 'equipe_2_id', 'score_equipe_1', 'score_equipe_2'];

    public function equipe1()
    {
        return $this->belongsTo(Equipe::class, 'equipe_1_id');
    }

    public function equipe2()
    {
        return $this->belongsTo(Equipe::class, 'equipe_2_id');
    }
    

    public function updateClassement()
    {
        // Récupérer les classements
        $equipe1 = Classement::firstOrCreate(
            ['equipe_id' => $this->equipe_1_id],
            ['points' => 0, 'joues' => 0, 'gagnes' => 0, 'nuls' => 0, 'perdus' => 0, 'buts_marques' => 0, 'buts_encaisses' => 0]
        );
    
        $equipe2 = Classement::firstOrCreate(
            ['equipe_id' => $this->equipe_2_id],
            ['points' => 0, 'joues' => 0, 'gagnes' => 0, 'nuls' => 0, 'perdus' => 0, 'buts_marques' => 0, 'buts_encaisses' => 0]
        );
    
        // Mise à jour des points selon le score
        $equipe1->buts_marques += $this->score_equipe_1;  // Ajoute les buts marqués
        $equipe1->buts_encaisses += $this->score_equipe_2; // Ajoute les buts encaissés
        $equipe2->buts_marques += $this->score_equipe_2;  // Ajoute les buts marqués
        $equipe2->buts_encaisses += $this->score_equipe_1; // Ajoute les buts encaissés
    
        if ($this->score_equipe_1 > $this->score_equipe_2) {
            $equipe1->points += 3;
            $equipe1->gagnes += 1;
            $equipe2->perdus += 1;
        } elseif ($this->score_equipe_2 > $this->score_equipe_1) {
            $equipe2->points += 3;
            $equipe2->gagnes += 1;
            $equipe1->perdus += 1;
        } else {
            $equipe1->points += 1;
            $equipe2->points += 1;
            $equipe1->nuls += 1;
            $equipe2->nuls += 1;
        }
    
        $equipe1->joues += 1;
        $equipe2->joues += 1;
    
        $equipe1->save();
        $equipe2->save();
    }
    
}


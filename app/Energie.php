<?php

namespace LiiarAuto;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $libelle
 * @property string $created_at
 * @property string $updated_at
 * @property Vehicule[] $vehicules
 */
class Energie extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['libelle', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehicules()
    {
        return $this->hasMany('LiiarAuto\Vehicule', 'energies_id');
    }
}

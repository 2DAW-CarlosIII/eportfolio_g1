<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function evidencias(){

    }

    public function modulosMatriculados(){
        return $this->belongsToMany(ModuloFormativo::class, 'matriculas', 'estudiante_id', 'modulo_formativo_id');
    }

    public function modulosImpartidos()
    {
        return $this->hasMany(ModuloFormativo::class, 'docente_id', 'id');
    }

    public function esDocente(){
        if($this->modulosImpartidos()->count() > 0){
            return true;
        }
        return false;
    }

    public function esDocenteModulo(){
        if($this->modulosImpartidos()->exists()){
            return true;
        }
        return false;
    }

    public function esEstudiante(){
        if($this->modulosMatriculados()->exists()){
            return true;
        }
        return false;
    }

    public function esEstudianteModulo(ModuloFormativo $moduloFormativo){
        if($this->modulosMatriculados()->where('modulo_formativo_id', $moduloFormativo->id)->exists()){
            return true;
        }
        return false;
    }
}

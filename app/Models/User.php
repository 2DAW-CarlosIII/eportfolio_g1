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

    public function modulosMatriculados()
    {
        return $this->belongsToMany(ModuloFormativo::class, 'matriculas', 'estudiante_id', 'modulo_formativo_id');
    }
    public function evidencias()
    {
        return $this->hasMany(Evidencia::class, 'estudiante_id');
    }

    public function modulosImpartidos()
    {
        return $this->hasMany(ModuloFormativo::class, 'docente_id');
    }

    public function esDocente($moduloId = null)
    {
        return $this->modulosImpartidos()->exists();
    }

    public function esDocenteModulo(ModuloFormativo $modulo)
    {
        return $this->modulosImpartidos()->where('id', $modulo->id)->exists();
    }

    public function esEstudiante($moduloId = null)
    {
        return $this->modulosMatriculados()->exists();
    }

    public function esEstudianteModulo(ModuloFormativo $modulo)
    {
        return $this->modulosMatriculados()->where('modulo_formativo_id', $modulo->id)->exists();
    }

    public function esAdministrador()
    {
        return $this->email === config('app.admin.email');
    }

    protected $appends = ['roles'];

    public function rolesBD()
    {
        return $this->belongsToMany(Rol::class, 'user_roles', 'user_id', 'role_id');
    }
    public function getRolesAttribute(): array
    {
        $roles = $this->rolesBD->pluck('name')->toArray();
        if ($this->esAdministrador() && !in_array('administrador', $roles)) {
            $roles[] = 'administrador';
        }

        if ($this->esDocente() && !in_array('docente', $roles)) {
            $roles[] = 'docente';
        }

        if ($this->esEstudiante() && !in_array('estudiante', $roles)) {
            $roles[] = 'estudiante';
        }

        return $roles;
    }


}

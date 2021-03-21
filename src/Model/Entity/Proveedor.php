<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Proveedor Entity
 *
 * @property int $id
 * @property string $razon_social
 * @property string $email
 * @property string $telefono
 * @property string $codigo_postal
 * @property string $direccion
 * @property string $sitio_web
 */
class Proveedor extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'razon_social' => true,
        'email' => true,
        'telefono' => true,
        'codigo_postal' => true,
        'direccion' => true,
        'sitio_web' => true,
    ];
}

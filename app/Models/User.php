<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * \App\Models\User
 *
 * @property int $id id
 * @property string $uuid uuid
 * @property string $username '用户名'
 * @property string|null $nickname 昵称
 * @property string|null $email 邮箱
 * @property string $password 密码
 * @property string $avatar 头像
 * @property string|null $create_at
 * @property string|null $update_at
 * @property int|null $delete_at
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreateAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeleteAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdateAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUuid($value)
 * @mixin \Eloquent
 */
class User extends Model
{
    //
    public function resolveChildRouteBinding($childType, $value, $field)
    {
        // TODO: Implement resolveChildRouteBinding() method.
    }
}

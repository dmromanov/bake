<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BakeArticle Entity
 *
 * @property int $id ID
 * @property int $bake_user_id
 * @property string $title Title
 * @property string $body
 * @property float $rating Rating
 * @property float $score Score
 * @property bool $published Is publiehs
 * @property \Cake\I18n\Time $created Creation date
 * @property \Cake\I18n\Time $updated Modification date
 * @property array $array_type Array
 * @property array $json_type Json
 * @property $unknown_type Unknown Type
 *
 * @property \App\Model\Entity\BakeUser $bake_user
 * @property \BakeTest\Model\Entity\Author[] $authors
 * @property \App\Model\Entity\BakeComment[] $bake_comments
 * @property \App\Model\Entity\BakeTag[] $bake_tags
 */
class BakeArticle extends Entity
{

}

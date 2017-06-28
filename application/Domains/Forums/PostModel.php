<?php namespace App\Domains\Forums;

use CodeIgniter\Model;

/**
 * PostModel Model
 *
 * Generated by Vulcan at 2017-06-27 16:23pm
 */
class PostModel extends Model
{
	protected $table      = 'posts';
	protected $primaryKey = 'id';

	protected $returnType     = 'array';
	protected $useSoftDeletes = false;

	protected $allowedFields = ['forum_id', 'thread_id', 'user_id', 'title', 'body', 'deleted_at'];

	protected $useTimestamps = true;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $dateFormat    = 'datetime';

	protected $validationRules    = [
		'id'         => 'integer|max_length[11]',
		'forum_id'   => 'integer|max_length[5]',
		'thread_id'  => 'integer|max_length[11]',
		'user_id'    => 'integer|max_length[11]',
		'title'      => 'alpha_numeric_spaces|max_length[255]',
		'body'       => 'alpha_numeric_spaces',
		'created_at' => '',
		'updated_at' => '',
		'deleted_at' => '',

	];
	protected $validationMessages = [];
	protected $skipValidation     = false;
}
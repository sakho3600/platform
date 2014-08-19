<?php

/**
 * Repository for Posts
 *
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    Ushahidi\Platform
 * @copyright  2014 Ushahidi
 * @license    https://www.gnu.org/licenses/agpl-3.0.html GNU Affero General Public License Version 3 (AGPL3)
 */

namespace Ushahidi\Entity;

interface PostRepository
{

	/**
	 * @param  int $id
	 * @param  int $parent_id
	 * @return \Ushahidi\Entity\Post
	 */
	public function get($id, $parent_id = NULL);

	/**
	 * @param  string $locale
	 * @param  int $parent_id
	 * @return \Ushahidi\Entity\Post
	 */
	public function getByLocale($locale, $parent_id);

	/**
	 * @param  Ushahidi\Entity\PostSearchData $data
	 * @param  Array $params [limit, offset, orderby, order, type]
	 * @return [Ushahidi\Entity\Post, ...]
	 */
	public function search(PostSearchData $data, Array $params = null);

}


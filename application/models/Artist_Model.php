<?php /**
 * Created by PhpStorm.
 * User: trungduc
 * Date: 26/05/2017
 * Time: 03:27
 */
class Artist_Model extends MY_Model
{
    public $table = 'artist';

    public function __construct()
    {
        parent::__construct();
    }


    public function countAll()
    {
        return $this->db->count_all($this->_table);
    }


    public function set_data($id = false)
    {

        $data = $this->input->post();
        if (isset($_FILES['avatar']) && !empty($_FILES['avatar']['name'])){
            $data['avatar'] = $this->uploadFile('avatar');
        }
        if ($id === false) {
            return $this->create($data);
        } else {
            return $this->update($id, $data);
        }
    }

}
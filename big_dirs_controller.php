<?php 

/**
 * big_dirs class
 *
 * @package munkireport
 * @author 
 **/
class big_dirs_controller extends Module_controller
{
	
    /*** Protect methods with auth! ****/
    function __construct()
    {
        // Store module path
        $this->module_path = dirname(__FILE__);
    }
	
    /**
     * Get big_dirs information for serial_number
     *
     * @param string $serial serial number
     **/
    public function get_data($serial_number = '')
    {
        $obj = new View();

        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
        }
        $columns = [
            'item1',
            'item2',
        ];

        $out = big_dirs_model::select($columns)
            ->whereSerialNumber($serial_number)
            ->filter()
            ->limit(1)
            ->first()
            ->toArray();

        $obj->view('json', array('msg' => $out));
    }

    public function get_list()
    {
        $obj = new View();
        $out = big_dirs_model::selectRaw('item1, count(*) AS count')
            ->filter()
            ->groupBy('item1')
            ->orderBy('count', 'desc')
            ->get()
            ->toArray();

        $obj->view('json', array('msg' => $out));
}

} // END class big_dirs_controller

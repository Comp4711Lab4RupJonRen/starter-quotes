<?php

/**
 * 
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{

	}
        
        function zzz()
        {
            $this->data['pagebody'] = 'justone';	// this is the view to show 1 quote
            $record = $this->quotes->get(1);
            $this->data = array_merge($this->data, $record);
            $this->render();
        }

}

/* End of file First.php */
/* Location: application/controllers/First.php */
<?php 
	require_once "../../model/Query.php";
	$query = new Query();
	if(isset($_POST['danhmuc']))
	{
		$id_danhmuc = $_POST['danhmuc'];
		if( isset($_POST['status']) )
		{
			$id_da = $_POST['da'];
			$arr_dathongso = [];
			$data_thongso = $query->DanhSach("thongso", [], ["danhmuc" => "="], [], [], ["danhmuc" => $id_danhmuc]);
		    $data_dathongso = $query->DanhSach("dathongso", [], ["da" => "="], [], [], ["da" => $id_da]);
		    foreach ($data_dathongso as $key => $value) {
		        $arr_dathongso[$value->thongso] = $value; 
		        foreach ($data_thongso as $key => $val) {
		            if($val->id == $value->thongso){
		                $arr_dathongso[$value->thongso] = $val->id;
		            }
		        }
		    }
		    
		    foreach ($data_thongso as $key => $val) 
            {
                if($val->danhmuc == $id_danhmuc)
                {
                    if(array_key_exists($val->id,$arr_dathongso))
                    {
                        echo '<label class="danhmuc-"><input type="checkbox" name="thongso[]" value="'.$val->id.'" checked> '.$val->ten.'</label><br><br>';
                    }
                    else
                    {
                        echo '<label class="danhmuc-"><input type="checkbox" name="thongso[]" value="'.$val->id.'" > '.$val->ten.'</label><br><br>'; 
                    }
                }
                else
                {
                	echo '<input type="hidden" name="thongso[]" />';
                }
            }
		}
		else
		{
			$data_thongso = $query->DanhSach("thongso", [], ["danhmuc" => "="], [], [], ["danhmuc" => $id_danhmuc]);
			echo '<p class="tit-label">Chọn thông số</p>';
			if(!empty($data_thongso))
			{
		        foreach ($data_thongso as $key => $value) 
		        {
		            echo '<label class="danhmuc-'.$value->danhmuc.'"><input type="checkbox" name="thongso[]" value="'.$value->id.'"> '.$value->ten.'</label><br><br>';
		        }
		    }
		    else
		    {
		    	echo '<input type="hidden" name="thongso[]" />';
		    }
		}
	}
?>
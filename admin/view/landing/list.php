<?php
	$data_list = $query->DanhSach("landing");
?>
<!-- Clipboard -->
<script src="lib/clipboard/clipboard.min.js"></script>

<div class="blog medium">
	<div class="bread">
		<h1>Landing <span>| danh sach</span></h1>
		<div class="button">
			<button><a href="landing/add">Thêm mới</a></button>
		</div>
		<div class="clear"></div>
	</div>

	<table class="table" style="width:100%">
        <thead>
            <tr>
                <th>Tên</th>
                <th>Link</th>
                <th>Ngày bắt đầu</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        	<?php
        	foreach ($data_list as $key => $value) 
        	{
        	?>
				<tr>
		            <td><i class="fal fa-copy copy-link" data-clipboard-text="<?=__URL__.$value->link?>"></i><?=$value->ten?></td>
		            <td><?=$value->link?></a></td>
		            <td class="can-giua"><?=$value->ngaydau?></a></td>
		            <td class="can-giua">
		            	<a href="landing/edit?id=<?=$value->id?>"><i class="fas fa-pencil"></i></a>
                    	<a onClick="return confirm('Are you sure?')" href="landing/del?id=<?=$value->id?>"><i class="fal fa-trash-alt"></i></a>
                    </td>
		        </tr>
			<?php
        	}
            ?>
        </tbody>
    </table>
    
	<script>
		$(document).ready( function () {
			// Clipboard
			var clipboard = new ClipboardJS('.copy-link');
		});
	</script>
</div>
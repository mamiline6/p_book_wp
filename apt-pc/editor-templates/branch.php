<h4>基本情報</h4>
<table class="editor_template_table">
	<tr>
		<th>郵便番号</th>
		<td>〒<?php tpl_custom( array( 'meta_key' => 'cf_zip', 'size' => 30 )); ?></td>
	</tr>
	<tr>
		<th>住所</th>
		<td><?php tpl_custom( array( 'meta_key' => 'cf_address', 'size' => 84 )); ?></td>
	</tr>
	<tr>
		<th>電話番号</th>
		<td><?php tpl_custom( array( 'meta_key' => 'cf_tel', 'size' => 30 )); ?></td>
	</tr>
	<tr>
		<th>営業時間</th>
		<td><?php tpl_custom( array( 'meta_key' => 'cf_open', 'size' => 50 )); ?></td>
	</tr>
	<tr>
</table>

<h4>アクセス</h4>
<?php tpl_editor(); ?>

<h4>Googleマップ情報</h4>
<table class="editor_template_table">
	<tr>
		<th>緯度</th>
		<td><?php tpl_custom( array( 'meta_key' => 'cf_lat', 'size' => 30 )); ?></td>
	</tr>
	<tr>
		<th>経度</th>
		<td><?php tpl_custom( array( 'meta_key' => 'cf_lng', 'size' => 30 )); ?></td>
	</tr>
	<tr>
		<th>縮尺</th>
		<td><?php tpl_custom( array( 'meta_key' => 'cf_zoom', 'size' => 30 )); ?></td>
	</tr>
</table>

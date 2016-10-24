<?php if (!defined('THINK_PATH')) exit();?> 
      		<?php if(is_array($news_list)): $k = 0; $__LIST__ = $news_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
      				<td><?php echo ($k); ?></td>
					<td><?php echo ($vo['nid']); ?></td>
					<td><?php echo ($vo['title']); ?></td>
					<td><?php echo ($vo['name']); ?></td>
					<td><?php echo ($vo['sort_name']); ?></td>
					<td><?php echo ($vo['content']); ?></td>
					<td><?php echo ($vo['img']); ?></td>
					<td><?php echo ($vo['date']); ?></td>
					<td class="text-center">
						<div class="btn-group">
							<button type="button" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-pencil"></span></button>
							<button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button>
						</div>
					</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
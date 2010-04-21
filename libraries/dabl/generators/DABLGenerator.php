<?php

class DABLGenerator extends BaseGenerator {

	static $action_icons = array('Edit' => 'pencil', 'Show' => 'search', 'Delete' => 'trash');
	static $standard_actions = array('Show', 'Edit', 'Delete');

	/**
	 * Returns an associative array of file contents for
	 * each view generated by this class
	 * @param string $table_name
	 * @return array
	 */
	function getViews($table_name){
		return array(
			'edit.php' => $this->getEditView($table_name),
			'index.php' => $this->getIndexView($table_name),
			'show.php' => $this->getShowView($table_name),
			'grid.php' => $this->getGridView($table_name),
//			'list.php' => $this->getListView($table_name)
		);
	}

	/**
	 * Generates a String with an html/php view for editing view MVC
	 * objects in the given table.
	 * @param String $table_name
	 * @param String $className
	 * @return String
	 */
	function getEditView($table_name){
		$controller_name = $this->getControllerName($table_name);
		$className = $this->getModelName($table_name);
		$plural = $this->getViewDirName($table_name);
		$single = strtolower($table_name);
		$instance = new $className;
		$pk = $instance->getPrimaryKey();
		ob_start();
?>
<h1><?php echo '<?php echo $'.$single.'->isNew() ? "New" : "Edit" ?>' ?> <?php echo ucfirst($table_name) ?></h1>
<div class="ui-widget-content ui-corner-all">
<form method="POST" action="<?php echo "<?php echo site_url('".$plural."/save') ?>" ?>">
<?php
		if($pk){
?>
	<input type="hidden" name="<?php echo $pk ?>" value="<?php echo '<?php echo htmlentities($'.$single.'->'."get$pk".'()) ?>' ?>" />
<?php
		}
		foreach($this->getColumns($table_name) as $column){
			$column_name = $column->getName();
			if($column_name==$pk)continue;
			$method = "get$column_name";
			$output = '<?php echo htmlentities($'.$single.'->'.$method.'()) ?>';
			$label = $column_name;
			if($column->isForeignKey()){
				$fk = reset($column->getForeignKeys());
				$foreign_table_name = $fk->getForeignTableName();
				$label = ucfirst($foreign_table_name);
				$fk_single = strtolower($foreign_table_name);
				$foreign_method = 'get'.$foreign_table_name.'s';
				$foreign_column_name = reset($fk->getForeignColumns());
				$foreign_column_method = 'get'.$foreign_column_name;
				$foreign_open_foreach = '<?php foreach('.$this->getModelName($foreign_table_name).'::getAll() as $'.$fk_single.'): ?>';
				$foreign_option = '<option <?php if($'.$single.'->get'.$column_name.'() === $'.$fk_single.'->'.$foreign_column_method.'()) echo \'"selected="SELECTED"\' ?> value="<?php echo $'.$fk_single.'->'.$foreign_column_method.'() ?>"><?php echo $'.$fk_single.'->'.$foreign_column_method.'() ?></option>';
				$foreign_close_foreach = '<?php endforeach ?>';
			}
			$input_id = strtolower($single.'_'.$column_name);
?>
	<p>
		<label for="<?php echo $input_id ?>"><?php echo $label ?></label>
<?php
switch($column->getType()){
	case PropelTypes::LONGVARCHAR:
?>
		<textarea id="<?php echo $input_id ?>" name="<?php echo $column_name ?>"><?php echo $output ?></textarea>
<?php
		break;
	default:
		if($column->isForeignKey()){
?>
		<select id="<?php echo $input_id ?>" name="<?php echo $column_name ?>">
		<?php echo $foreign_open_foreach ?>

			<?php echo $foreign_option ?>

		<?php echo $foreign_close_foreach ?>

		</select>
<?php
		}
		else{
?>
		<input id="<?php echo $input_id ?>" type="text" name="<?php echo $column_name ?>" value="<?php echo $output ?>" />
<?php
		}
		break;
}
?>
	</p>
<?php
		}
?>
	<p>
		<span class="ui-state-default ui-corner-all ui-button-link">
			<span class="ui-icon ui-icon-disk"></span>
			<input type="submit" value="<?php echo '<?php echo $'.$single.'->isNew() ? "Save" : "Save Changes" ?>' ?>" />
		</span>
	</p>
</form>
</div>
<?php
		return ob_get_clean();
	}

	/**
	 * Generates a String with an html/php view showing all of the
	 * objects from the given table in a list
	 * @param String $table_name
	 * @param String $className
	 * @return String
	 */
	function getListView($table_name){
		$controller_name = $this->getControllerName($table_name);
		$className = $this->getModelName($table_name);
		$instance = new $className;
		$pk = $instance->getPrimaryKey();
		$plural = $this->getViewDirName($table_name);
		$single = strtolower($table_name);
		ob_start();
?>
<ul class="object-list <?php echo $single ?>-list">
	<?php echo '<?php foreach($'.$plural.' as $key => $'.$single.'): ?>' ?>

	<li class="<?php echo '<?php echo' ?> ($key & 1) ? 'even' : 'odd' <?php echo '?>' ?>">
		<dl>
			<?php foreach($instance->getColumnNames() as $column_name): ?>

			<dt><?php echo $column_name ?></dt>
			<dd><?php echo '<?php echo htmlentities($'.$single.'->'."get$column_name".'()) ?>' ?></dd>
			<?php endforeach ?>

		</dl>
	</li>
	<?php echo '<?php endforeach ?>' ?>

</ul>
<?php
		return ob_get_clean();
	}

	/**
	 * Generates a String with an html/php view showing all of the
	 * objects from the given table in a grid
	 * @param String $table_name
	 * @param String $className
	 * @return String
	 */
	function getGridView($table_name){
		$controller_name = $this->getControllerName($table_name);
		$className = $this->getModelName($table_name);
		$instance = new $className;
		$pk = $instance->getPrimaryKey();
		$plural = $this->getViewDirName($table_name);
		$single = strtolower($table_name);
		$actions = $this->getActions($table_name);
		$columns = $this->getColumns($table_name);

		ob_start();
?>
<table class="object-grid <?php echo $single ?>-grid">
	<thead>
		<tr>
<?php
		foreach($columns as $key => $column){
			$column_name = $column->getName();
?>
			<th class="ui-state-default ui-th-column ui-th-ltr <?php if($key==0)echo 'ui-corner-tl' ?>"><?php echo $column_name ?></th>
<?php
		}
		$key = 1;
		foreach($actions as $action){
?>
			<th class="ui-state-default ui-th-column ui-th-ltr grid-action-column <?php if($key == count($actions))echo 'ui-corner-tr' ?>">&nbsp;</th>
<?php
			++$key;
		}
?>
		</tr>
	</thead>
	<tbody>
<?php echo '<?php foreach($'.$plural.' as $key => $'.$single.'): ?>' ?>

		<tr class="<?php echo '<?php echo' ?> ($key & 1) ? 'even ui-priority-secondary' : 'odd' <?php echo '?>' ?> ui-widget-content ui-row-ltr">
<?php
		foreach($columns as $column){
			$column_name = $column->getName();
			switch($column->getType()){
				case PropelTypes::TIMESTAMP:
					$format = 'VIEW_TIMESTAMP_FORMAT';
					break;
				case PropelTypes::DATE:
					$format = 'VIEW_DATE_FORMAT';
					break;
				default:
					$format = null;
					break;
			}
			$output = '<?php echo htmlentities($'.$single.'->'."get$column_name".'('.$format.')) ?>';
?>
			<td><?php echo $output ?>&nbsp;</td>
<?php
		}
		foreach($actions as $action_label => $action_url){
			if($action_label == 'Index') continue;
?>
			<td>
				<a<?php if(in_array($action_label, self::$standard_actions)) : ?> class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" title="<?php echo $action_label . " " . ucfirst($single) ?>"<?php endif ?> href="<?php echo $action_url ?>"<?php if(strtolower($action_label) == 'delete') echo ' onclick="return confirm(\'Are you sure?\');"' ?>>
					<?php if(array_key_exists($action_label, self::$action_icons)): ?><span class="ui-icon ui-icon-<?php echo self::$action_icons[$action_label] ?>"><?php endif ?><?php echo $action_label ?><?php if(array_key_exists($action_label, self::$action_icons)): ?></span><?php endif ?>
					
				</a>
			</td>
<?php
		}
?>
		</tr>
<?php echo '<?php endforeach ?>' ?>

	</tbody>
</table>
<?php
		return ob_get_clean();
	}

	/**
	 * Generates a String with an html/php view showing all of the
	 * objects from the given table in a grid
	 * @param String $table_name
	 * @param String $className
	 * @return String
	 */
	function getIndexView($table_name){
		$controller_name = $this->getControllerName($table_name);
		$className = $this->getModelName($table_name);
		$instance = new $className;
		$pk = $instance->getPrimaryKey();
		$plural = $this->getViewDirName($table_name);
		$single = strtolower($table_name);
		ob_start();
?>
<h1>
	<?php echo ucfirst($plural) ?>
	<a href="<?php echo "<?php echo site_url('".$plural."/edit') ?>" ?>" class="ui-state-default ui-corner-all ui-button-link" title="New <?php echo str_replace('_', ' ', ucfirst($single)) ?>">
		<span class="ui-icon ui-icon-plusthick"></span>New <?php echo str_replace('_', ' ', ucfirst($single)) ?>

	</a>
</h1>

<div class="ui-widget-content ui-corner-all">
<?php echo '<?php load_view("'.$plural.'/grid", $params) ?>' ?>
</div>
<?php
		return ob_get_clean();
	}

	/**
	 * Generates a String with an html/php view for show view MVC
	 * objects in the given table.
	 * @param String $table_name
	 * @param String $className
	 * @return String
	 */
	function getShowView($table_name){
		$controller_name = $this->getControllerName($table_name);
		$className = $this->getModelName($table_name);
		$plural = $this->getViewDirName($table_name);
		$single = strtolower($table_name);
		$instance = new $className;
		$pk = $instance->getPrimaryKey();
		$actions = $this->getActions($table_name);
		unset($actions['Show']);
		ob_start();
?>
<h1>View <?php echo ucfirst($table_name) ?></h1>
<p>
<?php foreach($actions as $action_label => $action_url): ?>
	<a href="<?php echo $action_url ?>" class="ui-state-default ui-corner-all ui-button-link" title="<?php echo $action_label . ' ' . ucfirst($single) ?>"<?php if($action_label=='delete') echo " onclick=\"return confirm('Are you sure?');\"";?>>
		<span class="ui-icon ui-icon-<?php echo self::$action_icons[$action_label] ?>"></span><?php echo $action_label ?>

	</a>
<?php endforeach ?>
</p>
<div class="ui-widget-content ui-corner-all">
<?php
		foreach($this->getColumns($table_name) as $column){
			$column_name = $column->getName();
			if($column_name==$pk)continue;
			$method = "get$column_name";
			switch($column->getType()){
				case PropelTypes::TIMESTAMP:
					$format = 'VIEW_TIMESTAMP_FORMAT';
					break;
				case PropelTypes::DATE:
					$format = 'VIEW_DATE_FORMAT';
					break;
				default:
					$format = null;
					break;
			}
?>

<p>
	<strong><?php echo $column_name ?>:</strong>
	<?php echo '<?php echo htmlentities($'.$single.'->'.$method.'('.$format.')) ?>' ?>

</p>

<?php
		}
?>
</div>
<?php
		return ob_get_clean();
	}

	function getActions($table_name){
		$controller_name = $this->getControllerName($table_name);
		$className = $this->getModelName($table_name);
		$plural = $this->getViewDirName($table_name);
		$single = strtolower($table_name);
		$instance = new $className;
		$pk = $instance->getPrimaryKey();
		$pkMethod = "get$pk";
		$actions = array();
		if(!$pk)return $actions;

		foreach(self::$standard_actions as $staction)
			$actions[$staction] = "<?php echo site_url('".$plural."/" . strtolower($staction) . "/'.$".$single."->".$pkMethod."()) ?>";

		$fkeys_to = $this->getForeignKeysToTable($table_name);
		foreach($fkeys_to as $k => $r){
			$from_table = $r['from_table'];
			$from_className = $this->getModelName($from_table);
			$from_column = $r['from_column'];
			$to_column = $r['to_column'];
			if(@$used_to[$from_table]){
				unset($fkeys_to[$k]);
				continue;
			}
			$used_to[$from_table]=$from_column;
			$actions[ucwords($this->getViewDirName($from_table))] = "<?php echo site_url('".$this->getViewDirName($from_table).'/'.$single."/'.$".$single."->".$pkMethod."()) ?>";
		}

		return $actions;
	}

	/**
	 * Generates a String with Controller class for MVC
	 * @param String $table_name
	 * @param String $className
	 * @return String
	 */
	function getController($table_name){
		$controller_name = $this->getControllerName($table_name);
		$plural = $this->getViewDirName($table_name);
		$className = $this->getModelName($table_name);
		$single = strtolower($table_name);
		$instance = new $className;
		$pk = $instance->getPrimaryKey();
		$pkMethod = "get$pk";

		ob_start();
		echo "<?php\n";
?>

class <?php echo $controller_name ?> extends ApplicationController {

	function index(){
		$this['<?php echo $plural ?>'] = <?php echo $className ?>::getAll();
		$this['page'] = '<?php echo ucfirst($plural) ?>';
	}

	function save($id = null){
		$id = $id ? $id : @$_POST[<?php echo $className ?>::getPrimaryKey()];
		$<?php echo $single ?> = $id ? <?php echo $className ?>::retrieveByPK($id) : new <?php echo $className ?>;
		$<?php echo $single ?>->fromArray($_POST);
		$<?php echo $single ?>->save();
		redirect('<?php echo $plural ?>/show/'.$<?php echo $single ?>-><?php echo $pkMethod ?>());
	}

	function delete($id = null){
		$id = $id ? $id : @$_POST[<?php echo $className ?>::getPrimaryKey()];
		$<?php echo $single ?> = <?php echo $className ?>::retrieveByPK($id);
		$<?php echo $single ?>->delete();
		redirect('<?php echo $plural ?>');
	}

	function show($id = null){
		$id = $id ? $id : @$_POST[<?php echo $className ?>::getPrimaryKey()];
		$<?php echo $single ?> = $id ? <?php echo $className ?>::retrieveByPK($id) : new <?php echo $className ?>;
		$this['<?php echo $single ?>'] = $<?php echo $single ?>;
	}

	function edit($id = null){
		$id = $id ? $id : @$_POST[<?php echo $className ?>::getPrimaryKey()];
		$<?php echo $single ?> = $id ? <?php echo $className ?>::retrieveByPK($id) : new <?php echo $className ?>;
		$this['<?php echo $single ?>'] = $<?php echo $single ?>;
	}

<?php
		foreach($this->getForeignKeysFromTable($table_name) as $r){
			$to_table = $r['to_table'];
			$to_class_name = $this->getModelName($to_table);
			$from_column = $r['from_column'];
			$fk_single =  strtolower($to_table);
			if(@$used_from[$to_table]) continue;
			$used_from[$to_table] = $from_column;
?>
	function <?php echo $fk_single ?>($id = null){
		$id = $id ? $id : @$_POST[<?php echo $to_class_name ?>::getPrimaryKey()];
		$<?php echo $fk_single ?> = $id ? <?php echo $to_class_name ?>::retrieveByPK($id) : new <?php echo $to_class_name ?>;

		$this['<?php echo $plural ?>'] = $<?php echo $fk_single ?>->get<?php echo $table_name ?>s();
		$this->renderView('<?php echo $plural ?>/grid');
		$this->render_view = false;
	}

<?php
		}
?>

}
<?php
		return ob_get_clean();
	}

	/**
	 * @param string $table_name
	 * @return string
	 */
	function getControllerName($table_name){
		$controller_name = str_replace(' ', '', ucwords(str_replace('_', ' ', $table_name)));
		$controller_name = self::pluralize($controller_name);
		$controller_name = $controller_name.'Controller';
		return $controller_name;
	}

	function getControllerFileName($table_name){
		return $this->getControllerName($table_name).".php";
	}
}

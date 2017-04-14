<h1 class="page-header">Edit Album</h1>
<?php echo Form::open('/albums/edit/<?php echo$album->id; ?>'); ?>
	<p>
		<?php echo Form::label('Title', 'title'); ?>
		<?php echo Form::input('title', Input::post('title', isset($album) ? $album->title : ''), array('class' => 'form-control')); ?>
	</p>
	<p>
		<?php echo Form::label('Author', 'author'); ?>
		<?php echo Form::input('author', Input::post('author', isset($album) ? $album->author : ''), array('class' => 'form-control')); ?>
	</p>
	<p>
		<?php echo Form::label('Category', 'category'); ?>
		<?php echo Form::select('category', $album->category, array(
				'0' => 'Select',
				'Social' => 'Social',
				'World' => 'World',
				'Science' => 'Science',
				'Finance/Business' => 'Finance/Business',
				'Philosophy' => 'Philosophy',
				'Other' => 'Other',
			), array('class' => 'form-control')); ?>
	</p>
<p>
		<?php echo Form::label('Year Released', 'year_released'); ?>
		<?php echo Form::input('year_released', Input::post('year_released', isset($album) ? $album->year_released : ''), array('class' => 'form-control')); ?>
	</p>
<p>
		<?php echo Form::label('Cover URL', 'cover_url'); ?>
		<?php echo Form::input('cover_url', Input::post('cover_url', isset($album) ? $album->cover_url : ''), array('class' => 'form-control')); ?>
	</p>
<p>
		<?php echo Form::label('Details', 'details'); ?>
		<?php echo Form::Textarea('details', Input::post('details', isset($album) ? $album->details : ''), array('cols' => 60, 'rows' => 8, 'class' => 'form-control')); ?>
	</p>
<p>
		<?php echo Form::label('Youtube Link', 'link'); ?>
		<?php echo Form::input('link', Input::post('link', isset($album) ? $album->link : ''), array('class' => 'form-control')); ?>
	</p>
<input type="hidden" name="album_id" value="<?php echo $album->id; ?>">
<div class="actions">
	<?php echo Form::submit('send'); ?>

</div>

<?php echo Form::close(); ?>
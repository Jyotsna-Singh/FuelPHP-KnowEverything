<?php

class Controller_Albums extends Controller_Template
{
	//Display Albums
	public function action_index()
	{
		//Get All Albums
		$albums = Model_Album::find('all');
		
		$data = array('albums' => $albums);
        $this->template->title = 'My Albums';
        $this->template->content = View::forge('albums/index', $data);
	}
	
	//Add Albums
	public function action_add()
	{
		//Check Form Submit
		if(Input::post('send')){
			$album = new Model_Album();
			$album->author = Input::post('author');
			$album->title = Input::post('title');
			$album->category = Input::post('category');
			$album->year_released = Input::post('year_released');
			$album->cover_url = Input::post('cover_url');
			$album->details = Input::post('details');
			$album->link = Input::post('link');
			$album->save();
			
			Session::set_flash('success', 'Video Added');
			Response::redirect('/albums');
		}
		
		$data = array();
        $this->template->title = 'Add Albums';
        $this->template->content = View::forge('albums/add', $data);
	}
	
	//View Albums
	public function action_view($id)
	{
		//Get Album
		$albums = Model_Album::find('first', array(
			'where' => array(
				'id' => $id
			)
		));
		
		$data = array('album' => $albums);
        $this->template->title = 'Albums';
        $this->template->content = View::forge('albums/view', $data);
	}
	
	//Edit Albums
	public function action_edit($id)
	{
		//Check Form Submit
		if(Input::post('send')){
			$album = Model_Album::find(Input::post('album_id'));
			$album->author = Input::post('author');
			$album->title = Input::post('title');
			$album->category = Input::post('category');
			$album->year_released = Input::post('year_released');
			$album->cover_url = Input::post('cover_url');
			$album->details = Input::post('details');
			$album->link = Input::post('link');
			$album->save();
			
			Session::set_flash('success', 'Video Updated');
			Response::redirect('/albums');
		}
		//Get Album
		$albums = Model_Album::find('first', array(
			'where' => array(
				'id' => $id
			)
		));
		
		$data = array('album' => $albums);
        $this->template->title = 'Edit Album';
        $this->template->content = View::forge('albums/edit', $data);
	}
	
	//Delete Albums
	public function action_delete($id)
	{
		$album = Model_Album::find($id);
		$album->delete();
		
		Session::set_flash('success', 'Video Deleted');
			Response::redirect('/albums');
	}

}
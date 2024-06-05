<?php

class ListCategory {
	public function __construct()
	{
		require_once('../../Model/admin/category.php');
		$categoryModel = new CategoryModel;
		$lists = $categoryModel->categoryList();

		require('pages/category/list.php');
	}
}


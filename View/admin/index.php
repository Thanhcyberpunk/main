<?php
	session_start(); /*đăng ký phiên làm việc*/
        ob_start();
	require '../../Config/config.php';
	require '../../Lib/function.php';
	require '../../Model/Database.php';
	$db = new Database();

	if (!empty($_SESSION['admin'])){
		require('layouts/header.php');
		require_once('../../Model/admin/category.php');
        $categoryModel = new CategoryModel;
        $lists = $categoryModel->categoryList();

		if (isset($_GET['controller'])) {
			require '../../Route/admin/web.php'; /*xử lý các request trong Route/web.php*/
		} else {
			require('pages/home.php');
		}

		require('layouts/footer.php');
	} else {
		header('Location: ../../');
	}

	$db->closeDatabase();
require '../../Lib/function.php';



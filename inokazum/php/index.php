<?php
        // Smartyを使用するためのおまじない1（外部ファイル取り込み指示）
        require_once('Smarty.class.php');
        // Smartyを使用するためのおまじない2（Smartyクラスの呼び出し）
        $smarty = new Smarty;
        // テンプレートフォルダの場所指定
        $smarty->template_dir = '../templates/';
        // コンパイル用のテンプレートフォルダの場所指定
        $smarty->compile_dir = '../templates_c/';
        // nameという変数にSunSeerという文字を代入
        $smarty->assign('name', 'SunSeer');
        // ディスプレイ表示
        $smarty->display('index.tpl');
?>
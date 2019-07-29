<?php
/**
 * Created by PhpStorm.
 * User: Жека
 * Date: 29.07.2019
 * Time: 12:16
 */
return [
    'components' => [
        'assetManager' => [
            'bundles' => [
                'all' => [
                    'class' => 'yii\web\AssetBundle',
                    'basePath' => '@backend/assets',
                    'baseUrl' => '@backend/assets',
                    'css' => ['backend.css'],
                    'js' => ['backend.js'],
                ],
                'panel' => [
                    'css' => [
                        'bower_components/bootstrap/dist/css/bootstrap.min.css',
                        'bower_components/font-awesome/css/font-awesome.min.css',
                        'bower_components/Ionicons/css/ionicons.min.css',
                        'dist/css/AdminLTE.min.css',
                        'dist/css/skins/skin-blue.min.css',
                        //'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic'
                    ],
                    'js' => [
                        'bower_components/jquery/dist/jquery.min.js',
                        'bower_components/bootstrap/dist/js/bootstrap.min.js',
                        'dist/js/adminlte.min.js'
                    ],
                    'depends' => ['all']
                ],
                'login' => [
                    'css' => [
                        'bower_components/bootstrap/dist/css/bootstrap.min.css',
                        'bower_components/font-awesome/css/font-awesome.min.css',
                        'bower_components/Ionicons/css/ionicons.min.css',
                        'dist/css/AdminLTE.min.css',
                        'plugins/iCheck/square/blue.css',
                    ],
                    'js' => [
                        'bower_components/jquery/dist/jquery.min.js',
                        'bower_components/bootstrap/dist/js/bootstrap.min.js',
                        'plugins/iCheck/icheck.min.js'
                    ],
                    'depends' => ['all']
                ],
            ],
        ],
    ],
];
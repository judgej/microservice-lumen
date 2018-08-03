<?php
	/**
	 * Created by PhpStorm.
	 * User: fabrizio
	 * Date: 03/08/18
	 * Time: 14.09
	 */

	/**
	 * Alias ApiService
	 */
	if (!class_exists('ApiService')) {
		class_alias('App\Services\ApiService', 'ApiService');
	}

	/**
	 * Alias ResponseService
	 */
	if (!class_exists('ResponseService')) {
		class_alias('App\Services\ResponseService', 'ResponseService');
	}

	/**
	 * Alias HelpersService
	 */
	if (!class_exists('HelpersService')) {
		class_alias('App\Services\HelpersService', 'HelpersService');
	}

	/**
	 * Alias JwtAuth
	 */
	if (!class_exists('JWTAuth')) {
		class_alias('Tymon\JWTAuth\Facades\JWTAuth', 'JWTAuth');
	}
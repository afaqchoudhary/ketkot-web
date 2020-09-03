<?php

namespace App\Http\Controllers\Utils;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageUrlController extends Controller
{

    /**
     * $disk
     *
     * @var string
     */
    public static $disk = 'upload';


    /**
     * $base_image_path
     *
     * @var string
     */
    public static $base_image_path = 'public';

    /**
     * $project_image_path
     *
     * @var string
     */
    public static $project_image_path = 'upload/projectImages/';


    /**
     * $project_cover_image_path
     *
     * @var string
     */
    public static $project_cover_image_path = 'upload/projectCoverImages/';


    /**
     * $project_file_path
     *
     * @var string
     */
    public static $project_file_path = 'upload/projectFile/';

    /**
     * $user_image
     *
     * @var string
     */
    public static $user_profile_image_path = 'upload/userProfileImages/';


    /**
     * $developer_profile_image_path
     *
     * @var string
     */
    public static $developer_profile_image_path = 'upload/developerProfileImages/';


    /**
     * $quote_file_path
     *
     * @var string
     */
    public static $quote_file_path = 'upload/quoteFiles/';
}

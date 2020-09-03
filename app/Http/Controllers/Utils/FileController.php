<?php

namespace App\Http\Controllers\Utils;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use File;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{


    /**
     * $project_cover_image_size
     *
     * @var integer
     */
    public static $project_cover_image_size = 2000;


    /**
     * $project_image_size
     *
     * @var integer
     */
    public static $project_image_size = 5000;


    /**
     * $project_file_size
     *
     * @var integer
     */
    public static $project_file_size = 100000;

    /**
     * createUpload
     *
     * @return void
     */
    public static function createUpload($file, $file_path, $file_name, $visibility)
    {
        Storage::disk('spaces')->putFile($file_path, $file, $visibility);
    }


    /**
     * getUpload
     *
     * @param mixed $file_path
     * @return file url
     */
    public static function getUpload($file_path)
    {
        return Storage::disk('spaces')->url($file_path);
    }

    /**
     * deleteUpload
     *
     * @param mixed $file_path
     * @return void
     */
    public static function deleteUpload($file_path)
    {
        Storage::disk('spaces')->delete($file_path);
    }


    /**
     * downloadUpload
     *
     * @param mixed $file_path
     * @return void
     */
    public static function downloadUpload($file_path, $file_name)
    {
        return Storage::disk('spaces')->download($file_path, $file_name);
    }
}
